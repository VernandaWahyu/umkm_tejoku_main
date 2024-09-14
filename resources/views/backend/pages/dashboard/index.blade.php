@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection

@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Dashboard</span></li>
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
        <!-- First Row for Stats -->
        <div class="col-lg-8">
            <div class="row">
                <!-- Card for Roles -->
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <a href="{{ route('admin.roles.index') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-users"></i> Roles</div>
                                    <h2>{{ $total_roles }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card for Admins -->
                <div class="col-md-6 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <a href="{{ route('admin.admins.index') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-user"></i> Admins</div>
                                    <h2>{{ $total_admins }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card for Slider -->
                 <div class="col-md-6 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <a href="{{ route('admin.admins.index') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-key"></i> Admins</div>
                                    <h2>{{ $total_permissions }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                

               
            </div>
        </div>

        <!-- Second Row for Website Info -->
        <div class="col-lg-4">
            <div class="card mt-5 mb-3">
                <div class="card-body">
                    <h4 class="header-title">Tentang Website</h4>
                    <p>Website ini adalah platform landing page untuk UMKM yang terletak di Desa Tegalsari, Josari, dan Kutuwetan. Tujuannya untuk mempromosikan produk lokal serta potensi dari desa tersebut. Admin bertanggung jawab untuk mengelola data UMKM, dan memastikan kelancaran operasional situs.</p>
                </div>
            </div>

            <!-- Card for Additional Info or Support -->
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title">Dukungan</h4>
                    <p>Jika Anda memerlukan bantuan atau informasi lebih lanjut tentang pengelolaan website ini, silakan hubungi tim support kami melalui email: umkmtejoku@gail.com atau telepon: 0812-3456-7890.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
