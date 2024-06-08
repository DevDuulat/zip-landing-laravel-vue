<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>
<body>
<div id="app">
    <main-header></main-header>
    <main-promo></main-promo>
    <main-services></main-services>
    <main-portfolio></main-portfolio>
    <main-about></main-about>
    <main-testimonial></main-testimonial>
    <contact-form></contact-form>
    <main-footer></main-footer>
    @yield('content')
</div>
</body>
</html>
