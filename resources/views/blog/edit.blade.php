@extends('layouts.master')
@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="card-title mb-0 me-3">Edit Blog</h5>
                                <a href="{{ route('blog.index') }}" class="btn btn-sm btn-success add-item-btn">
                                    <i class="bx bx-arrow-back" ></i> Blog list
                                </a>
                            </div>
                        </div>

                        {{-- @if ($errors->any())
                            <ul>
                        @foreach ( $errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                            </ul>
                        @endif --}}

                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('blog.update', $blog) }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                {{-- <div class="row gy-4"> --}}

                                    <!--end col-->

                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" placeholder="input title - required">
                                            @error('title')
                                                <div class="text-danger">{{ $message }}</div>

                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <!--end col-->


                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="3" >{{ $blog->description }}</textarea>
                                            @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="formFile" class="form-label">Banner Image file</label>
                                            <input class="form-control" type="file" name="banner_image" id="banner_image">
                                            @if (!@empty($blog->banner_image))
                                            <img style='height: 80px;' src="{{ asset('images/'.$blog->banner_image) }}" alt="">
                                            @else
                                            <i> Not Available</i>
                                        @endif
                                        </div>
                                    </div>
                                    <!--end col-->








                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div class="col-lg-6 form-group">
                                            <label for="us" class="form-label">Status</label>
                                            <select class="form-select" name="status" id="us">
                                                <option value="">Select your Status</option>
                                                <option {{ $blog->status == '1' ? 'selected' : '' }} value="1">Urgent</option>
                                                <option {{ $blog->status == '2' ? 'selected' : '' }} value="2">Medium</option>
                                                <option {{ $blog->status == '3' ? 'selected' : '' }} value="3">Low</option>
                                            </select>
                                            @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <!--end col-->

                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <button type="submit" class="btn btn-primary me-2" name="addBlog">Update Blog</button>
                                            <a href="{{ route('blog.index') }}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>

                                    <!--end col-->

                                {{-- </div> --}}
                                <!--end row-->
                            </form>
                            </div>
                    </div>
                </div>
            </div>
@endsection


