@extends('layouts.master')

@section('content')

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-color: black;">
        <div class="container">
        </div>
    </div>
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">

            @if($article)

            <p style="width: 26vw; margin:0 auto;"><img style="margin:0 auto; width: 25vw;" class="imgart" src='{{$article->img}}'></p>

            <div class="articleind" style="width:100%; margin-left: 0;">
                <h2 style="color: gold;width: 100%; text-align: center;">{{$article->title}}</h2>
                <p style="color: gold;width: 100%; text-align: center;">{{$article->description}}</p>
                <p style="color: white;width: 50%; margin: 0 auto;">{!!$article->text!!}</p>
            </div>

            @endif

        </div>
        <hr>
    </div> <!-- /container -->
</main>

@endsection