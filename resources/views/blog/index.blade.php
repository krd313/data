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
                                    <tr>
                                        <td>01</td>
                                        <td>Title</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Bitcoin (BTC)</a>
                                            </div>
                                        </td>
                                        <td>medium</td>
                                        <td>12/12/2024</td>
                                        {{-- <td>
                                            <button class="btn btn-sm btn-soft-info">Trade Now</button>
                                        </td> --}}
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <button class="btn btn-sm btn-success edit-item-btn" > <i class="bx bx-edit-alt"></i></button>
                                                </div>
                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" > <i class="bx bx-trash"></i> </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>









@endsection
