@extends('layouts.master')

@section('title')
  Random User Generator
@stop

@section('content')
  <h1>Random User Generator</h1>
  <a href="/">Return to home</a>
  <form method='POST' action="/random_user">

    <input type='hidden' name='_token' value='{{ csrf_token() }}'>

    <label for="numberOfUsers">Number of Users (max: 99)</label>
    <input type="text" id="numberOfUsers" maxlength="2" name="numberOfUsers">

    <input type="checkbox" name="includeBirthdate"> Include a Birthdate?

    <input type="checkbox" name="includeProfile"> Include a Profile?

    <button type="submit" class="btn btn-default">Submit</button>

    @if(isset($users))
      @foreach($users as $user)
        @foreach($user as $key)
          <p>{{ $key }}</p>
        @endforeach
      @endforeach
    @endif
  </form>

@stop
