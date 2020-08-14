<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Header:
                - initial html housekeeping
                - meta tags
                - website icon
                - title
                - yielded title (added to website title)
                - stylesheets
                - yielded stylesheets (styles to load only for a specific page)
        -->
        @include('partials._header')

    </head>
    <body>
        <div id="app">

            <!-- Navbar:
                    - navbar
                    - links to home, welcome, login/logout
            -->
            @include('partials._navbar')

            <!-- Content -->
            <main class="py-4">
                @yield('content')
            </main>

        </div>

        <!-- Finisher:
                - scripts
                - yielded scripts (scripts to load only for a specific page)
        -->
        @include('partials._finisher')

    </body>
</html>