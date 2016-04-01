@extends ('layouts.master')

@section('head')
<link href='/css/style.css' rel='stylesheet'>
@stop


@section('content')
<br/>
<ul>
    <li><a href='/lorem'><i class="fa fa-backward">&nbsp;Back</i></a></li>
</ul>
<br/><br/>





<?php
//echo 'hello';
echo $paragraphs;  ?>

@stop
