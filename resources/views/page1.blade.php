@extends('layouts.master')

@section('content')

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" style="background-color: black">
    <div class="container">
    </div>
  </div>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">

      @foreach($articles as $article)

      <div class="col-md-4">
        <h2 style="color: gold;">{{$article->title}}</h2>
        <p style="margin-left: 70px;"><img src='{{$article->img}}'></p>
        <p style="color: white;">{{$article->text}}</p>
        <p style="color: gold;">{{$article->description}}</p>
        <p><a class="btn btn-secondary" href="{{route('articleShow', ['id'=>$article->id])}}" role="button">View details &raquo;</a></p>
      </div>

      @endforeach

    </div>
    <hr>
  </div>
</main>

@endsection