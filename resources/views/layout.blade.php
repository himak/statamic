<html>
    <title>{{ $page->title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')

    <body>
        @include('_nav')

        <div class="container">
            @yield('body')
        </div>

        <footer>
            <p>
                <small>&copy; {{ now()->year }}
                    @antlers
                        {{ config:app:name }}
                    @endantlers
                </small>
            </p>
        </footer>
    </body>
</html>
