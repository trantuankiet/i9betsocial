@extends('layouts.master')
@section('title') @lang('translation.create-video') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Create video @endslot
@endcomponent

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div> 
@endif

<form method="POST" action="{{ route('add-video') }}" id="createvideo-form" autocomplete="off" class="needs-validation" novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Video Title</label>
                            <input type="text" class="form-control" id="video-title-input" name="title" placeholder="Enter video title" required>
                            <div class="invalid-feedback">Please Enter a video title.</div>
                        </div>
                        <div class="mb-3">
                            <label>Video Link</label>
                            <input type="text" class="form-control" id="video-link-input" name="link" placeholder="Enter video link" required>
                            <div class="invalid-feedback">Please Enter a video link.</div>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="video-popular-input">Popular</label>
                            <input class="form-check-input" type="checkbox" id="video-popular-input" name="popular" value="1">
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</form>


@endsection
@section('script')
<script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/ecommerce-video-create.init.js') }}"></script>

<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

