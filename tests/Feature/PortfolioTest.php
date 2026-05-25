<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_home_page_loads(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Camilo Sánchez', false);
    }

    public function test_projects_page_loads(): void
    {
        $response = $this->get('/proyectos');

        $response->assertStatus(200);
    }

    public function test_contact_page_loads(): void
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
    }
}
