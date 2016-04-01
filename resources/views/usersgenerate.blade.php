@extends ('layouts.master')

@section('head')
<link href='/css/style.css' rel='stylesheet'>
@stop


@section('content')

<br/>
<ul>
    <li><a href='/users'><i class="fa fa-backward">&nbsp;Back</i></a></li>
</ul>
<br/><br/>




@for ($i = 0; $i < $num; $i++)


<img
    src='https://addons.cdn.mozilla.net/static//img/zamboni/anon_user.png'
    style='width:100px'
    alt='User'> <br/>
    <h3>{{ $faker->name }}<br/></h3>
    <h4>{{ $faker->address }}<br/></h4>

    @if ($desc)
    {{ $faker->text }}<br/>
    @endif
    <br/><br/><br/>


@endfor


@stop
