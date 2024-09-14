@extends('backend.layouts.master')

@section('title')
Create Contact - Admin Panel
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
                <h4 class="page-title pull-left">Create Contact</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.contact.index') }}">All Contacts</a></li>
                    <li><span>Create Contact</span></li>
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
                    <h4 class="header-title">Create New Contact</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="text1">Text 1</label>
                                <input type="text" class="form-control" id="text1" name="text1" placeholder="Enter Text 1" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="text2">Text 2</label>
                                <input type="text" class="form-control" id="text2" name="text2" placeholder="Enter Text 2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" class="form-control" id="number" name="number" placeholder="Enter Number" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Contact</button>
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
