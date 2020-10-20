<?php

namespace Tests\Feature;

use App\Models\Country;
use App\Models\News;
use App\Models\Role;
use App\Models\State;
use App\Models\User;
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

        $users = $this->users();


        $response = $this->actingAs($users['administradorPrincipal'])
            ->withSession(['foo' => 'bar']) //La parte de session no sé si lo utilizaré
            ->get('/noticias/crear');

        $response->assertOk();
    }

    /** @test */
    public function the_route_noticias_crear_redirects_to_news_create_view()
    {
        $this->withoutExceptionHandling();

        $users = $this->users();

        $response = $this->actingAs($users['administradorPrincipal'])
            ->withSession(['foo' => 'bar']) //La parte de session no sé si lo utilizaré
            ->get('/noticias/crear');
        $response->assertViewIs('news.create');
    }


    /** @test */
    public function image_has_been_successfully_stored()
    {
        $this->withoutExceptionHandling();

        $newNews = $this->newNews();
        $users = $this->users();

        $this->actingAs($users['administradorPrincipal'])
            ->withSession(['foo' => 'bar']) //La parte de session no sé si lo utilizaré
            ->post('/noticias/crear', $newNews);


        $News = News::where('title', $newNews['title'])->first();

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
    public function a_news_has_been_successfully_created_in_bd()
    {
        $this->withoutExceptionHandling();

        $newNews = $this->newNews();

        $users = $this->users();

        $this->actingAs($users['administradorPrincipal'])
            ->withSession(['foo' => 'bar']) //La parte de session no sé si lo utilizaré
            ->post('/noticias/crear', $newNews);


        //Me falta poner la ruta donde se guardó la imagen. Necesito tener el path que se está mandando
        $this->assertDatabaseHas('news', [
            'title' => $newNews['title'],
            'description' => $newNews['description'],
            'url' => $newNews['url'],
            'country_id' => $newNews['country_id'],
            'state_id' => $newNews['state_id'],
        ]);

    }

    /** @test */
    public function after_of_to_create_a_news_redirects_to_the_home_view()
    {
        $this->withoutExceptionHandling();
        $newNews = $this->newNews();
        $users = $this->users();


        $response = $this->actingAs($users['administradorPrincipal'])
            ->withSession(['foo' => 'bar']) //La parte de session no sé si lo utilizaré
            ->post('/noticias/crear', $newNews);

        $response->assertViewIs('home');
    }



    //Esto tiene que hacerlo logueado y siendo un admin y/o autorizado

    //en general ver que las validaciones funcionen

    //ver el formulario a que me mande a la view para crear la news/
    //crear una news exitosamente/
    //que la nueva news se haya guardado el la bd/
    //que la imagen de la new news se haya almacenado corectamente en el servidor/
    //ver,después de crear una news, la misma en la vista home. Verla con todas sus caracteristicas
    //poner ver la vista para editar una news con sus datos en la misma
    //edit una news
    //se atualizo bien en la bd
    //si actualicé una imagen ver que se borró el anterrior y que se guardó bien el nuevo
    //ver la nueva imagen esté en la vista
    //eliminar una news
    //ver en bd que ya no exista
    //ver que la imagen se borró en el servidor


//funciones de ayuda para no repetir codigo

    //Creo dos tipos de usuarios: Administrador Principal y Administrador
    private function users()
    {
        $administradorPricipal = Role::create(['name' => 'Administrador Principal']);
        $administrador = Role::create(['name' => 'Administrador']);

        $userAdministradorPrincipal = User::factory()->create([
            'role_id' => $administradorPricipal->id,
        ]);
        $userAdministrador = User::factory()->create([
            'role_id' => $administrador->id,
        ]);

        return [
            'administradorPrincipal' => $userAdministradorPrincipal,
            'administrador' =>$userAdministrador
        ];
    }

    //Solo crea una imagen
    private function fakeImage()
    {
        return $file = UploadedFile::fake()->image('avatar.jpg');
    }

    //Crea un array con todos los datos necesario(Un Country, Una Imagen) de una news
    private function newNews()
    {
        $country = Country::factory()->create([ 'name' => 'Argentina' ]);
        $file = $this->fakeImage();
        $state = State::create([ 'name' => 'visible' ]);

        $newNews = [
            'title' => 'My first news',
            'description' => 'A litter description',
            'url' => 'https://iadef.org/',
            'country_id' => $country->id,
            'image' => $file,
            'state_id' => $state->id, //this part is to say if the news is visible or not (it cans has more options)
        ];

        return $newNews;
    }
}
