@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-8">
            @if($users && count($users))
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">created at</th>
                        <th scope="col">updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <th scope="row">
                                    <a href="user/{{$user->id}}">{{$user->name}}</a>
                                </th>
                                <th scope="row">{{$user->email}}</th>
                                <th scope="row">{{$user->created_at}}</th>
                                <th scope="row">{{$user->updated_at}}</th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            @endif

        </div>
    </div>
</div>
@endsection
