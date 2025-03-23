@extends('layouts.master')
@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="card-title mb-0">Create Article</h5>
                    <a href="{{ route('articles.index') }}" class="btn btn-sm btn-success add-item-btn">
                        <i class="bx bx-home" ></i> Articles
                    </a>
                </div>
            </div>
        </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                    <div class="card-body">
                        <div class="live-preview">

                            <form  method="POST"  action="{{ route('articles.store') }}" >
                                @csrf



                                <div class="flex-shrink-0">

                                    <div class="form-check form-switch form-switch-md">
                                        <input class="form-check-input" name="status" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Status </label>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-xxl-3 col-md-6">
                                    <div>
                                        <label for="title" class="form-label" value="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title">
                                    </div>
                                </div>
                            </div>

                                <!--end col-->

                            <div class="row">
                                <div class="col-xxl-3 col-md-6">
                                    <div>
                                        <label for="exampleFormControlTextarea5" class="form-label">Exerpt</label>
                                        <textarea class="form-control" name="exerpt"  id="excerpt" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                                <!--end col-->

                            <div class="row">
                                <div class="col-xxl-3 col-md-6">
                                    <div>
                                        <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                                        <textarea class="form-control" name="description"  id="description" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                                <!--end col-->

                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-xxl-3 col-md-6">
                                    <label for="scategory_id" class="form-label">Category</label>
                                    <select class="form-select" name="scatogories_id" id="scatogry_id" aria-label="Default select example">
                                        @foreach ($scategories as $key => $value)
                                        <option value ="{{ $key }}">{{ $value }} </option>
                                        @endforeach


                                    </select>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xxl-3 col-md-6">
                                    <label for="scategory_id" class="form-label">Tags</label>
                                    <select class="form-select"  name="tags[]" id="tags_id" multiple aria-label="Default select example" >
                                        @foreach ($tags as $key => $value)
                                        <option value ="{{ $key }}">{{ $value }} </option>
                                        @endforeach


                                    </select>

                                </div>
                            </div>






                            {{-- <div class="row">
                                <div class="col-xxl-3 col-md-6">

                                    <label for="tags" class="form-label text">Tags</label>
                                    <select class="form-control" name="tags" id="choices-multiple-remove-button"  data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                        @foreach ($tags as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                    </select>

                            </div> --}}




                        </div>



                        <!--end row-->
                        <div class="col-xxl-3 col-md-6 mt-3">


                            <div class="d-flex justify-content-start align-items-center">
                                <button type="submit" class="btn btn-sm btn-success add-item-btn m-2" name="addarticle"><i class="bx bx-plus" ></i> Article</button>
                                <a href="{{ route('articles.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>




                </div>
            </div>
            <!--end col-->




    </div>
</div>




{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const element = document.getElementById('tags_id');
        const choices = new Choices(element, {
            removeItemButton: true,
        });
    });
</script> --}}


@endsection

{{--
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="mb-3">
            <label for="choices-multiple-remove-button" class="form-label text-muted">With remove button</label>
            <p class="text-muted">Set <code>data-choices data-choices-removeItem multiple</code> attribute.</p>
            <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="tags[]" multiple>
                <option value="Choice 1" selected>Choice 1</option>
                <option value="Choice 2">Choice 2</option>
                <option value="Choice 3">Choice 3</option>
                <option value="Choice 4">Choice 4</option>
            </select>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const element = document.getElementById('choices-multiple-remove-button');
        const choices = new Choices(element, {
            removeItemButton: true,
        });
    });
</script> --}}
