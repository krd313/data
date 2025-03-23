@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="card-title mb-0 me-3">Articles</h5>
                    <a href="{{ route('articles.create') }}" class="btn btn-sm btn-success add-item-btn">
                        <i class="bx bx-plus" ></i> Add Articles
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">

                    @foreach($articles as $article)

                    <div class="col-xxl-4 col-lg-6">
                        <div class="card card-body">
                            <div class="avatar-sm mb-3">
                                {{ $article->created_at->format('M js Y') }}
                                . by {{ $article->user->name }}
                                <div class="avatar-title bg-success-subtle text-success fs-17 rounded">
                                    <i class="ri-smartphone-line"></i>
                                </div>
                            </div>
                            <h4 class="card-title">Text Application</h4>
                            <p class="card-text text-muted">Send a link to apply on mobile device. Appropriately communicate one-to-one technology.</p>
                            <a href="javascript:void(0);" class="btn btn-success">Apply Now</a>
                        </div>
                    </div><!-- end col -->

                    @endforeach

                </div>


            </div>
        </div>
    </div>
</div>





@endsection
