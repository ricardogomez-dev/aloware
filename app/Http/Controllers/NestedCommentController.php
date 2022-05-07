<?php

namespace App\Http\Controllers;

use App\Models\NestedComment;
use Illuminate\Http\Request;
use App\Http\Requests\NestedCommentRequest;

class NestedCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NestedCommentRequest $request)
    {
        $comment = NestedComment::create($request->validated());

        return $comment->load('user');
    }
}
