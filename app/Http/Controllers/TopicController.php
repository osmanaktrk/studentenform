<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('topic/create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "category" => ["required"],
            "topic_title" => ["required", "min:5"],
            "post_title" => ["required", "min:5"],
            "content" => ["required", "min:5"],
        ]);


        $topic = new Topic();

        $topic->category = $validated["category"];
        $topic->title = $validated["topic_title"];
        $topic->user_id = Auth::user()->id;
        $topic->save();

        $post = new Post();
        $post->topic_id = $topic->id;
        $post->user_id = Auth::user()->id;
        $post->title = $validated["post_title"];
        $post->content = $validated["content"];
        $post->save();
        
        
        return redirect()->route('main')->with("status", "Topic Created");
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
