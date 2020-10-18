<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActivitiesTest extends TestCase
{


    /** @test */
    public function the_route_actividades_is_ok()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/actividades');
        $response->assertStatus(200);
        
    }
}
