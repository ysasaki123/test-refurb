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

                    {{ __('User Listing') }}

                    <br>

                    @foreach($users as $user)
                        <br>
                        ID#{{$user->id}} &nbsp &nbsp Name: {{$user->name}} &nbsp &nbsp Email: {{$user->email}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
