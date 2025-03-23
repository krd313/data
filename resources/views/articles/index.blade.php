@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="card-title mb-0 me-3">Articles</h5>
                    <a href="{{ route('articles.create') }}" class="btn btn-sm btn-success add-item-btn">
                        <i class="bx bx-plus" ></i> Add Articles
                    </a>
                </div>
            </div>
        </div>

        @if(session('message'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

@forelse($articles as $article)
    <div class="row">
        <div class="col-12">


            <div class="row">
                <div class="col-xxl-6 col-lg-6">
                    <div class="card">

                        <div class="card-header">

                            <a href="{{ route('articles.show', $article->slug) }}">
                                <h4 class="card-title hover-primary" style="transition: color 0.3s;">
                                    {{ $article->title }}
                                </h4>
                            </a>


                        </div>
                        <div class="card-body">
                            <span>
                                {{ $article->created_at->format('d-m-Y') }}
                                 by {{ $article->user->name }}
                            </span>



                                <p class="card-text text-muted">{{ $article->excerpt }}</p>
                        </div>


                        <div class="card-footer">
                            @foreach ($article->tags as $tag)

                            <a href="{{ route('articles.index', ['tag' => $tag->name]) }}" class="btn btn-sm btn-success add-item-btn" >{{ $tag->name }}</a>

                        @endforeach
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
        </div>
    </div>
@empty
    <p>No articles found</p>
@endforelse

{{-- <div class="d-flex justify-content-center"> --}}
<div>
    {{ $articles->links('pagination::bootstrap-5') }}
</div>

        </div>
        </div>
    </div>
</div>


<style>
    .hover-primary:hover {
        color: blue; /* Change to your desired hover color */
    }
</style>


@endsection
