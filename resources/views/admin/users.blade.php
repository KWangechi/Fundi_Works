@extends('layouts.master')


@section('title')




@section('content')
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User Roles</h4>
                
                
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
                      
                    
                    <th>
                        UserID
                      </th>

                      <th>
                        Name
                      </th>
                      
                      <th>
                        Usertype
                      </th>
                      
                      <th>
                        Email
                      </th>

                      <th>
                        Phone
                      </th>



                      <th>
                       EDIT
                      </th>

                      <th>
                       DELETE
                      </th>
                    </thead>

                    <tbody>

                    @foreach($users as $user)

<tr>
<td> {{$user->id}} </td>
<td> {{$user->name}} </td>
<td> {{$user->usertype}} </td>
<td> {{$user->email}} </td>
<td> {{$user->phone}} </td>


                        <td >
                         <a href="/adminedit/{{ $user->id}} " class="btn btn-success">EDIT</a>
                        </td>

                        <td >
                         <form action="/admindelete/{{ $user->id}}" method="POST">

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