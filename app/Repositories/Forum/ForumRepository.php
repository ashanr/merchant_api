<?php

namespace App\Repositories\Forum;

use App\Models\Forum\Post;
use App\Models\Forum\Comment;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class Forum Repository
 */
class ForumRepository extends BaseRepository
{
    /**
     * Forum Post Repository constructor.
     *
     * @param  Post  $model
     * @param  Comment  $model
     */
    public function __construct(Post $model, Comment $comment_model)
    {
        $this->model = $model;
        $this->comment_model = $comment_model;
    }

    public function getPosts($conditions = [], $paged = 25, $orderBy = 'created_at', $sort = 'desc')
    {

        $query = Post::with('creator');
         $query
            ->where($conditions)
            ->orderBy($orderBy, $sort);
        return $query->paginate($paged);
    }

    //List Pending Posts
    public function getPendingPosts($conditions = [], $paged = 25, $orderBy = 'created_at', $sort = 'desc')
    {
        $query = Post::with('creator');
        $query
            ->where($conditions)
            ->where('status', 0)
            ->orderBy($orderBy, $sort);
        return $query->paginate($paged);
    }

    //List User Posts List
    public function getUserPostList($conditions = [], $paged = 25, $orderBy = 'created_at', $sort = 'desc')
    {

        $user_id = Auth::user()->id;
      
        $query =  $this->model
            ->where($conditions)
            ->where('creator_id', $user_id)
            // ->where('status', 0)
            ->orderBy($orderBy, $sort);
        return $query->paginate($paged);
    }

    //create post
    public function create($data)
    {
        $user = Auth::user();

// dd(User::with('roles')->get()->pluck('roles')->flatten()->unique());
        
        $post = new Post;
        $post->title = $data['title'];
        $post->creator_id = $user->id;
        $post->content = $data['content'];
        $post->status = $user->id == 1 ? 1 :$data['status'];
        $post->save();
        return $post;
    }


  //Approve Post
  public function approve($data)
  {
      $id = $data['id'];
      $post = Post::find($id);

      if ($post != null) {
          $post->update([
              'status' => 1
          ]);
      }
      return $post;
  }

    //update post
    public function update($data)
    {
        $id = $data['id'];
        $Adv = Post::find($id);

        $Adv->status = $data['status'];
        if ($Adv != null) {
            $Adv->update([
                'title' => $data['title'],
                'user_id' => $data['user_id'],
                'condition' => $data['condition'],
                'status' => $data['status']
            ]);
        }
        return $Adv;
    }

    //get post data
    public function getPostDetails($id)
    {
        return Post::with('comments','creator','comments.owner')->find($id);
    }

    //Create Comment 
    public function createComment($data)
    {
        $user = Auth::user();

        $comment = new Comment;

        $comment->post_id = $data['post_id'];
        $comment->user_id = $user->id;
        $comment->comment = $data['comment'];
        $comment->save();
        return $comment;
    }

    //Delete Comment 
    public function deleteComment($data)
    {
        $user = Auth::user();

        $comment_delete = Comment::where('id', $data['id'])->delete();

        return $comment_delete;
    }

    //Delete Post 
    public function deletePost($data)
    {
        $user = Auth::user();

        $post_delete = Post::where('id', $data['id'])->delete();

        //Delete All Comments Related to Post
        $comment_delete = Comment::where('post_id', $data['id'])->delete();

        return $post_delete;
    }
}
