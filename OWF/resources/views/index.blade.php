@extends('layouts.master')

@section('content')

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="images/123.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1 style="margin-top: -480px">Welcome To Australia</h1>
              <p>With Courage let us all combine.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="images/refugee1.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1 style="margin-top: -350px">It's The End of Your Exhausting Journey</h1>
              <p>You ARE Where You Stand.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="images/refugee3_1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1 style="margin-top: -350px">One Step, </h1>
              <p>Find a Colorful Australia</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
<!--         <div class="col-lg-4">
          <img class="rounded-circle" src="images/home_map.png" alt="Generic placeholder image" width="140" height="140" >
          <h2 >Find Your People</h2>
          <p>Are you still looking for people who come from the same country as you do? We are giving you strong support to find them!</p>
          <p><a class="btn btn-secondary" href="#" role="button">Get start &raquo;</a></p>
        </div><!-- /.col-lg-4 --> 
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/home_events.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Free Entertainments</h2>
          <p>Welcome to Australia where kinds of free events are running everyday, come and participate in them for free.</p>
          <p><a class="btn btn-secondary" href="/events" role="button">View events &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" >
          <img class="rounded-circle" src="images/home_wish.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Activity Wishes</h2>
          <p>Can't find any activities attracting you? Nevermind, post your wishes here, you will get your customised events.</p>
          <p><a class="btn btn-secondary" href="/requestspost" role="button">Post &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->


      <!-- /END THE FEATURETTES -->
@endsection
