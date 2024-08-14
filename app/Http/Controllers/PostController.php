<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function main()
    {
        $posts = Post::all();
        return view('blog')->with([
            'posts' => $posts
        ]);
    }

    public function showForm()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // $validate = Validator::make($request->all(), [
        //     'judul' => 'required|string|min:5|max:100',
        //     'deskripsi' => 'string|max:255',
        //     'konten' => 'required|string'
        // ]);

        // if ($validate->fails()) {
        //     return redirect()->back()->withErrors($validate)->withInput();
        // }

        $request->validate([
            'judul' => 'required|string|min:3|max:255',
            'deskripsi' => 'string|max:255',
            'konten' => 'required|string|min:3'
        ]);

        $post = Post::create([
            'title' => $request->judul,
            'description' => $request->deskripsi,
            'content' => $request->konten
        ]);

        return redirect()->route('blog.index')->with('success', 'Post berhasil ditambahkan');
    }

    public function detail($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('blog.index')->with('error', 'Post tidak ditemukan');
        }

        return view("detail")->with([
            'title' => $post->title,
            'description' => $post->description,
            'content' => $post->content
        ]);
    }

    public function showEditForm($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('blog.index')->with('error', 'Post tidak ditemukan');
        }


        return view("edit")->with(([
            "id" => $post->id,
            "title" => $post->title,
            "description" => $post->description,
            "content" => $post->content,
        ]));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'string|min:3|max:255',
            'deskripsi' => 'string|max:255',
            'konten' => 'string|min:3'
        ]);

        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('blog.index')->with('error', 'Post tidak ditemukan');
        }

        $post->title = $request->judul;
        $post->description = $request->deskripsi;
        $post->content = $request->konten;

        $post->save();

        return redirect()->route('blog.index')->with('success', 'Post berhasil diperbarui');
    }

    public function remove($id)
    {

        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('blog.index')->with('error', 'Post tidak ditemukan');
        }

        $post->delete();

        return redirect()->route('blog.index')->with('success', "Post berhasil dihapus");
    }
}
