@extends('layouts.app')

@section('title')
    Trashed Category
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Trashed Category List
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                                <th>Deleted_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trash_lists as $trash)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $trash->name }}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm"
                                            href="{{ route('category.restore', $trash->id) }}">Restore</a>

                                        <form action="{{ route('category.forceDelete', $trash->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Force Delete</button>
                                        </form>
                                    </td>
                                    <td>{{ $trash->deleted_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
