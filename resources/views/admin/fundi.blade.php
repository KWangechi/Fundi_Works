@extends('layouts.master')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                    
<h3>Enter details of the fundi</h3>
    
    <form action="/adminfundi" method="POST" enctype="multipart/form-data">
    
{{csrf_field()}}

    <div class="form-group">
<label>Id Number:</label>
<input type="text" name="idNumber" required = "Please fill this field..." class="form-control form-control-sm"> 
</div>

<div class="form-group d-flex flex-column">
<label for="image">Fundi Image</label>
</div>

<div>
<input type="file" name="image" required>
</div>
</div>


<div class="form-group" >
<label>First Name:</label>
<input type="text" name="firstname" required = "Please fill this field..." class="form-control form-control-sm"> 
</div>

<div class="form-group">
<label>Last Name:</label>
<input type="text" name="lastname" required = "Please fill this field..." class="form-control form-control-sm"> 
</div>

<div class="form-group">
<label>Date of birth:</label>
<input type="date" name="dob" required = "Please fill this field..." class="form-control form-control-sm"> 
</div>


<div class="form-group">
    <label for="address">Address</label>
    <input type="text"  name="address" class="form-control map-input">
    <input type="hidden" name="latitude"  value="0">
    <input type="hidden" name="longitude" value="0">
</div>

<div class="form-group">
<label>Phone Number:</label>
<input type="text" name="phoneNumber" required = "Please fill this field..." class="form-control form-control-sm"> 
</div>


<div class="form-group">
<label>Occupation</label>
<select name="occupation" id="occupation" class="form-control form-control-sm">
<option value="" disabled>Select Fundi Occupation</option>
<option value="plumber">Plumber</option>
    <option value="electrician">Electrician</option>
    <option value="welder">Welder</option>
    <option value="painter">Painter</option>
    <option value="sewage">Sewage services</option>
    <option value="roofing">Roof services</option>
    <option value="grill">Griller</option>
    
    </select>
</div>

    <div class="form-group">
    <label>Ratings</label>

  <input type="number" name="ratings" min="0" max="5" class="form-control form-control-sm">
</div>
    
<button type="submit" class="btn btn-primary">Add Fundi</button>
</div>

    </div>
</div>
</div>
</div>
</div>

@csrf
</form>
@endsection