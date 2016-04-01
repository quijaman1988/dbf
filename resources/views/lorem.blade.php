@extends ('layouts.master')

@section('title')
    Add a new book
@stop

@section('content')

<h3>Create Random Lorem Ipsum</h3>

<br/>
<ul>
    <li><a href='/users'>Back</a></li>
</ul>
<br/><br/>


    @if (count($errors) > 0)
       <li>WWWWW</li>
  @endif
<form method='POST' action='/lorem/show'>


    <label>Enter Number of Paragraphs</label>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='text'
            id='paragraph'
            name='paragraph'
            value='{{ old("paragraph") }}' size="5"   >&nbsp;Max 99<br/>

    <input type="checkbox" name="header" value="header"/>Include Headers<br/><br/>



    <button type="submit" class="btn btn-primary">Create</button>

@stop
