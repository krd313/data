@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="card-title mb-0 me-3">Tasks</h5>
                    <a href="{{ route('task.create') }}" class="btn btn-sm btn-success add-item-btn">
                        <i class="bx bx-plus" ></i> Add Task
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Priority</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Start Date</th>
                            <th>Due Date</th>
                            <th>Completed Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($priorities as $index => $priority) --}}


                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5><span class="badge" style="background-color: ; color: white;">

                                </span></h5>
                            </td>
                            <td>
                                <div class="d-flex gap-2">

                                    <div class="edit">
                                        <a href="" class="btn btn-sm btn-success edit-item-btn" > <i class="bx bx-edit-alt"></i></a>
                                    </div>
                                    <div class="remove">
                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger remove-item-btn" > <i class="bx bx-trash"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





@endsection
