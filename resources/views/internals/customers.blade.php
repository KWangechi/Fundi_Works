@extends('layouts.views')

@section('title')
Customer module

@endsection

@section('content')

<div class="row">
    <div class="col-12">
    <br>
    <br>

    

    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    </div>
</div>

<div class="row">
    <div class="col-12">
    
    <form action="/customers" method="POST" class="pb-5" enctype="multipart/form-data">
    @csrf

<div class="form-group">
<label>Client Name:</label>
<input type="text" name="name" required = "Please fill this field..." class="form-control"> 
</div>


<div class="form-group">
<p>Home Address:</p>
<input type="text" name="address" required = "Please fill this field..." class="form-control">
</div>


<div class="form-group">
<label>Fundi Type</label>

<select name="fundi" id="fundi" class="form-control"  required>
<option value="" disabled>Select Customer Status</option>
    <option value="plumber">Plumber</option>
    <option value="electrician">Electrician</option>
    <option value="welder">Welder</option>
    <option value="painter">Painter</option>
    <option value="sewage">Sewage services</option>
    <option value="roofing">Roof services</option>
    <option value="grill">Griller</option>
    </select>

    </div>
    <div>
<label>Description:</label>
<input type="textbox" name="description" required = "Please fill this field..." class="form-control"> 
</div>

<div>
<label>Phone Number:</label>
<input type="number" name="phone" required = "Please fill this field..." class="form-control"> 
</div>

<div>
<label>Date:</label>
<input type="date" name="date" required = "Please fill this field..." class="form-control"> 
</div>

<div>
<label>Time:</label>
<input type="time" name="time" required = "Please fill this field..." class="form-control"> 
</div>


<br>

<div>
<button type="submit" class="btn btn-primary">Request Fundi</button>
</div>

    </div>

    

</div>




@csrf

</form>


@endsection






