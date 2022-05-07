<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Comment;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CanCreateNestedCommentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_reply_comments()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $article = Article::create([
            'title' => 'Test title',
            'short_description' => 'Short description',
            'full_description' => 'Full description',
            'image' => 'image'
        ]);

        $comment = Comment::create([
            'user_id' => $user->id,
            'article_id' => $article->id,
            'comment' => 'Test Comment'
        ]);

        $this->post(route('nested_comments.store'), [
            'user_id' => $user->id,
            'comment_id' => $comment->id,
            'comment' => 'Nested comment',
        ]);

        $this->assertDatabaseHas('nested_comments', [
            'user_id' => $user->id,
            'comment_id' => $comment->id,
            'comment' => 'Nested comment',
        ]);
    }
}
