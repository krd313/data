@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="card-title mb-0 me-3">Categories</h5>
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-success add-item-btn">
                        <i class="bx bx-plus" ></i> Add Category
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Colour</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $category)


                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <h5><span class="badge" style="background-color: {{ $category->color }}; color: white;">
                                    {{ $category->number }}
                                </span></h5>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <div class="edit">
                                        <a href="{{ route('category.edit', $category) }}" class="btn btn-sm btn-success edit-item-btn" > <i class="bx bx-edit-alt"></i></a>
                                    </div>
                                    <div class="remove">
                                        <form action="{{ route('category.destroy', $category) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger remove-item-btn" > <i class="bx bx-trash"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





@endsection
