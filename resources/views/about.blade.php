@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">About</div>

                    <div class="card-body">

                        This is our About Page. Below is a list of our users.
                        @foreach($users as $user)
                            <p>{{$user->name}}</p>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection