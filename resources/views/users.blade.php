@extends ('layouts.master')

@section('title')
    Add a new book
@stop

@section('content')

<h3>Create Random Users</h3>




    @if (count($errors) > 0)
       <li>WWWWW</li>
  @endif
<form method='POST' action='/users/show'>


    <label>Enter Number of Users you wish to create</label>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='text'
            id='users'
            name='users'
            value='{{ old("paragraph") }}' size="5"  >&nbsp;Max 99<br/>

    <input type="checkbox" name="header" value="header"/>Include Headers<br/><br/>



    <button type="submit" class="btn btn-primary">Create</button>

@stop
