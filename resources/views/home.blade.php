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

                    {{ __('You are logged in!') }}

                    <br>
                    <br>
                    <a href="{{ route('user-show-create') }}" type="button" class="btn btn-primary">create a user</a>
                    <br>
                    <br>
                    <a href="{{ route('user-show-list') }}" type="button" class="btn btn-primary">list all users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
