<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\other\ValidationRequest;

class PostController extends APiResponse
{

    public function userPosts($id)
    {
        return $id;
    }


    public function allPost()
    {
        $posts=Post::all();
        return response()->json([
            'status' => 'S',
            'message' => 'List of Posts',
            'posts' => PostResource::collection($posts)

        ]);
    }


    public function addPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'upload_date' => 'required',
            'title_en' => 'required',
            'title_sp' => 'required',
            'details_en' => 'required',
            'details_sp' => 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',

        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors()->first());
        }

        $post = new Post();
        $post->topic_id = $request->topic_id;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->upload_date = $request->upload_date;
        $post->title_en = $request->title_en;
        $post->title_sp = $request->title_sp;
        $post->details_en = $request->details_en;
        $post->details_sp = $request->details_sp;
        $post->start_date = $request->start_date;
        $post->end_date = $request->end_date;
        $post->slug=str_slug($request->title_en);
       
        if ($post->save()) {
            return response()->json([
                'status' => 'S',
            ]);
        } else {
            return $this->unknownError('unable to add post');
        }
    }

    public function updatePost(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'upload_date' => 'required',
            'title_en' => 'required',
            'title_sp' => 'required',
            'details_en' => 'required',
            'details_sp' => 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',

        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors()->first());
        }

        $post = Post::where('id', $id)->first();
        $post->topic_id = $request->topic_id;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->upload_date = $request->upload_date;
        $post->title_en = $request->title_en;
        $post->title_sp = $request->title_sp;
        $post->details_en = $request->details_en;
        $post->details_sp = $request->details_sp;
        $post->start_end = $request->start_end;
        $post->end_date = $request->end_date;
        $post->slug=str_slug($request->title_en);
        
        if ($post->update()) {
            return response()->json([
                'status' => 'S',
            ]);
        } else {
            return $this->unknownError('unable to Update post');
        }
    }



    public function deletePost(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors()->first());
        }

        $post = Post::where('id', $id)->first();
    
        if ($post->delete()) {
            return response()->json([
                'status' => 'S',
              
            ]);
        } else {
            return $this->unknownError('unable to delete post');
        }
    }


    public function search(Request $request){
        $validator=Validator::make($request->all(),[
            'title_en' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'F',
                'error' => $validator->errors()
            ]);
        }
        $post=Post::where('title_en','LIKE','%'. $request->id. '%')->pluck('id');
        $post2=Post::where('title_en','LIKE','%'. $request->id. '%')->pluck('id');
        $post3=Post::where('details_en','LIKE','%'.$request->id.'%')->pluck('id');
        $merge_1=$post->merge($post2);
        $merge_2=$merge_1->merge($post3);
        // $chefBanners=ChefBanner::whereIn('chef_id',$merge_2)->get();
        return response()->json([
            'status' => 'S',
            'message' => 'Search Result',
            "post"=> PostReource::collection($post)
        ]);

    }

}
