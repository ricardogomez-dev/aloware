<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateCommentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_comment_articles()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $article = Article::create([
            'title' => 'Test title',
            'short_description' => 'Short description',
            'full_description' => 'Full description',
            'image' => 'image'
        ]);

        $this->post(route('comments.store'), [
            'comment' => 'Test comment',
            'article_id' => $article->id,
            'user_id' => $user->id,
        ]);

        $this->assertDatabaseHas('comments', [
            'comment' => 'Test comment',
            'article_id' => $article->id,
            'user_id' => $user->id,
        ]);
    }
}
