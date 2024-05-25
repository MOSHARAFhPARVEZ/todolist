@extends('layouts\frontend\components\frontendmaster')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit To Do</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('todolist.update',$todolist->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" value="{{ $todolist->title }}" name="title" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input class="form-control" value="{{ $todolist->description }}"
                                name="description">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('home') }}" class="btn btn-danger" >Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
