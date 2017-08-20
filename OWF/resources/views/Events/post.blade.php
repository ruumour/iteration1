@extends('layouts.master')

@section('post')

 <div class="container post">
</br>
<div class="row">
 
<h1>Make A Wish</h1><br>
</div>
<div class="row">
  <label class="des_text">Post your event wishes here, they will be submitted to organisers. * indicates items that are compulsory.</label>
</div>
<hr>
<div class="col-lg-8">
  <form method="POST" action='/posts'>
  	{{ csrf_field() }}
  	@include('layouts.errors')
    <div class="form-group">
      <label for="title">REQUEST TITLE</label>
      <span class="required">*</span>
      <input type="title" class="form-control" id="title"  name="title">
     </div>
    <div class="form-group">DESCRIPTION</label>
      <span class="required">*</span>
      <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
      <label for="suburb">SUBURB</label>
      <label class="suburb_des">Choose which suburb you want your event be.</label>
      <select class="form-control" id="suburb" name="suburb">
        <option>Mel City/CBD</option>
        <option>Caulfield</option>
        <option>Clayton</option>
        <option>South Yarra</option>
      </select>
    </div>
    <div class="form-group">
      <label for="type">TYPE</label>
      <label class="suburb_des">Let us know which type of events you require.</label>
      <select class="form-control" id="Type" name="type">
        <option>Art</option>
        <option>Sport</option>
        <option>Food</option>
        <option>Music</option>
        <option>Health</option>
      </select>
    </div>    
  </form>
</div>
    <div class="col-lg-8">
      <button type="submit" class="btn btn-primary" style="float:right;margin-buttom:30px;">Submit</button>
    </div>
</div>
@endsection