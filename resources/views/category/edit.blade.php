@extends('layouts.master')
@section('content')


            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="card-title mb-0 me-3">Edit Category</h5>
                                <a href="{{ route('category.index') }}" class="btn btn-sm btn-success add-item-btn">
                                    <i class="bx bx-arrow-back" ></i> Category list
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
                                <form action="{{ route('category.update', $category) }}" method="POST" >

                                    @csrf
                                    @method('PUT')
                                    {{-- <div class="row gy-4"> --}}

                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>

                                            @enderror
                                        </div>
                                    </div>

                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="3" >{{ $category->description }}</textarea>
                                            @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <!--end col-->

                                    <!--end col-->

                                    <!--end col-->


                                    <div class="col-xxl-3 col-md-6 mt-3">
                                        <div>
                                            <label for="colour" class="form-label">Colour</label>
                                            <input type="color" class=" colorpicker-input" id="color" name="color" value="{{ $category->color }}">
                                            @error('color')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    <!--end col-->











                                    <!--end col-->

                                    <div class="col-xxl-3 col-md-6 mt-3">


                                        <div class="d-flex justify-content-start align-items-center">
                                            <button type="submit" class="btn btn-sm btn-success add-item-btn m-2" name="addcategory"><i class="bx bx-plus" ></i> Update </button>
                                            <a href="{{ route('category.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
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
