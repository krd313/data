@extends('layouts.master')
@section('content')





<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="card-title mb-0 me-3">Articles</h5>
                    <a href="{{ route('articles.index') }}" class="btn btn-sm btn-success add-item-btn">
                        <i class="bx bx-home" ></i> Articles
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $article->title }}</h2>
                        <span>
                            {{ $article->created_at->format('d-m-Y') }}
                            by {{ $article->user->name }} .
                            <a href="">{{ $article->scategory->name }}</a>

                        </span>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $article->excerpt }}</p>
                        <p class="card-text">{{ $article->description }}</p>
                    </div>
                    <div class="card-footer">
                        @foreach ($article->tags as $tag)
                        <a href="{{ route('articles.index', ['tag' => $tag->name]) }}" class="btn btn-sm btn-success add-item-btn" >{{ $tag->name }}</a>
                        @endforeach
                        <hr>
                        <p>{{ $article->scategory->name }}</p>
                        <p>{{ $article->scategory->description }}</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


@endsection
