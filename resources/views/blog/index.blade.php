@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="card-title mb-0 me-3">Blog</h5>
                    <a href="{{ route('blog.create') }}" class="btn btn-sm btn-success add-item-btn">
                        <i class="bx bx-plus" ></i> Add Blog
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Banner Image</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $index => $blog)


                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>
                                @if (!empty($blog->banner_image))
                                    <img style='height: 80px;' src="{{ asset('images/'.$blog->banner_image) }}" alt="">
                                    @else
                                    <i> Not Available</i>
                                @endif
                                {{ $blog->banner_image }}
                            </td>
                            <td>{{ $blog->status  == 1 ? "Active" : "In Active"}}</td>
                            <td>{{ $blog->created_at->format('d/m/Y')}}</td>
                            {{-- <td>
                                <button class="btn btn-sm btn-soft-info">Trade Now</button>
                            </td> --}}
                            <td>
                                <div class="d-flex gap-2">
                                    <div class="show">
                                        <a href="{{ route('blog.show', $blog) }}" class="btn btn-sm btn-info edit-item-btn" > <i class="bx bx-show-alt"></i></a>
                                    </div>
                                    <div class="edit">
                                        <a href="{{ route('blog.edit', $blog) }}" class="btn btn-sm btn-success edit-item-btn" > <i class="bx bx-edit-alt"></i></a>
                                    </div>
                                    <div class="remove">
                                        <form action="{{ route('blog.destroy', $blog) }}" method="post">
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
