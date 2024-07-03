<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use Auth;
use App\Models\Notification;
use Str;
use DB;
use Carbon\Carbon;
use App\Http\MessageContent;
class PostController extends Controller
{
    public function listPostSocial(){
        $posts = Post::with('user')->withCount('comments')->withCount('likes')->get();
        foreach ($posts as $post) {
            $post->liked_by_user = $post->likes->where('user_id', Auth::id())->count() > 0;
        }
        $notifications = Notification::where('user_id', Auth::id())
        ->whereNot('user_action_id',Auth::id())
        ->whereDate('created_at', Carbon::today())
        ->count();
        return view('user.social',compact('posts','notifications'));
    }

    public function getListComment(Request $request){
        $comments = DB::table('comment')
        ->where('post_id',$request->post_id)
        ->join('post', 'post.id', '=', 'comment.post_id')
        ->join('users', 'users.id', '=', 'comment.user_id')
        ->select('comment.*', 'post.*', 'users.*')
        ->get();
        return response()->json($comments);
    }

    public function createPost(Request $request){
        MessageContent::loadMessages();

        $data = $request->all();
        if(isset($data['image']) && $data['image'] != null){
            $uniqueFileName = Str::uuid()->toString() . '.' . $data['image']->extension();
            $data['image']->move(public_path('posts'), $uniqueFileName);
        }else{
            $uniqueFileName=null;
        }
        $post = new Post();
        $post->title = $data['title'];
        $post->image = $uniqueFileName;
        $post->status = Post::PENDING;
        $post->content = $data['content'];
        $post->user_id = Auth::id();
        $post->save();
        
        return redirect()->route('user.list_post_social');
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
        $data = $request->all();
        $comment = new Comment();
        $comment->comment = $data['input_comment'];
        $comment->user_id = Auth::id();
        $comment->post_id = $data['post_id'];
        $comment->save();

        $post = Post::where('id',$data['post_id'])->first();
        $notication = new Notification();
        $notication->user_id = $post->user_id;
        $notication->user_action_id = Auth::id();
        $notication->type = 2;
        $notication->post_id = $data['post_id'];
        $notication->save();

        $comments = DB::table('comment')
        ->where('post_id',$data['post_id'])
        ->join('post', 'post.id', '=', 'comment.post_id')
        ->join('users', 'users.id', '=', 'comment.user_id')
        ->select('comment.*', 'post.*', 'users.*')
        ->get();
        return response()->json($comments);
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

    public function likeOrDislike(Request $request){
        
        $posts = Post::with('user')->where('id', $request->post_id)->first();
        $posts->liked_by_user = $posts->likes->where('user_id', Auth::id())->count() > 0;
        if($posts->liked_by_user == false){
        $like = new Like();
        $like->user_id = Auth::id();
        $like->post_id = $request->post_id;
        $like->save();

        $post = Post::where('id',$request->post_id)->first();
        $notication = new Notification();
        $notication->user_id = $post->user_id;
        $notication->user_action_id = Auth::id();
        $notication->type = 1;
        $notication->post_id = $request->post_id;
        $notication->save();
        }else{
        Like::where('user_id', Auth::id())
        ->where('post_id', $request->post_id)
        ->delete();
        }
        return response()->json(123);
    }

    public function listNotification(Request $request){
        $notifications = Notification::where('user_id', Auth::id())
        ->whereNot('user_action_id',Auth::id())
        ->orderBy('created_at', 'desc')
        ->get();
        $notificationArray = array();
        foreach($notifications as $notification){
            $now = Carbon::now();
            $createdAt = Carbon::parse($notification->created_at);
            $diff = $createdAt->diff($now);
            if($diff->y > 0){
                $timeDiff =$diff->y .' năm trước';
            }else if($diff->m > 0){
                $timeDiff =$diff->m .' tháng trước';
            }else if($diff->m > 0){
                $timeDiff =$diff->d .' ngày trước';
            }else if($diff->h > 0){
                $timeDiff =$diff->h .' giờ trước';
            }else if($diff->i > 0){
                $timeDiff =$diff->i .' phút trước';
            }else {
                $timeDiff =$diff->y .' giây trước';
            }
            if($notification->type == 1){
                array_push($notificationArray,array('user'=>$notification->userAction->name,'message' => ' đã thích bài viết '.$notification->post->title,'time' => $timeDiff));
            }else{
                array_push($notificationArray,array('user'=>$notification->userAction->name,'message' => ' đã bình luận bài viết '.$notification->post->title,'time' =>  $timeDiff));
            }
        }
        return response()->json($notificationArray);
        
    }

    function getNumberNoti(Request $request){
        $notifications = Notification::where('user_id', Auth::id())
        ->whereNot('user_action_id',Auth::id())
        ->whereDate('created_at', Carbon::today())
        ->count();
        return response()->json($notifications);

    }
    
}
