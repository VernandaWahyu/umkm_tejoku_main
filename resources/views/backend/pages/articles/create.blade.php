@extends('backend.layouts.master')

@section('title')
Create Article - Admin Panel
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
                <h4 class="page-title pull-left">Create Article</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.article.index') }}">All Articles</a></li>
                    <li><span>Create Article</span></li>
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
                    <h4 class="header-title">Create New Article</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Article Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="keyword">Keyword</label>
                                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter Keyword" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="content">Article Content</label>
                                <textarea class="form-control" id="content" name="content" rows="6" placeholder="Enter Content" required></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Subtitle">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="subcontent">Subcontent</label>
                                <textarea class="form-control" id="subcontent" name="subcontent" rows="4" placeholder="Enter Subcontent"></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="slug">Slug</label>
                                <p>* Contoh isi tegalsari (digunakan untuk mengisi button link pada slider menjadi article/tegalsari)</p>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug" required>
                            </div>
                        </div>

                        <!-- Image 1 -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="image1">Article Image 1</label>
                                <input type="file" class="form-control" id="image1" name="image1" required>
                            </div>
                        </div>

                        <!-- Image 2 -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="image2">Article Image 2</label>
                                <input type="file" class="form-control" id="image2" name="image2">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Article</button>
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
