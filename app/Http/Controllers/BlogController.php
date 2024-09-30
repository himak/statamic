<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Entry;

class BlogController extends Controller
{
    public function index()
    {
        $entries = Entry::query()
            ->where('collection', 'blog')
            ->limit(10)
            ->get();

        return view('blog.index', ['entries' => $entries]);
    }

    public function show($slug)
    {
        $entry = Entry::query()
            ->where('collection', 'blog')
            ->where('slug', $slug)
            ->first();

        return view('blog.show', ['entry' => $entry]);
    }
}
