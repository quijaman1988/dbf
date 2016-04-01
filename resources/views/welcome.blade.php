<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Developers Best Friend')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">



    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <a href='/'>
        <h1> Developers Best Friend </h1>
        </a>
    </header>

    <nav>
        <ul>
            <li><a href='/lorem'>Generate Lorem Ipsum</a></li>
            <li><a href='/users'>Generate Users</a></li>
        </ul>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        <a href='https://github.com/susanBuck/foobooks' class='fa fa-github' target='_blank'> View on Github</a> &nbsp;&nbsp;
        <a href='http://foobooks.dwa15-practice.biz/' class='fa fa-link' target='_blank'> View Live</a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
