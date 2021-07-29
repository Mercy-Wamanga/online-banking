@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('layouts.sidebar-admin')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </nav>
                </div>

                <div class="card-body">
                    <div class="pull-right">
                    @if (Route::has('register'))
                               
                                    <a class="btn btn-primary" href="/admin/register">{{ __('Register New User') }}</a>
                               
                            @endif
                        <!-- <a href="/register" class="btn btn-primary">register new user</a> -->
                    </div>

                    <table class="table mt-5" width="auto">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Address</th>
      <th scope="col">Country</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($users as $user) 
       <tr> 
        
      
        <td>{{$user->id}}</td>
       <td>{{$user->name}}</td>
       <td>{{$user->email}}</td>
       <td>{{$user->phone}}</td>
       <td>{{$user->address}}</td>
       <td>{{$user->country}}</td>
       <td>
       
<!-- @csrf
@method('DELETE') -->
<form action="{{url('user-delete/'.$user->id)}}" method="POST">

{{ csrf_field() }}
{{ method_field('DELETE') }}
<button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
       </td>
       <td>
       <a class="btn btn-primary btn-mini" href="{{url('/user-edit/'.$user->id)}}">Edit</a>
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
</div>
@endsection