@extends('backend.layouts.master')

@section('title')
Article - Admin Panel
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
                <h4 class="page-title pull-left">Articles</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Articles</span></li>
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
                    <h4 class="header-title float-left">Article List</h4>
                    <p class="float-right mb-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.article.create') }}">Create New Article</a>
                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">Title</th>
                                    <th width="10%">Keyword</th>
                                    <th width="10%">Subtitle</th>
                                    <th width="15%">Content</th>
                                    <th width="15%">Subcontent</th>
                                    <th width="10%">Slug</th>
                                    <th width="15%">Image</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($articles as $article)
                               <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->keyword }}</td>
                                    <td>{{ $article->subtitle }}</td>
                                    <td>{{ Str::limit($article->content, 50) }}</td>
                                    <td>{{ Str::limit($article->subcontent, 50) }}</td>
                                    <td>{{ $article->slug }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $article->image1) }}" alt="{{ $article->title }}" width="100">
                                    </td>
                                    <td>
                                        <a class="btn btn-success text-white" href="{{ route('admin.article.edit', $article->id) }}">Edit</a>
                                        
                                        <a class="btn btn-danger text-white" href="{{ route('admin.article.destroy', $article->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $article->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $article->id }}" action="{{ route('admin.article.destroy', $article->id) }}" method="POST" style="display: none;">
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
