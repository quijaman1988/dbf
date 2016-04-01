@extends ('layouts.master')

@section('title')
    Add a new book
@stop

@section('content')

<h3>Create Random Lorem Ipsum</h3>




    @if (count($errors) > 0)
       <li>WWWWW</li>
  @endif
<form method='POST' action='/lorem/show'>


    <label>Enter Number of Paragraphs</label>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='text'
            id='paragraph'
            name='paragraph'
            maxlength="2"
            size="5"
            @if (isset($error))
              value='' size="5"  >&nbsp;Max 99&nbsp;&nbsp;<span style="color:red">
                &nbsp;Please enter a number!</span>
            @else
              &nbsp;Max 99&nbsp;&nbsp;<br/>
            @endif
            <br/>

    <input type="checkbox" name="header" value="header"/>Include Headers<br/><br/>



    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in fa-lg"></i>&nbsp;Create </button>

@stop
