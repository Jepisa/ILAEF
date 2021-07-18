<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StaticViewsTest extends TestCase
{
    /** @test */
    public function the_route_quienes_somos_is_ok_and_redirects_to_view_aboutUs()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/quienes-somos');//Maybe we have to change the route 'quienes-somos' for 'sobre-nosotros', but we need to ask to Natalia
        $response->assertStatus(200);
        $response->assertViewIs('aboutUs'); //is better if we use the names of the views in english but not in the url
    }

    /** @test */
    public function the_route_nuestra_filosofia_is_ok_and_redirects_to_view_ourPhilosophy()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/nuestra-filosofia');
        $response->assertStatus(200);
        $response->assertViewIs('ourPhilosophy');
    }

}
