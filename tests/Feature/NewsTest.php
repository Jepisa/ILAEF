<?php

namespace Tests\Feature;

use App\Models\Country;
use App\Models\News;
use App\Models\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_route_noticias_crear_is_ok()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/noticias/crear');
        $response->assertOk();
    }

    /** @test */
    public function a_news_has_been_successfully_stored()
    {
        $this->withoutExceptionHandling();

        $this->responseDatesOfANewsSent();

        $titleOfNews = $this->datesOfANews()['title'];

        $News = News::where('title', $titleOfNews)->first();

        $pathOfNews = $News->image;

        //Assert the file was stored...
        Storage::disk('local')->assertExists($pathOfNews);

        // Assert a file does not exist...
        //Storage::disk()->assertMissing('missing.jpg'); //ESto lo puedo usar para el test de eliminación de la actividad y/o noticia



        // $this->get('/crearNoticia')
        //     ->type('Mi primer noticia', 'title')
        //     ->type('Esta es una breve descripción de mi noticia' ,'description')
        //     ->type('url', 'https://ilaef.org')
        //     ->press('publicar')
        //     ->seePageIs('blog')
        //     ->click('Mi primer noticia')
        //     ->see('');
    }

    /** @test */
    public function a_news_has_been_successfully_created()
    {
        $this->responseDatesOfANewsSent();

        $news = $this->datesOfANews();

        $title = $news['title'];
        $description = $news['description'];
        $url = $news['url'];
        $country_id = $news['country_id'];
        $state_id = $news['state_id'];

        //Me falta poner la ruta donde se guardó la imagen. Necesito tener el path que se está mandando
        $this->assertDatabaseHas('news', [
            'title' => $title,
            'description' => $description,
            'url' => $url,
            'country_id' => $country_id,
            'state_id' => $state_id,
        ]);

    }

    /** @test */
    public function AfterOfToCreateANewsRedirectsToTheViewHome()
    {
        $response = $this->responseDatesOfANewsSent();

        $response->assertViewIs('home');
    }

//funciones de ayuda para no repetir codigo
    private function file(){
        //Storage::fake('avatars'); //Here i can create a disk, but i don't know how to use it. I need to learn it
        //I create a country and a state
        Country::factory()->create([
            'name' => 'Argentina',
        ]);

        State::create([ 'name' => 'visible', ]);

        return $file = UploadedFile::fake()->image('avatar.jpg');
    }

    private function datesOfANews()
    {
        $file = $this->file();
        return [
            'title' => 'My first news',
            'description' => 'A litter description',
            'url' => 'https://iadef.org/',
            'country_id' => 1,
            'image' => $file,
            'state_id' => 1, //this part is to say if the news is visible or not (it cans has more options)
        ];
    }

    private function responseDatesOfANewsSent()
    {
        $new = $this->datesOfANews();

        return $response = $this->json('POST', '/noticias/crear', $new);
    }
}
