<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{

    public function list()
    {
        $posts = Post::orderByDesc('created_at')
            ->with('user')
            ->get();

        return view('list',[
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $users= User::all();
        return view('create',[
            'users'=>$users
        ] );
    }

    public function store()
    {
        $data = request()->validate([
            'user_id'=>['integer', Rule::exists('users', 'id')],
            'content'=>['string']
        ]);

        Post::create($data);

        return redirect('/');

    }

    public function edit($post)
    {

        return view('welcome');
    }

    public function update($post)
    {

    }

    public function destory($post)
    {

    }
}
