@extends('layouts.master')


@section('title')




@section('content')
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <td >
                         <a href="/fundi" class="btn btn-primary float-right">Add Fundi</a>
                        </td>
                <h4 class="card-title"> Fundi Table</h4>
                
                
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <div class="row">
          <div class="col-md-20"> 
                    
                    <th>
                        UserID
                      </th>

                      <th>
                        ID Number
                      </th>
                      

                      <th>
                        Image
                      </th>

                      <th>
                        First Name
                      </th>
                      
                      <th>
                        Last Name
                      </th>
                      
                      <th>
                        Date of Birth
                      </th>

                      <th>
                        Address
                      </th>

                      <th>
                        Phone Number
                      </th>

                      <th>
                        Occupation
                      </th>

                      <th>
                       Ratings
                      </th>


                      <th>
                       EDIT
                      </th>

                      <th>
                       DELETE
                      </th>
                    </thead>

                    <tbody>

                    @foreach($fundis as $role)

<tr>
<td> {{$role->id}} </td>
<td> {{$role->idNumber}} </td>
<td> 
<img src="{{ asset('storage/'.$role->image) }}" alt="Fundi" class="img-thumbnail">
</td>
<td> {{$role->firstname}} </td>
<td> {{$role->lastname}} </td>
<td> {{$role->dob}} </td>
<td> {{$role->address}} </td>
<td> {{$role->phoneNumber}} </td>
<td> {{$role->occupation}} </td>
<td> {{$role->ratings}} </td>


                        <td >
                         <a href="/fundiedit/{{ $role->id}} " class="btn btn-success">EDIT</a>
                        </td>

                        <td >
                         <form action="/fundidelete/{{ $role->id }}" method="POST">

{{method_field('DELETE')}}
{{csrf_field()}}

<button type="submit" class="btn btn-blue" data-color="blue">DELETE</button>
                        </td>


</tr>
@endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
          </div>
          
 

@endsection

@section('scripts')

@endsection