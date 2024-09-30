<header>
    <h1>{!! $entry->title !!}</h1>
    <div>{!! $entry->date !!}</div>
</header>
<div class="mt-8 prose">
    <img src="{!! $entry->featured_image !!}" class="w-full">
    {!! $entry->content !!}
</div>
