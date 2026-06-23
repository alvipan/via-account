<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use Tests\TestCase;

class SsoUserEndpointTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_endpoint_returns_sso_identity_for_profile_scope(): void
    {
        $user = User::factory()->create([
            'name' => 'Via User',
            'email' => 'via@example.com',
        ]);

        Passport::actingAs($user, ['profile']);

        $this->getJson('/api/user')
            ->assertOk()
            ->assertJson([
                'id' => $user->id,
                'sub' => (string) $user->id,
                'name' => 'Via User',
                'email' => null,
            ]);
    }

    public function test_user_endpoint_returns_email_when_email_scope_is_granted(): void
    {
        $user = User::factory()->create([
            'email' => 'via@example.com',
        ]);

        Passport::actingAs($user, ['profile', 'email']);

        $this->getJson('/api/user')
            ->assertOk()
            ->assertJson([
                'email' => 'via@example.com',
            ]);
    }
}
