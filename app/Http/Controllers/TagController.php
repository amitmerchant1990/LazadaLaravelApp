<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use DB;
use App\Tag;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tags = Tag::all();

        if(!empty($tags)){
            return response()->json(array(
                'error' => false,
                'tags' => $tags),
                200
            );
        }else{
            return response()->json(array(
            'error' => false,
            'tags' => 'No tags found.'),
            200
        );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
            $tag = new Tag;
            $tag->name = $request->input('name');
            
            $tag->save();
         
            return response()->json(array(
                'error' => false,
                'message' => 'Tag added successfully.'),
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
        $tag = Tag::find($id);

        if($tag){
            return response()->json(array(
                'error' => false,
                'message' => $tag),
                200
            );
        }else{
            return response()->json(array(
            'error' => false,
            'message' => 'No tag found.'),
            200
        );
        }
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
        $tag = Tag::find($id);

        if($request->input('name') && $request->input('name')!=''){
            $tag->name = $request->input('name');
        }

        if($tag->save()){
            return response()->json(array(
                'error' => false,
                'message' => 'Tag has been updated.'),
                200
            );
        }else{
            return response()->json(array(
                'error' => true,
                'message' => 'Tag has not been updated.'),
                200
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $tag = Post::find($id);
        
        if($tag->delete()){    
            return response()->json(array(
                'error' => false,
                'message' => 'Tag has been deleted.'),
                200
            );
        }else{
            return response()->json(array(
                'error' => false,
                'message' => 'Tag has not been deleted.'),
                200
            );
        }
    }
}
