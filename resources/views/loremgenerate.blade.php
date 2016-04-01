@extends ('layouts.master')

@section('head')
<link href='/css/style.css' rel='stylesheet'>
@stop


@section('content')
<br/>
<ul>
    <li><a href='/lorem'>Back</a></li>
</ul>
<br/><br/>





<?php
//echo 'hello';
echo $paragraphs;  ?>

@stop
