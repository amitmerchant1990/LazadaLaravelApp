<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use DB;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $posts = Post::all();
        return response()->json(array(
            'error' => false,
            'posts' => $posts),
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $id = DB::table('posts')->insertGetId(
            ['title' => 'test title', 'body' => 'test body']    
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        try{
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            
            $post->save();
         
            return response()->json(array(
                'error' => false,
                'message' => 'Post added successfully.'),
                200
            );
        }
        catch (Exception $e)
        {
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return response()->json(array(
            'error' => false,
            'message' => $post),
            200
        );
    }

    /**
     * Get all posts by Tags.
     *
     * @param  array  $tags
     * @return Response
     */
    public function findAllPostByTags(Request $request)
    {
        $allTags = $request->input('tags');
        $tags = explode(",", $allTags);

        $posts = Post::find(1)->tags()->whereIn('name', $tags)->get();

        return response()->json(array(
            'error' => false,
            'posts' => $posts),
            200
        );
    }

    /**
     * Get all posts count by Tags.
     *
     * @param  array  $tags
     * @return Response
     */
    public function findCountPostByTags(Request $request)
    {
        $allTags = $request->input('tags');
        $tags = explode(",", $allTags);

        $postCount = Post::find(1)->tags()->whereIn('name', $tags)->count();

        return response()->json(array(
            'error' => false,
            'count' => $postCount),
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        
        if($post->delete()){    
            return response()->json(array(
                'error' => false,
                'message' => 'Post has been deleted.'),
                200
            );
        }
    }
}
