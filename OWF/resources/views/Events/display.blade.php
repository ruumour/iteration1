@extends('layouts.master')

@section('content')
	<div class="container content">

        <div class="row">
            <h1 class="my-4">Events We Found For You</h1>
        </div>

            <!-- Blog Entries Column -->
        <div class="row">
        
            <div class="col-lg-8">
            <div class="row">
            @foreach($events as $event)
                <div class="col-lg-4" >              
                    
                    <img class="card-img-top" style="width: 200px;height: 100px;" src="{{ $event->image_url }}" alt="Card image cap">
                </div>
                <div class="col-lg-8">
                	<label class "suburb_des" style="font-size:14px;color:#b3b3b3;"> {{$event->start_time }}</label>    
                    <h2 class="card-title">{{ $event->title }}</h2>          
                    <label class "suburb_des" style="font-size:14px;color:#b3b3b3;margin-top:22px;">{{ $event->address }}</label>                     
                </div>
            @endforeach
            </div>

            </div>

                            <!-- Sidebar Widgets Column -->
            <div class="col-lg-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header" style="margin-top:0">Search</h5>
                    <div class="card-body">
                    <form method="POST" action="/eventsSearch">
                        {{ csrf_field() }} 
                        <div class="input-group">                      
                            <input type="text" class="form-control" name="search" >
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Go!</button>
                            </span>
                            </input>
                            
                        </div>
                    </form>
                    </div>
                </div>

                <!-- Categories Widget -->
                {{-- <div class="card my-4"> --}}
                {{--     <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row" style="margin-left:10px;">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="/events?parent_category=Festivals">Exhibitions</a></li>
                                    <li><a href="#">Concerts</a></li>
                                    <li><a href="#">Festivals</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Arts</a></li>
                                    <li><a href="#">Workshops</a></li>
                                    <li><a href="#">Sports</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="card my-4">
                    <h5 class="card-header">Suburb</h5>
                    <div class="card-body">
                        <div class="row" style="margin-left:10px;">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">MEL City</a></li>
                                    <li><a href="#">Dandenong</a></li>
                                    <li><a href="#">Geelong</a></li>
                                    <li><a href="#">Monash</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Monash</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- /.row -->
        <div class="col-md-6">
                        <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item"><a class="page-link" href="#">&larr; Previous</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">Next &rarr;</a></li>
                </ul>

        </div>

    </div>
@endsection