<?php

namespace Tests\Feature;

use App\Models\Activity;
use App\Models\User;
use App\Models\State;
use App\Models\Role;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class ActivitiesTest extends TestCase
{
    use RefreshDatabase;
//INDEX
    /** @test */
    public function the_route_actividades_is_ok()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/actividades');
        $response->assertStatus(200);

    }

    /** @test */
    public function the_route_actividades_redirects_to_activities_index_view()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/actividades');
        $response->assertViewIs('activities.index');

    }

    /** @test*/
    public function view_activities_receives_only_the_last_four_activities()
    {
        $this->withoutExceptionHandling();

        State::factory()->create();//Esta parte crea un estado 'Visible' si querés otro STATE podés pasarlo como parametro de  ->create()

        Activity::factory()->count(10)->create();

        $activities = Activity::orderByDesc('created_at')->take(4)->get();

        $response = $this->get('/actividades');
        $response->assertViewHas('activities', $activities);

    }

//CREATE AND STORE
    /** @test */
    public function the_route_actividades_crear_redirects_to_activities_create_view()
    {
        $users = $this->users();
        $response = $this   ->actingAs($users['administradorPrincipal'])
                            ->get('/actividades/crear');
        $response->assertViewIs('activities.create');
    }

    /** @test */
    public function image_of_activity_has_been_successfully_stored()
    {
        $this->withExceptionHandling();

        $newActivity = $this->newActivity();
        $users = $this->users();

        $this->actingAs($users['administradorPrincipal'])
            ->post('/actividades/crear', $newActivity);


        $Activity = Activity::where('title', $newActivity['title'])->firstOrfail();

        $pathOfNews = $Activity->image;

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
    public function a_activity_has_been_successfully_created_in_bd()
    {
        $newActivity = $this->newActivity();

        $users = $this->users();

        $this->actingAs($users['administradorPrincipal'])
            ->withSession(['header' => 'bar']) //La parte de session no sé si lo utilizaré
            ->post('/noticias/crear', $newActivity);


        //Me falta poner la ruta donde se guardó la imagen. Necesito tener el path que se está mandando
        $this->assertDatabaseHas('news', [
            'title' => $newActivity['title'],
            'lead' => $newActivity['lead'],
            'body' => $newActivity['body'],
            //Acá también tendríamos que revisar que la ruta de la imagen de la actividad este bien creada
            'state_id' => $newActivity['state_id'],
        ]);

    }

    /** @test */
    public function after_creating_an_activity_it_redirects_to_the_home_view()
    {
        $this->withoutExceptionHandling();
        $newNews = $this->newActivity();
        $users = $this->users();


        $response = $this->actingAs($users['administradorPrincipal'])
                            ->post('/actividades/crear', $newNews);
        $response->assertViewIs('activities.create');


    }

//EDIT AND UPDATE
    /** @test */
    public function i_can_see_the_edit_view_with_data_of_an_activity_for_edit_it()
    {
        $this->withoutExceptionHandling();
        //necesito
        State::factory()->create();
        $activity = Activity::factory()->create();

        $user = $this->users();

        //Mando
        $response = $this->actingAs($user['administrador'])
            ->get('actividades/'.$activity->slug.'/editar');
        //lo que espero

        $response->assertSeeInOrder([
            $activity->title,
            $activity->lead,
            $activity->body,
        ], true);;

    }

//funciones de ayuda para no repetir codigo


    private function users()
    {
        //Creo dos tipos de usuarios: Administrador Principal y Administrador
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
    private function newActivity()
    {
        $file = $this->fakeImage();
        $state = State::create([ 'name' => 'visible' ]);
        // $tag = Tag::create(['name' => 'Tag0']);

        //También hay que mandarle un array de categorias y etiquetas (ahora los comenté, pero si te sirven, usalos)
        return $newActivity = [
            'title' => 'My first Activity',
            'lead' => 'This is a test of de a new activity',
            'body' => 'This is the Body of my first Activity',
            'image' => $file,
            'state_id' => $state->id,
            // 'categories' => ['Category1', 'Category2'],
            // 'tags' => ['Tag1', 'Tag2'],
        ];


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
}
