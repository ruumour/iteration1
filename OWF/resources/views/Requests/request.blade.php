
@extends('layouts.master')

@section('post')
    <!-- Page Content -->
    <div class="container post">

        <div class="row">
            <h1 class="my-4">Wishes List</h1>
        </div>

            <!-- Blog Entries Column -->
            
        <div class="row">
            
            <div class="col-lg-8">
                <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-4" style="margin-bottom: 1rem">              
                    <img class="card-img-top" src="images/home_events.png" style="width:220px;height:220px;" alt="Card image cap">
                    </br>
                </div>
                <div class="col-lg-8">    
                    <h2 class="card-title">              
                        {{ $post->title }}
                       </h2>          
                    <p class="card-text">
                        {{ $post->Description }}
                    </p>
                   {{--  <a href="#" class="btn btn-primary">Read More &rarr;</a> --}}
                </div>
                @endforeach
                </div>
            </div>

                 
            @include('layouts.sidebar')
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
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

@endsection