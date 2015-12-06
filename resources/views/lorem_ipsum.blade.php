@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('content')
  <h1>Lorem Ipsum Generator</h1>
  <a href="/">Return to home</a>
  <form method='POST' action="/lorem_ipsum">

    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <label for="numberOfParagraphs">Number of paragraphs (max: 99)</label>
    <input type="text" id="numberOfParagraphs" maxlength="2" name="numberOfParagraphs">

    <button type="submit" class="btn btn-default">Submit</button>

    @if(isset($paragraphs))
      @foreach($paragraphs as $paragraph)
              <p>{{ $paragraph }}</p>
      @endforeach
    @endif
  </form>

@stop
