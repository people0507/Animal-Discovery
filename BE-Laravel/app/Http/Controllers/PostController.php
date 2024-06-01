<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use Str;
use App\Http\MessageContent;
class PostController extends Controller
{
    public function createPost(Request $request){
        MessageContent::loadMessages();

        $data = $request->all();
        if(isset($data['image']) && $data['image'] != null){
            $uniqueFileName = Str::uuid()->toString() . '.' . $data['image']->extension();
            $data['image']->move(public_path('animal_post_images'), $uniqueFileName);
        }else{
            $uniqueFileName=null;
        }
        $post = new Post();
        $post->title = $data['title'];
        $post->image = $uniqueFileName;
        $post->status = Post::PENDING;
        $post->content = $data['content'];
        $post->user_id = 1;
        $post->save();
        
        if ($post->save()) {
            return response()->json(['message' => MessageContent::getMessage('create_success')],200);
        } else {
            return response()->json(['message' => MessageContent::getMessage('create_failed')],401);
        }
    }

    public function editPost(Request $request){

    }

    public function deletePost(Request $request){
        MessageContent::loadMessages();
        $data = $request->all();
        $post = Post::where('id', $data['id'])->first();
        
        if($post){
            if ($post->delete()) {
                return response()->json(['message' => MessageContent::getMessage('delete_success')],200);
            } else {
                return response()->json(['message' => MessageContent::getMessage('delete_failed')],401);
            }
        }
    }

    public function createComment(Request $request){
        MessageContent::loadMessages();
        $data = $request->all();
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->user_id = 1;
        $comment->post_id = 1;
        $comment->save();
        if ($comment->save()) {
            return response()->json(['message' => MessageContent::getMessage('create_success')],200);
        } else {
            return response()->json(['message' => MessageContent::getMessage('create_failed')],401);
        }
    }

    public function editComment(Request $request){
        
    }

    public function deleteComment(Request $request){
        MessageContent::loadMessages();
        $data = $request->all();
        $comment = Comment::where('user_id', $data['user_id'])
            ->where('post_id', $data['post_id'])
            ->first();
        
        if($comment){
            if ($comment->delete()) {
                return response()->json(['message' => MessageContent::getMessage('delete_success')],200);
            } else {
                return response()->json(['message' => MessageContent::getMessage('delete_failed')],401);
            }
        }
    }

    public function like(Request $request){
        MessageContent::loadMessages();
        $data = $request->all();
        $like = new Like();
        $like->user_id = 1;
        $like->post_id = 1;
        $like->save();
        if ($like->save()) {
            return response()->json(['message' => MessageContent::getMessage('create_success')],200);
        } else {
            return response()->json(['message' => MessageContent::getMessage('create_failed')],401);
        }
    }

    public function dislike(Request $request){
        MessageContent::loadMessages();
        $data = $request->all();
        $like = Like::where('user_id', $data['user_id'])
            ->where('post_id', $data['post_id'])
            ->first();
        
        if($like){
            if ($like->delete()) {
                return response()->json(['message' => MessageContent::getMessage('delete_success')],200);
            } else {
                return response()->json(['message' => MessageContent::getMessage('delete_failed')],401);
            }
        }
    }
    
}
