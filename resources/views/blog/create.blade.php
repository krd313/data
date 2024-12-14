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
                                {{-- <div class="row gy-4"> --}}

                                    <!--end col-->

                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="input title - required">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <!--end col-->


                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="exampleFormControlTextarea5" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="formFile" class="form-label">Banner Image</label>
                                            <input class="form-control" type="file" name="image" id="formFile">
                                        </div>
                                    </div>
                                    <!--end col-->



                                    <div class="col-xxl-3 col-md-6 mt-3">


                                        <div class="col-lg-6">
                                            <label for="FormSelectDefault" class="form-label">Status</label>
                                            <select class="form-select mb-3"  name="status" aria-label="Default select example">
                                                <option selected>Select your Status </option>
                                                <option value="1">Urgent</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Low</option>
                                            </select>
                                        </div>


                                    </div>


                                    <!--end col-->

                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <button type="submit" class="btn btn-primary me-2">Add Blog</button>
                                            <a href="{{ route('blog.index') }}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>

                                    <!--end col-->

                                    <!--end col-->

                                    <!--end col-->

                                    <!--end col-->
                                {{-- </div> --}}
                                <!--end row-->
                            </div>
                    </div>
                </div>
            </div>
@endsection
