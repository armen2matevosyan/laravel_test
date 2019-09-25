@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12">
            <p> <b>Email:</b>
                {{$user->email}}
            </p>
            <p><b>Name:</b>
                {{$user->name}}
            </p>
            </div>
            <div class="col-md-8">
                @if($user)
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
                        @foreach($user->posts as $post)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <th scope="row">
                                    {{$post->name}}
                                </th>
                                <th scope="row">{{$post->description}}</th>
                                <th scope="row">{{$post->created_at}}</th>
                                <th scope="row">{{$post->updated_at}}</th>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                @endif

            </div>
        </div>
    </div>
@endsection

