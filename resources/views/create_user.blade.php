@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Create A User') }}
                </div>
            </div>
        
            <form class="pt-4" action=" {{ route('user-create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold" for="name">Name</label>
                    <input class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else...or will we?</small>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="password">Password</label>
                    <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="blue-tag">Blue Tag ID</label>
                    <input class="form-control" name="tag" id="blue-tag" placeholder="Blue Tag ID">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
