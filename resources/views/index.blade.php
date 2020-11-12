@extends('layouts.master')

@section('content')

<main role="main" style="background-color: black;">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" style="background-color: black;">
    <div class="container">
    </div>
  </div>
  <!-- Example row of columns -->
  <div style="background-color: black;">
    <h1 style="text-align: center;padding-top: 1.5em; color: white; font-weight: bold;">Tech/\LaBs</h1>
    <p style="text-align: center;margin-bottom: 50px; color: gold;">Intra in lumea tehnologiilor cu noi!</p>
    <div class="container">
      <div class="row" >
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center" style="height: 300px; 
        background-image: url('img/1.jpg');
        background-size: cover;
        background-position: center;"><a href="page1"></a></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center" style="background-image: url('img/halo.jpg');
        background-size: cover;
        background-position: top;"></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center" style="background-image: url('img/desk.jpg');
        background-size: cover;
        background-position: center;"></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center" style="height: 300px;
        background-image: url('img/2.jpg');
        background-size: cover;
        background-position: cover;"
        ><a href="page1"></a></div>     
      </div>
    </div>
  </div>

<style type="text/css">
  
</style>

</main>
<script>
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
      myIndex = 1
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 5000);
  }
</script>

@endsection