@extends('layout')

@section('body')
<h1>The Blog</h1>

@tags([
'posts' => ['collection:blog' => ['limit' => 5]],
])

<ul style="display: flex; padding-left: 0; list-style: none">
    @foreach($posts as $post)
        <li style="padding: 1em">{{ $post->title  }}</li>
    @endforeach
</ul>

<div class="grid md:grid-cols-3 gap-3">
    @foreach($entries as $entry)
        <a href="/blog/{!! $entry->slug !!}" style="text-decoration: none; color: black;">
            <article>
                <img src="{!! $entry->featured_image !!}" class="w-full">
                <h2>{{ $entry->title }}</h2>
                <div>{!! $entry->content !!}</div>
                <div>{!! $entry->date !!}</div>
            </article>
        </a>
    @endforeach
</div>
@endsection
