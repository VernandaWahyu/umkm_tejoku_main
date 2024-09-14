 <!-- sidebar menu area start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Admin</h2> 
                <h4 class="text-white">UMKM</h4>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    @if ($usr->can('dashboard.view'))
                    <li class="active">
                        {{-- <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a> --}}
                        
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="ti-dashboard"></i><span>dashboard</span></a></li>
                    </li>
                    @endif

                    {{-- @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Roles & Permissions
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.roles.create') || Route::is('admin.roles.index') || Route::is('admin.roles.edit') || Route::is('admin.roles.show') ? 'in' : '' }}">
                            @if ($usr->can('role.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                            @endif
                            @if ($usr->can('role.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif --}}

                    <li class="{{ Route::is('admin.slider.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.slider.index') }}">
                            <i class="ti-book"></i>
                            <span>Slider</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('admin.contact.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.contact.index') }}">
                            <i class="ti-mobile"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                    
                    <li class="{{ Route::is('admin.about.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.about.index') }}">
                            <i class="ti-info-alt"></i>
                            <span>About</span>
                        </a>
                    </li>
                    
                    <li class="{{ Route::is('admin.gallery.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.gallery.index') }}">
                            <i class="ti-gallery"></i>
                            <span>Gallery</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('admin.social.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.social.index') }}">
                            <i class="ti-instagram"></i>
                            <span>Social</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('admin.map.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.map.index') }}">
                            <i class="ti-map-alt"></i>
                            <span>Map</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('admin.article.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.article.index') }}">
                            <i class="ti-link"></i>
                            <span>Article</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('admin.sponsor.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.sponsor.index') }}">
                            <i class="ti-image"></i>
                            <span>Sponsor</span>
                        </a>
                    </li>


                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Admins
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('admin.admins.index') || Route::is('admin.admins.edit') || Route::is('admin.admins.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('admin.view'))
                                <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}"><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                            @endif

                            @if ($usr->can('admin.create'))
                                <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}"><a href="{{ route('admin.admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->