@extends('layouts.app')

@section('title')
    Edit Category
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST" id="editForm">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label>Category Name*</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}"
                                placeholder="Category Name">
                        </div>

                        <button class="btn btn-primary px-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateCategoryRequest', '#editForm') !!}
@endsection
