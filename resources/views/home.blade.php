@extends('layout')

@section('body')
    <h1>{{ $title }}</h1>
    {!! $content !!}

    <h1>{{ $page->title }}</h1>
    {!! $page->content !!}

    @dump($page)

    @antlers
    {{ config:app:name }}
    @endantlers

    @foreach(Statamic::tag('collection:pages')->all() as $page)
        <p>{{ $page->title }}</p>
        <p>{{ $page->slug }}</p>
        <p>{{ $page->url }}</p>
        <br>
    @endforeach
@endsection


