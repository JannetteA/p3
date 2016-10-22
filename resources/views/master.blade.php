<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','P3 - Laravel Basics')
    </title>

    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>

        @yield('head')

</head>
<body>

    <header>
        <span>P3: Laravel Basics</span>
    </header>


    <nav>
    <a href="/">Home</a>
    <a href="../ipsum">ICU Lorem Ipsum Generator </a>
    <a href="../users">ICU Random User Generator</a>
    </nav>


    <section>
        @yield('content')
    </section>


    <footer>
        &copy; Jannette A. {{ date('Y') }}  

    </footer>

    @yield('body')

</body>
</html>