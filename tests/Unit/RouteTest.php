<?php

use Tests\TestCase;

class RouteTest extends TestCase
{
    public function testReviewRoute()
    {
        $response = $this->get('/reviews');

        $response->assertStatus(200);
        $response->assertViewIs('review.index');
    }

    public function testProductRoute()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('product.index');
    }

    public function testProductShowRoute()
    {
        $response = $this->get('/products/1');

        $response->assertStatus(200);
        $response->assertViewIs('product.show');
    }

    public function testCartRoute()
    {
        $response = $this->get('/cart');

        $response->assertStatus(200);
        $response->assertViewIs('cart.index');
    }

    public function testMovieRoute()
    {
        $response = $this->get('/movies');

        $response->assertStatus(200);
        $response->assertViewIs('movies.index');
    }

    public function testRecipeRoute()
    {
        $response = $this->get('/recipes');

        $response->assertStatus(200);
        $response->assertViewIs('recipe.index');
    }

    public function testHomePageLoadsCorrectly()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
