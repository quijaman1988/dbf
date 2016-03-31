@extends ('layouts.master')

@section('head')
<link href='/css/style.css' rel='stylesheet'>
@stop


@section('content')


<ul>
    <li><a href='/lorem'>Return</a></li>
</ul>


<?php echo $paragraphs;  ?>

@stop
