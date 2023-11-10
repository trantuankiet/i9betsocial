@extends('layouts.master')
@section('title') @lang('translation.create-product') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Create Product @endslot
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

<form method="POST" action="{{ route('add-image') }}" id="createproduct-form" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Product Gallery</h5>
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="fs-14 mb-1">Product Gallery</h5>
                        <p class="text-muted">Add Product Gallery Images.</p>

                        <input type="file" name="files[]" multiple="multiple">
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
<script src="{{ URL::asset('build/js/pages/ecommerce-product-create.init.js') }}"></script>

<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

