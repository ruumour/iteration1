<head>
    <!-- Custom styles for this template -->
    <link href="css/request.css" rel="stylesheet">

</head>
@extends('layouts.master')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Event Request</h1>

                @foreach($posts as $post)
	                <!-- Event Post -->
	                <div class="card mb-4">
	                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
	                    <div class="card-body">
	                        <h2 class="card-title">				
								{{ $post->title }}	
	                        </h2>
	                        <p class="card-text">
								{{ $post->Description }}
	                        </p>
	                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
	                    </div>
	                </div>
                @endforeach

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item"><a class="page-link" href="#">&larr; Older</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">Newer &rarr;</a></li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for..." name="search">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button" href="/searchResults">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Food</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-4">
                    <h5 class="card-header">Suburb</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">MEL City</a></li>
                                    <li><a href="#">Caulfield</a></li>
                                    <li><a href="#">Clayton</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">South Yarra</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

@endsection