@extends('layouts.master')
@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="card-title mb-0 me-3">Blog</h5>
                                <a href="{{ route('blog.index') }}" class="btn btn-sm btn-success add-item-btn">
                                    <i class="bx bx-arrow-back" ></i> Blog list
                                </a>
                            </div>
                        </div>



                        <div class="card-body">
                            <div class="live-preview">


                                <div class="col-xxl-3 col-md-6">
                                    <div>
                                        <label for="placeholderstatus" class="form-label">Status</label>
                                        <input type="text" class="form-control"  name="status" value="{{ $blog->status == 1 ? 'Active' : 'In-active'}}">
                                    </div>
                                </div>

                                {{-- <div class="row gy-4"> --}}

                                    <!--end col-->

                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <!--end col-->



                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="3" >{{ $blog->description }}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="formFile" class="form-label">Banner Image file</label>
                                            {{-- <input class="form-control" name="banner_image" > --}}
                                            @if (!@empty($blog->banner_image))
                                                <img style='height: 80px;' src="{{ asset('images/'.$blog->banner_image) }}" alt="">
                                                @else
                                                <i> Not Available</i>
                                            @endif

                                        </div>
                                    </div>



                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label  class="form-label">Created_at</label>
                                            <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $blog->created_at }}">
                                        </div>
                                    </div>
                                    <!--end col-->









                                    <!--end col-->

                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div class="d-flex justify-content-start align-items-center">

                                            <a href="{{ route('blog.index') }}" class="btn btn-secondary me-2">Cancel</a>

                                            <a href="{{ route('blog.edit', $blog) }}" class="btn btn-secondary me-2">Edit</a>
                                        </div>
                                    </div>

                                    <!--end col-->

                                {{-- </div> --}}
                                <!--end row-->

                            </div>
                    </div>
                </div>
            </div>
@endsection
