@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Administration Panel {{session('status')}}</div>
                <div class="card-body">
                    <a href="admin/users" class="btn btn-primary btn-lg btn-block" role="button">Users Administration</a>
                    <a href="404" class="btn btn-primary btn-lg btn-block" role="button">Countries Administration</a>
                    <a href="404" class="btn btn-primary btn-lg btn-block" role="button">Experiences Administration</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection