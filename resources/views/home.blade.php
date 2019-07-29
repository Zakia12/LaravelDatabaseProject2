@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!

                        <li>We are always there to answer any questions. You can contact us by filling out the 'Contact
                            Form' accessible from the drop-down menu.
                            <li>To check our list of users, please use the about page from the drop-down menu.</li>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
