@extends('layout')


@section('content')
    <div class="container">
        <h1>Edit task # - {{$task -> id}}</h1>
        <div class="row">
            <div class="col-md-12">
                {!!  Form::open(["method" => "put", "route" => ["tasks.update", $task->id]]) !!}

                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{$task->title}}" required>
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" required>{{$task->description}}</textarea>
                    <button class="btn btn-warning">Submit</button>
                </div>

                {!! Form::close()  !!}
                <a href="{{route('tasks.index')}}" class="btn btn-warning">Back</a>
            </div>
        </div>
    </div>
@endsection
