@extends('backend.layouts.master')

@section('title')
Social - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
@endsection

@section('admin-content')
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Social</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Socials</span></li>
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
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title float-left">Social List</h4>
                    <p class="float-right mb-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.social.create') }}">Create New Social</a>
                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="15%">Title</th>
                                    <th width="20%">Keyword</th>
                                    <th width="20%">Image</th>
                                    <th width="10%">Facebook</th>
                                    <th width="10%">Instagram</th>
                                    <th width="10%">YouTube</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($socials as $social)
                               <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $social->title }}</td>
                                    <td>{{ $social->keyword }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $social->image) }}" alt="{{ $social->title }}" width="100">
                                    </td>
                                    <td>
                                        <a href="{{ $social->facebook }}" target="_blank">{{ Str::limit($social->facebook, 20) }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ $social->instagram }}" target="_blank">{{ Str::limit($social->instagram, 20) }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ $social->youtube }}" target="_blank">{{ Str::limit($social->youtube, 20) }}</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success text-white" href="{{ route('admin.social.edit', $social->id) }}">Edit</a>
                                        
                                        <a class="btn btn-danger text-white" href="{{ route('admin.social.destroy', $social->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $social->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $social->id }}" action="{{ route('admin.social.destroy', $social->id) }}" method="POST" style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
</div>
@endsection

@section('scripts')
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    
    <script>
        /*================================
        datatable active
        ==================================*/
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }
    </script>
@endsection
