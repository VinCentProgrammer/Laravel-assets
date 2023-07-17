<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function add()
    {
        // DB::table('posts')->insert(
        //     array(
        //         'title' => 'Post 4',
        //         'content' => 'Content 4',
        //         'user_id' => 11
        //     )
        // );

        // $post = new Post;
        // $post->title = "Title Laravel Pro 1";
        // $post->content = "Content Laravel Pro 1";
        // $post->user_id = 11;
        // $post->votes = 1000;

        // $post->save();

        // Post::create([
        //     'title' => 'Title create',
        //     'content' => 'Content create',
        //     'user_id' => 11,
        //     'votes' => 10200,
        // ]);

        return view('posts.create');
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'content' => 'required',
            ],
            [
                'required' => ':attribute không được để trống!'
            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );

        $input = $request->all();

        if ($request->hasFile('file')) {
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            // echo $file->getClientOriginalExtension();
            // echo $file->getSize();
            $file->move('public/uploads', $file->getClientOriginalName());
            $input['thumbnail'] = 'public/uploads/' . $filename;
        }

        $input['user_id'] = 6;

        // return $input;
        Post::create($input);

        // return $request->input();
        // return redirect('posts/show');
        // return redirect()->route('posts.show');
        return redirect('posts/show')->with('status', "Add post success!");
    }

    function show()
    {
        // return redirect()->away('https://unitop.vn');
        // $posts = DB::table('posts')->get();
        // $posts = DB::table('posts')->select('title', 'content')->get();
        // foreach ($posts as $post) {
        //     echo $post->title;
        //     echo $post->content;
        //     echo "<br>";
        // }

        // $posts = DB::table('posts')->where('id', 2)->first();
        // $posts = DB::table('posts')->find(2);

        // $number_posts = DB::table('posts')->where('user_id', 11)->count();

        // echo $number_posts;

        // $max = DB::table('posts')->max('user_id');
        // $min = DB::table('posts')->min('user_id');
        // $avg = DB::table('posts')->avg('user_id');

        // echo $avg;

        // $posts = DB::table('posts')
        //     ->join('users', 'users.id', '=', 'posts.user_id')
        //     // ->select('users.name', 'posts.title')
        //     // ->select('users.*', 'posts.title')
        //     ->select('users.name', 'posts.*')
        //     ->get();

        // print_r($posts);

        // $posts = DB::table('posts')
        //     // ->where('user_id', 11)
        //     // ->where('user_id', '<', 11)
        //     ->where('title', 'LIKE', '%iphone%')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where([
        //         ['title', 'like', '%iphone%'],
        //         ['votes', '<', 100]
        //     ])
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('user_id', 6)
        //     ->orWhere('votes', '<>', 0)
        //     ->get();

        // $posts = DB::table('posts')
        //     ->selectRaw("COUNT('id') as number_posts, user_id")
        //     ->groupBy('user_id')
        //     ->orderBy('number_posts', 'desc')
        //     ->get();

        // $posts = DB::table('posts')
        //     // ->orderBy('votes')
        //     ->orderBy('votes', 'desc')
        //     ->get();

        // $posts = DB::table('posts')
        // ->offset(2)
        // ->limit(2)
        // ->get();

        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";

        // $posts = Post::all();

        #QUERY BUILDER
        // $posts = DB::table('posts')->paginate(4);
        // $posts = DB::table('posts')->simplePaginate(4);

        #ORM
        // $posts = Post::paginate(4);
        // $posts = Post::simplePaginate(4);
        $posts = Post::where('id', '>', 19)->orderBy('id', 'desc')->paginate(4);
        $posts->withPath('demo/show');

        return view('posts.index', compact('posts'));
    }

    function update($id)
    {
        #QUERY BUILDER
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->update(
        //         array(
        //             'title' => 'Macbook 2024',
        //             'votes' => 29999
        //         )
        //     );

        #ELOQUENT ORM
        // $post = Post::find($id);

        // $post->title = "Title Laravel Pro 2";
        // $post->content = "Content Laravel Pro 2";
        // $post->user_id = 11;
        // $post->votes = 1000;

        // $post->save();

        Post::where('id', $id)->update(
            [
                'title' => 'Title update',
                'content' => 'Content update',
                'user_id' => 11,
                'votes' => 1200,
            ]
        );
    }

    function delete($id)
    {
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();
        Post::find($id)->delete();


        // Post::where('user_id', 6)->delete();

        // Post::destroy([3, 4]);
    }

    function read()
    {
        // $posts = Post::all();

        // $posts = Post::where('user_id', 11)->get();
        // $posts = Post::where('title', 'like', '%iphone%')->get();

        // $post = Post::where('user_id', 11)->first();
        // return $post-> content;

        // $post = Post::find(4);
        // $posts = Post::find([2, 3]);

        // $posts = Post::orderBy('votes')->get();
        // $posts = Post::orderBy('votes', 'desc')->get();

        // $posts = Post::selectRaw("COUNT('id') as number_posts, user_id")
        //     ->groupBy('user_id')
        //     ->orderBy('number_posts', 'desc')
        //     ->get();

        // $posts = Post::offset(2)->limit(1)->get();

        // return $posts;

        // $posts = Post::withTrashed()->get();
        // // $posts = Post::onlyTrashed()->get();
        // return $posts;

        // $img = Post::find(8)->FeaturedImages;
        // return $img;

        // $user = Post::find(8)->user;
        $posts = User::find(11)->posts;
        return $posts;
    }


    function restore($id)
    {
        Post::onlyTrashed()->where('id', $id)->restore();
    }

    function permanetlyDelete($id)
    {
        Post::onlyTrashed()->where('id', $id)->forceDelete();
    }
}
