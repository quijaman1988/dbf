@extends ('layouts.master')

@section('title')
    Add a new book
@stop

@section('content')

    <nav>
        <ul>
            <li><a href='/lorem'><i class="fa fa-align-justify"></i>&nbsp;Generate Lorem Ipsum</a></li>
            <li><a href='/users'><i class="fa fa-user"></i>&nbsp;Generate Users</a></li>
        </ul>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

  <!--  <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        <a href='https://github.com/susanBuck/foobooks' class='fa fa-github' target='_blank'> View on Github</a> &nbsp;&nbsp;
        <a href='http://foobooks.dwa15-practice.biz/' class='fa fa-link' target='_blank'> View Live</a>
    </footer> -->
    @section('footer')
    @stop


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>

@stop
