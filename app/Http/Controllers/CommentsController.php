<?php

namespace App\Http\Controllers;

use App\Post;
use App\comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function addPostComment(Request $request,Post $post){

        $this->validate($request,[
         'body'=> 'required'
        ]);
       
        $comment = new comment();
        $comment->body = $request->input('body');
        $comment->user_id = auth()->user()->id;
        $post->comments()->save($comment);

        return back()->with('success','commented successfully');

    }
     public function addReplyComment(Request $request,comment $comment){
      
        $this->validate($request,[
         'body'=> 'required'
        ]);
       
        $reply = new comment();
        $reply->body = $request->input('body');
        $reply->user_id = auth()->user()->id;
        $comment->comments()->save($reply);

        return back()->with('success','reply posted');

    }
   
    public function store(Request $request)
    {
        return 'home';
    }
    public function edit($id)
    {
        $comment = comment::find($id);
      dd($comment);
       return back()->with('success','comment deleted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = comment::find($id);
        if(auth()->user()->id == $comment->user_id)
        {
          $comment->delete();
          return back()->with('success','comment deleted');
        }
        abort('401');

    }
     public function destroyreply(Request $request, $id)
    {
       $reply =  comment::find($id);
          $reply->delete();
          return back()->with('success','reply deleted');
    }
}
