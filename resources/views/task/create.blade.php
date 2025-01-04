@extends('layouts.master')
@section('content')


            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="card-title mb-0 me-3">Create Priority</h5>
                                <a href="{{ route('priority.index') }}" class="btn btn-sm btn-success add-item-btn">
                                    <i class="bx bx-arrow-back" ></i> Priority list
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
                                <form action="{{ route('priority.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                {{-- <div class="row gy-4"> --}}

                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Number</label>
                                            <input type="text" class="form-control" id="number" name="number" value="{{ old('number') }}" placeholder="input number - required">
                                            @error('number')
                                                <div class="text-danger">{{ $message }}</div>

                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="input name - required">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>

                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <!--end col-->


                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="colour" class="form-label">Colour</label>
                                            <input type="color" class=" colorpicker-input" id="color" name="color" value="{{ old('color') }}" placeholder="input color - required">
                                            @error('color')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    <!--end col-->











                                    <!--end col-->

                                    <div class="col-xxl-3 col-md-6 mt-3">


                                        <div class="d-flex justify-content-start align-items-center">
                                            <button type="submit" class="btn btn-sm btn-success add-item-btn m-2" name="addPriority"><i class="bx bx-plus" ></i> Add Priority</button>
                                            <a href="{{ route('priority.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
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
