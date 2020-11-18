<?php

namespace Tests\Feature;

use App\Models\Activity;
use App\Models\State;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActivitiesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_route_actividades_is_ok()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/actividades');
        $response->assertStatus(200);

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
}
