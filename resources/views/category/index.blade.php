@extends('layouts.app')

@section('title')
    Category Lists
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Category Lists
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                                <th>Created_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lists as $list)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $list->name }}</td>
                                    <td>
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('category.edit', $list->id) }}">Edit</a>

                                        <form action="{{ route('category.destroy', $list->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    <td>{{ $list->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
