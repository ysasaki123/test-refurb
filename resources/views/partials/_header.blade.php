<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Human Resources Block Demo">
<meta name="author" content="Ibrahim Sardar, Fumiyo Hines">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Icon -->
<link rel="icon" href="{{ asset('favicon.ico') }}">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

<!-- CDN CSS -->
<!-- ...none for now... -->

<!-- CUSTOM CSS for every page -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />

<!-- CUSTOM CSS for specific page -->
@yield('styles')

<!-- Title -->
<title>@yield('title') HR Block Demo</title>