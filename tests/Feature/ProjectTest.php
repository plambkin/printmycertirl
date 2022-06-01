<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */

    public function a_user_has_an_email()
    {
        $this->withoutExceptionHandling();
        // Get me a user from table
        $this->get('/cert/{id}')->assertSee('$user->email');
        // Does it have an email
    }
}
