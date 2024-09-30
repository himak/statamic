@extends('layout')

@section('body')
    <h1>{{ $title }}</h1>
    {!! $content !!}

    <h1>{{ $page->title }}</h1>
    {!! $page->content !!}

    @dump($page)

    <h2>List of all pages</h2>
    <ul>
        @foreach(Statamic::tag('collection:pages')->all() as $page)
            <li>
                <h3>{{ $page->title }}</h3>
                <p>{{ $page->slug }}</p>
                <p>{{ $page->url }}</p>
            </li>
        @endforeach
    </ul>

@endsection


