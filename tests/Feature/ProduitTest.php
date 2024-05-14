<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProduitTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_produits_index_valid()
    {
        $response = $this->get(route('index'));
        $response->assertViewHas("produits"); //la vue contient la données suivante
        $response->assertStatus(200);
    }
    public function test_produits_create(): void
    {
        $response = $this->get(route("produit.create"));
        // Vérifier que la réponse contient le texte "Bienvenue sur notre site web"    
        $response->assertElementExists('form');
        $response->assertElementExists('input[name="titre"]');
        $response->assertElementExists('input[name="description"]');
    }
    public function test_page_inconnue(): void
    {
        $response = $this->get('nonexiste');
        $response->assertStatus(404);
    }
}
