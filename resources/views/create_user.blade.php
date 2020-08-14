@extends('layouts.master')

<!-- title for this page -->
@section('title', 'Create A User | ')

<!-- unique styles for this page -->
@section('styles')
@endsection

<!-- main content for this page -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Create</div>
                <div class="card-body">Create A User</div>
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
                    <input class="form-control" name="tag" id="blue-tag" pattern="[0-9]{10}" title="- 10 digits" placeholder="Blue Tag ID">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection

<!-- unique scripts for this page -->
@section('scripts')
    <script>

        // make ajax requests secure via CSRF token
        help.secure_ajax();

        // code to run once page is loaded...
        $(document).ready(() => {

            // ask "Are you sure?" before leaving...
            $(window).on('beforeunload', () => {

                return 'Unsaved changes will be lost. Are you sure?';
            });

            // don't ask "Are you sure?" when clicking submit...
            $(document).on("submit", "form", () => {
                
                $(window).off('beforeunload');
            });

            // send ajax request to notify if Blue Tag ID has already
            // been assigned to another user while typing...
            $('#blue-tag').on('input', _.debounce(() => {
                
                // ignore if input is empty
                if ($('#blue-tag').val().length == 0)
                    return;

                // send ajax request
                $.ajax({
                    type: 'POST',
                    url: '{{ route("check-tag") }}',
                    data: { 'tag_input' : $('#blue-tag').val() },
                    dataType: 'json'
                })
                .done((json_response) => {

                    // notify OK message with notify.js library
                    $.notify(json_response.message, { className: 'info', autoHide: false });
                })
                .fail((xhr, status, error) => {

                    // get json response
                    var json_response = xhr.responseJSON;

                    // notify error message with notify.js library
                    $.notify(json_response.message, { className: 'error', autoHide: false });
                });
            }, 500));
        });
    </script>
@endsection
