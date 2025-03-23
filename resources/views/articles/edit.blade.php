@extends('layouts.master')
@section('content')


<div class="card">
    <div class="card-body">
        <div class="row row-cols-auto g-2">
            <span class="d-inline-block" style="width: 180px">
        <h4 class=" d-inline text-uppercase">Edit Article</h4>
            </span>
            <span class="d-inline-block">
        <a href="{{ route('articles.index') }}" class="btn btn-info px-3 radius-30 ">Articles List</a>
            </span>
    </div>
    <br>

    <div class="card">
        <div class="card-body p-4">
            <form class="row g-3" method="post" action="{{ route('articles.update',$article->slug) }}" id="myForm">
                @csrf

                @method('PATCH')

            <div class="form-check form-switch form-check-secondary">
                <input {{ $article->status ? 'checked' : '' }} value="{{ $article->status }}" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckSecondary" name="status">
                <label class="form-check-label gy-3" for="flexSwitchCheckSecondary">Status</label>
              </div>
<br>


            {{-- <form class="row g-3"> --}}
                <div class="col-md-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $article->title }}">
                </div>
                <div class="col-md-12">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <textarea class="form-control" id="excerpt" placeholder="Excerpt ..." rows="2" name="excerpt" value="{{ $article->excerpt }}">{{ $article->excerpt }}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" placeholder="Description ..." rows="4" name="description" value="{{ $article->description }}">{{ $article->description }}</textarea>
                </div>

                <div class="col-md-2">
                    <label for="scategory_id"  class="form-label"  >Category</label>
                    <select id="scategory_id" name="scategory_id" class="form-select" >
                        <option selected>Choose...</option>
                        @foreach ($scategories as $key => $value)
                            <option value="{{ $key }}"{{ $article->scategory_id === $key ? 'selected' : '' }}>
                                {{ $value }}
                            </option>

                        @endforeach
                    </select>
                </div>


                <label for="multiple-select-field" class="form-label" >Tags</label>
                <select class="form-select" id="multiple-select-field" multiple aria-label="multiple select example" name="tags[]" >
                    {{-- <option selected>Choose...</option> --}}
                    @foreach ($tags as $key => $value)
                    <option value="{{ $key }}"{{ in_array($key, $article->tags->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $value }}</option>
                @endforeach
                  </select>






                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Article">

                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
