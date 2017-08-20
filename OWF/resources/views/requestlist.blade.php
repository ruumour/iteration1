@extends('request')

@section('aa')
@foreach($posts as $post)
            <div class="col-md-8">
                <div class="col-md-3">              
                    <img class="card-img-top" src="http://placehold.it/220x220" alt="Card image cap">
                </div>
                <div class="col-md-3">    
                    <h2 class="card-title">              
                        {{ $post->title }}
                       </h2>          
                    <p class="card-text">
                        {{ $post->Description }}
                    </p>
                   {{--  <a href="#" class="btn btn-primary">Read More &rarr;</a> --}}
                </div>
            </div>
            @endforeach
@endsection