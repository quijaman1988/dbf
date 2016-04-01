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
            maxlength="2"
            @if (isset($error))
              value='' size="5"  >&nbsp;Max 99&nbsp;&nbsp;<span style="color:red">
                &nbsp;Please enter a number!</span><br/>
            @else
              value='' size="5"  >&nbsp;Max 99&nbsp;&nbsp;<br/>
            @endif

    <input type="checkbox" name="desc" value="desc"/>Include User Description<br/><br/>



    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in fa-lg"></i>&nbsp;Create</button>

@stop
