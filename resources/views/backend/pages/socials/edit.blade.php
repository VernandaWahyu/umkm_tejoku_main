@extends('backend.layouts.master')

@section('title')
Edit Social Media Links - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection

@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Edit Social Media Links</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.social.index') }}">All Social Links</a></li>
                    <li><span>Edit Social Media Links - {{ $social->title }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- form start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Social Media Links - {{ $social->title }}</h4>
                    @include('backend.layouts.partials.messages')

                    <form action="{{ route('admin.social.update', $social->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $social->title }}" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                @if($social->image)
                                    <img src="{{ asset('storage/' . $social->image) }}" alt="{{ $social->title }}" width="100" class="mt-2">
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keyword">Keyword</label>
                            <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter Keywords" value="{{ $social->keyword }}">
                        </div>

                        <div class="form-group">
                            <label for="facebook">Facebook URL</label>
                            <input type="url" class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook URL" value="{{ $social->facebook }}">
                        </div>

                        <div class="form-group">
                            <label for="instagram">Instagram URL</label>
                            <input type="url" class="form-control" id="instagram" name="instagram" placeholder="Enter Instagram URL" value="{{ $social->instagram }}">
                        </div>

                        <div class="form-group">
                            <label for="youtube">YouTube URL</label>
                            <input type="url" class="form-control" id="youtube" name="youtube" placeholder="Enter YouTube URL" value="{{ $social->youtube }}">
                        </div>

                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Social Links</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- form end -->
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection
