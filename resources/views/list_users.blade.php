@extends('layouts.master')

<!-- title for this page -->
@section('title', 'List All Users | ')

<!-- unique styles for this page -->
@section('styles')
@endsection

<!-- main content for this page -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">List</div>
                <div class="card-body">List All Users</div>
            </div>

            <div class="card">
                <div class="card-body">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Internal ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Blue Tag ID</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->index }}</th>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><span class="badge badge-primary text-light">{{$user->blue_tag}}</span></td>
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

<!-- unique scripts for this page -->
@section('scripts')
@endsection