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
    public function testview_activities_receives_only_the_last_eight_news()
    {
        $this->withoutExceptionHandling();

        State::factory()->count(2)->create();

        Activity::factory()->count(10)->create();


        $activities = Activity::orderByDesc('created_at')->take(8)->get();
        $response = $this->get('/actividades');

        $response->assertViewHas('activities', $activities);

    }
}
