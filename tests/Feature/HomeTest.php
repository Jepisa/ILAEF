<?php

namespace Tests\Feature;

use App\Models\Country;
use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /** @test*/
    public function principal_route_is_ok()
    {
        $this->withoutExceptionHandling();

        $this->get('/')->assertStatus(200);
    }

    /** @test*/
    public function principal_route_redirects_to_view_home()
    {
        $this->withoutExceptionHandling();


        $response = $this->get('/');

        $response->assertViewIs('home');
    }

    /** @test*/
    public function view_home_receives_only_the_last_eight_news()
    {
        $this->withoutExceptionHandling();

        Country::factory()->create();

        News::factory()->count(10)->create();


        $news = News::orderByDesc('created_at')->take(8)->get();


        $response = $this->get('/');

        $response->assertViewHas('news', $news);

    }
    /** @test */
    public function if_there_is_not_news_in_bd_the_principal_route_redirects_to_view_home_without_variable_news()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/');

        $response->assertViewMissing('news');// We need to see if this test is ok, maybe we can change it

    }

}
