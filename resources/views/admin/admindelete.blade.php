@extends('layouts.master')




@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="card">
<div class="card-header">

<h3>Delete details of a user</h3>

<form action="/admindelete/{{$users->id}}" method="POST">

{{method_field('DELETE')}}
{{csrf_field()}}

<div class="form-group">

<label for="name">Name</label>
    <input type="text" class="form-control" value="{{$users->name}}" placeholder="Enter your name" name="username">
  </div>


  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" value="{{$users->email}}" placeholder="name@example.com" name="email">
  </div>

  <div class="form-group">
    <label for="usertype">UserType</label>
    <select class="form-control" name="usertype">
      <option>Customer</option>
      <option>Admin</option>
      <option>Fundi</option>
      </select>
  </div>


  <div class="form-group">
    <label for="text">Phone Number</label>
    <input type="text" class="form-control" value="{{$users->phone}}" placeholder="Enter your phone number" name="number">
  </div>

  <button type="submit" class="btn btn-blue" data-color="blue">Delete</button>
<a href="/users">Cancel</a>
</div>


</div>

</div>
</div>
</div>
</div>
</form>
@endsection

