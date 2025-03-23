@extends('layouts.master')
@section('content')


<div class="card">
    <div class="card-body">
        <div class="row row-cols-auto g-2">
            <span class="d-inline-block" style="width: 180px">
        <h4 class=" d-inline text-uppercase">Add Article</h4>
            </span>
            <span class="d-inline-block">
        <a href="{{ route('articles.index') }}" class="btn btn-info px-3 radius-30 ">Articles List</a>
            </span>
    </div>
    <br>

    <div class="card">
        <div class="card-body p-4">
            <form class="row g-3" method="post" action="{{ route('articles.store') }}" id="myForm">
                @csrf

            <div class="form-check form-switch form-check-secondary">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckSecondary" name="status">
                <label class="form-check-label gy-3" for="flexSwitchCheckSecondary">Status</label>
              </div>
<br>


            {{-- <form class="row g-3"> --}}
                <div class="col-md-12">
                    <label for="input1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="input1" placeholder="Title" name="title">
                </div>
                <div class="col-md-12">
                    <label for="input11" class="form-label">Excerpt</label>
                    <textarea class="form-control" id="input11" placeholder="Excerpt ..." rows="2" name="excerpt"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="input11" class="form-label">Description</label>
                    <textarea class="form-control" id="input11" placeholder="Description ..." rows="4" name="description"></textarea>
                </div>

                <div class="col-md-2">
                    <label for="scategory_id"  class="form-label">Category</label>
                    <select id="scategory_id" name="scategory_id" class="form-select" >
                        <option selected>Choose...</option>
                        @foreach ($scategories as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>

                        @endforeach
                    </select>
                </div>


                <label for="multiple-select-field" class="form-label">Tags</label>
                <select class="form-select" multiple aria-label="multiple select example" name="tags[]" >
                    <option selected>Choose...</option>
                    @foreach ($tags as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
                  </select>






                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Article">

                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
