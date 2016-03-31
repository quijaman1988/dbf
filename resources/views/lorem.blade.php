@extends ('layouts.master')

@section('title')
    Add a new book
@stop

@section('content')

<h3>Create Random Lorem Ipsum</h3>

<form method='POST' action='/lorem/show'>

        {{ csrf_field() }}
    <label>Enter Number of Paragraphs</label>
    <input type="text" id="par" name="par" value='{{ old('par') }}' size="5" maxlength="2" >
    <div class='error'>{{ $errors->first('par') }}</div>
    <button type="submit">Create</button>

@stop
