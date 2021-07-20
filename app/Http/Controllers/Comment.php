<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment as ModelComment;

class Comment extends Controller
{
    public function comment(Request $request, $id)
    {
        $this->validate($request, [
            'body' => 'required|string',
            'commentable_id' => 'required|integer',
        ]);
        $comment = new ModelComment;
        $comment->body = $request->input('body');
        $comment->commentable_id = $request->input('commentable_id');
        $comment->farmer_id = $id;
        if ($comment->save()) {
            Log::debug("Farmer commented");
            return back()->with('success', 'Comment was Added');
        } else {
            return back()->withInput()->with('error', 'Failed to comment');
        }
    }
}
