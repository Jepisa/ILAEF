<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

//     public function viewHasEvents()
//     {
//         $response = $this->get('/');

//         $response->assertStatus(200); // Acá seguir y poner que en la vista home (vista principal) se esté recibiendo una variable con los eventos más recientes
//     }
}
