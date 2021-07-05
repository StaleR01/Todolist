@extends('layout')


@section('content')
    <div class="container">
        <h1>Create your task</h1>
        <div class="row">
            <div class="col-md-12">
                {!!  Form::open(["method" => "post", "route" => "tasks.store"]) !!}

                <div class="form-group">
                    <input type="text" class="form-control" name="title" required placeholder="Title">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" required placeholder="Description"></textarea>
                    <button class="btn btn-success">Submit</button>
                </div>

                {!! Form::close()  !!}
                <a href="{{route('tasks.index')}}" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>
@endsection
