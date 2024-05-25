@extends('layouts\frontend\components\frontendmaster')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h1>Your To Do List</h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todolists as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    @if ($item->status == 1)
                                    <span class="btn btn-danger">Incomplete</span>
                                    @else
                                    <span class="btn btn-success">Complete</span>
                                    @endif
                                </td>
                                <td>
                                    {{-- edit button  --}}
                                    <a href="{{ route('todolist.edit',$item->id) }}">
                                        <button type="submit" class="btn btn-light shadow btn-xs sharp mb-2">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </a>
                                    {{-- Complete and Incomplete part  --}}
                                    @if ($item->status == 1)
                                    <a href="{{ route('incompletestatus.todolist',$item->id) }}">
                                        <button type="submit" class="btn btn-warning shadow btn-xs sharp mb-2">
                                            <i class="fa-solid fa-thumbs-down"></i>
                                        </button>
                                    </a>
                                    @else
                                    <a href="{{ route('completestatus.todolist',$item->id) }}">
                                        <button type="submit" class="btn btn-warning shadow btn-xs sharp mb-2">
                                            <i class="fa-solid fa-thumbs-up"></i>
                                        </button>
                                    </a>
                                    @endif
                                    {{-- Delete button  --}}
                                    <form action="{{ route('todolist.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit" class="btn btn-danger shadow btn-xs sharp">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('todolist.create') }}" class="btn btn-primary" >Create To Do</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
