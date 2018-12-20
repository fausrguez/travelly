@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">User Administration</div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">username</th>
                        <th class="text-center">email</th>
                        <th class="text-center">role</th>
                        <th class="text-center">update</th>
                        <th class="text-center">delete</th>
                        <th class="text-center">Change Role</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user) 
                    <tr>
                      <td class="text-center">{{$user->id}}</td>
                      <td class="text-center">{{$user->username}}</td>
                      <td class="text-center">{{$user->email}}</td>
                      <td class="text-center">{{$user->role}}</td>
                      <td class="text-center">
                        <a href="/admin/user/update/{{$user->id}}"><img src="{{asset('images/update.svg')}}" height="20px" width="20px"></a>
                      </td>
                      <td class="text-center">
                        <a href="/admin/user/delete/{{$user->id}}"><img src="{{asset('images/delete.svg')}}" height="20px" width="20px"></a>
                      </td>
                      <td class="text-center">
                        @if($user->role == 'admin')
                        <a href="/admin/user/demote/{{$user->id}}"><img src="{{asset('images/demote.svg')}}" height="20px" width="20px"></a>
                        @else
                        <a href="/admin/user/promote/{{$user->id}}"><img src="{{asset('images/promotion.svg')}}" height="20px" width="20px"></a>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- <form class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-2">
                      <input type="text" class="form-control" placeholder="First name" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" placeholder="Last name" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" placeholder="username" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-2">
                      <input type="email" class="form-control" placeholder="email" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-2">
                      <input type="password" class="form-control" placeholder="password" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-1">
                      <select class="custom-select" required>
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                      </select>
                      <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                    <button class="col-md-1 btn btn-success" type="submit">New</button>
                  </div>
                </form> -->
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('includes.bottom')