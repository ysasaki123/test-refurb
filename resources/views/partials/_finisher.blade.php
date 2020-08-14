<!-- JS -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<!-- CDN JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>

<!-- CUSTOM JS for every page -->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

<!-- CUSTOM JS for specific page -->
@yield('scripts')