@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('post.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> Name*</label>
                        <input type="text" required class="form-control" name="name" id="exampleFormControlInput1" placeholder="Write Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description*</label>
                        <textarea class="form-control" required name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">image*</label>
                        <input type="file" required class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Send</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
