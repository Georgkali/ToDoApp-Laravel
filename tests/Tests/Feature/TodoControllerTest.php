<?php

namespace Tests\Feature;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Database\Factories\UserFactory;

class TodoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_visit_list_page()
    {
        /** @var Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get(route('todos.index'));

        $response->assertStatus(200);
        $response->assertViewIs('data');
        $response->assertViewHas('todos');
    }

    public function test_we_can_visit_create_page()
    {
        /** @var Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get(route('todos.create'));

        $response->assertStatus(200);
        $response->assertViewIs('add');

    }

    public function test_we_can_visit_show_page()
    {
        /** @var Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);
        $todo = Todo::factory()->create();
        $response = $this->get('todos/1', ['todo' => $todo]);
        $response->assertStatus(200);
        $response->assertViewIs('edit');

    }

    public function test_we_can_delete_todo()
    {
        /** @var Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);
        $todo = Todo::factory()->create();
        $response = $this->delete('todos/1', ['todo' => $todo]);
        $response->assertStatus(200);
        $response->assertViewHas('todos');
    }

    public function test_we_can_store_todo()
    {
        /** @var Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('todos.store'), ['id' => 1, 'title' => 'title', 'content' => 'content']);
        $response->assertStatus(200);
    }

    public function test_mark_todo_as_completed()
    {
        /** @var User $user */
        $user = User::factory()->create();
        $this->actingAs($user);
        $todo = Todo::factory()->create([
            'user_id' => $user->id,
            'completed_at' => now()
        ]);

        $this->followingRedirects();

        $response = $this->post(route('done', $todo));
        $response->assertStatus(200);

    }


}
