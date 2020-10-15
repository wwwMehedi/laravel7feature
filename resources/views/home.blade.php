@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span class="badge badge-success">
                    Hi...{{Auth::user()->name}}
                </span> 
                 <b style="float: right;">total users:<span class="badge badge-danger">
                     {{count($users)}}
                 </span></b>
                </div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
             <div class="container">
                        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($users as $user)
    <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at->diffforHumans()}}</td>
       
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
