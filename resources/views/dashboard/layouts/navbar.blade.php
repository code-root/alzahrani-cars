@extends('dashboard.layouts.header')
@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

                <div class="app-brand demo ">
                    <a href="" class="app-brand-link">
                        <span class="app-brand-logo demo">
                        </span><span class="app-brand-text demo menu-text fw-bold ms-2">Amashreqe</span></a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i></a>
                </div>

                <div class="menu-inner-shadow"></div>



                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item">
                        <a href="{{ route('dashboard-index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                          <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>

                    {{-- <li class="menu-item">
        <a href="{{ route('app.slider.index') }}" class="menu-link">
          <div class="text-truncate" data-i18n="App Slider">App Slider</div>
        </a>
      </li> --}}

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons fa-solid fa-cube"></i>
                            <div class="text-truncate" data-i18n="Packages">Packages</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('packages.index') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="list">list</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('packages.create') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Add">Add</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('packages.sales') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="sales">sales</div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons bx bx-check-shield'></i>
                            <div class="text-truncate" data-i18n="Roles & Permissions">Roles & Permissions</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('users.index') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Users">Users</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('users.create') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Create Users">Users</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('roles.index') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Permission">Permission</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div class="text-truncate" data-i18n="Users App">Users</div>
                        </a>
                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="{{ route('userApp.index') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="List">List</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-edit"></i>
                            <div class="text-truncate" data-i18n="settings">settings</div>
                        </a>
                        
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="{{ route('homepagesettings.edit') }}" class="menu-link">
                                <div class="text-truncate" data-i18n="Features Home">Features</div>
                                </a>
                            </li> 

                            <li class="menu-item ">
                                <a href="{{ route('success_partners.index') }}" class="menu-link">
                                <div class="text-truncate" data-i18n="Partners">Success Partners</div>
                                </a>
                            </li> 

                            <li class="menu-item">
                                <a href="{{ route('translations.index') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Translations">translations</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{ route('pages.index') }}" class="menu-link">
                                <div class="text-truncate" data-i18n="Pages">Pages</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons  bx bxs-category'></i>
                            <div class="text-truncate" data-i18n="Categories">Categories</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('query.index', ['model' => 'Category']) }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Category">Category</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('query.index', ['model' => 'Author']) }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Author">Author</div>
                                </a>
                            </li>

                            
                            <li class="menu-item">
                                <a href="{{ route('uploaded.category') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="upload Category">upload Excel Category</div>
                                </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{ route('query.index', ['model' => 'Publisher']) }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Publisher">Publisher</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('query.index', ['model' => 'Keyword']) }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Keyword">Keyword</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('query.index', ['model' => 'Series']) }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Series">Series</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons  bx bxs-book-reader'></i>
                            <div class="text-truncate" data-i18n="Book">Book</div>
                        </a>
                        
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('book.index') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="All book">All Book</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('book.add.one') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Add Book">All Book</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('upload.book') }}" class="menu-link">
                        <i class='menu-icon tf-icons  bx bx-cloud-upload'></i>
                                    <div class="text-truncate" data-i18n="Upload Book">json</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('book.files') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Uolode Files & covers">Uolode Files</div>
                                </a>
                            </li>

                    </li>
               
                </ul>
            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                    <i class="bx bx-search bx-sm"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->
                        <ul class="navbar-nav flex-row align-items-center ms-auto">




                            <!-- Quick links  -->
                            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class='bx bx-grid-alt bx-sm'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        @foreach($shortcuts as $shortcut)
                                        <div class="dropdown-shortcuts-item row row-bordered g-0">
                                            <div class="col-2">
                                                <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle">
                                                    <i class="{{ $shortcut['icon'] }} fs-4"></i>
                                                </span>
                                            </div>
                                            <div class="col-8">
                                                <a href="{{ $shortcut['route'] }}" class="stretched-link">{{ $shortcut['title'] }}</a>
                                                {{-- <small class="text-muted mb-0">{{ $shortcut['description'] }}</small> --}}
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            
                            <!-- Quick links -->


                            <!-- Style Switcher -->
                            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <i class='bx bx-sm'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
            
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="https://ui-avatars.com/api/?name={{ $loginUser->name }}" alt="{{ $loginUser->name }}" 
                                            class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="https://ui-avatars.com/api/?name={{ $loginUser->name }}" alt="{{ $loginUser->name }}" 
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">{{ $loginUser->name }}</span>
                                                    <small class="text-muted">{{ $loginUser->email }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('login.logout') }}" target="_blank">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->

                        </ul>
                    </div>


                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>


                </nav>



                <!-- / Navbar -->

                @yield('body')




                @yield('footer')
            @endsection
