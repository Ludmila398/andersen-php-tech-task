<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class MessageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testStore(): void
    {
        $exampleMessage = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'message' => 'This is a test message.',
        ];
        $response = $this
            ->post(route('messages.store'), $exampleMessage);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('messages', ['email' => 'test@example.com']);
        $response->assertRedirect(route('messages.index'));
    }
}
