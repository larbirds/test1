<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    /*public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
    }*/

    public function store(StoreBlogPost $request)
    {

    }
}
