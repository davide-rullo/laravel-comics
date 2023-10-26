<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC-Comics</title>
    @vite('resources/js/app.js')



</head>

<body>
    @include('partials.header')
    <main>
        @yield('content')

    </main>

    <footer>
        <h1 class="text-center">footer</h1>
    </footer>




</body>

</html>