<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \Auth;
use App\Idea;

class IdeaApiController extends Controller
{

    public function __construct()
    {
      
    }
    public function index()
    {
        $ideas = Idea::all();
        return response($ideas->jsonSerialize(), Response::HTTP_OK);
    }

    public function save(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        
       
        // Create Idea
        $idea = new Idea;
        $idea->title = $request->input('title');
        $idea->body = $request->input('body');
        $idea->user_id = Auth::user()->id;

        $idea->save();
        return (['message' => 'Successfully uploaded to database']);
    }

    public function show($id)
    {
        $idea = Idea::find($id);
        return response($idea->jsonSerialize(), Response::HTTP_OK);
    }
}
