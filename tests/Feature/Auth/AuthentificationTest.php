<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Str;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_token_generation()
    {
        User::factory()->create([
            'email'    => $email = $this->faker->safeEmail(),
            'password' => bcrypt($password = Str::random())
        ]);

        $this->postJson('/api/auth/token', [
            'email'    => $email,
            'password' => $password
        ])->assertStatus(200)
            ->assertJsonStructure([
                'access_token',
                'token_type'
            ]);
    }
}
