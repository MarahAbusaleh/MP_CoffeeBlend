<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Blend - Admin Profile</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/SClogo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!----------------------------------------------- Sidebar ----------------------------------------------->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('AdminDashboard') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">PAGES</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('menu.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cup"></i>
                                </span>
                                <span class="hide-menu">Menu</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('category.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-category"></i>
                                </span>

                                <span class="hide-menu">Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('product.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Products</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('user.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('order.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-list"></i>
                                </span>
                                <span class="hide-menu">Orders</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="./admins.html" aria-expanded="false">
                    <span>
                    <i class="ti ti-user"></i>
                    </span>
                    <span class="hide-menu">Admins</span>
                </a>
                </li> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('comment.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-messages"></i>
                                </span>
                                <span class="hide-menu">Comments</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--///////////////////////////////////////// END Of Sidebar /////////////////////////////////////////-->

        <div class="body-wrapper">
            <!----------------------------------------------- Header ----------------------------------------------->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-danger rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ $adminData->image }}" alt="" width="35" height="35"
                                        class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="{{ route('profileAdmin') }}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="{{ route('logoutAdmin') }}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="container-fluid">
                @include('sweetalert::alert')
                <!--  Row 1 -->
                <div class="row">
                    <!-- Main Wrapper -->
                    <div class="main-wrapper">
                        <!-- Page Wrapper -->
                        <div class="page-wrapper">
                            <div class="content container-fluid">

                                <!-- Page Header -->
                                <div class="page-header">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="page-title">Profile</h2>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                                <li class="breadcrumb-item active">Profile</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Page Header -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profile-header">
                                            <div class="row align-items-center">
                                                <div class="col-auto profile-image">
                                                    <a href="#">
                                                        <img class="rounded-circle" alt="User Image"
                                                            src="{{ $adminData->image }}"
                                                            style="height: 100px; width: 100px;">
                                                    </a>
                                                </div>
                                                <div class="col ml-md-n2 profile-user-info">
                                                    <h4 class="user-name mb-0">{{ $adminData->name }}</h4>
                                                    <h6 class="text-muted">{{ $adminData->email }}</h6>
                                                    <div class="user-Location"><span><i
                                                                class="ti ti-map-pins"></i></span>{{ $adminData->address }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="profile-menu">
                                            <ul class="nav nav-tabs nav-tabs-solid">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab"
                                                        href="#per_details_tab">About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                        href="#pass_tab">Password</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content profile-tab-cont">
                                            <!-- Personal Details Tab -->
                                            <div class="tab-pane fade show active" id="per_details_tab">
                                                <!-- Personal Details -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title d-flex justify-content-between">
                                                                    <span>Personal Details</span>
                                                                    <a class="edit-link" data-toggle="modal"
                                                                        href="#edit_personal_details"><span><i
                                                                                class="ti ti-edit"></i></span></i>Edit</a>
                                                                </h5>
                                                                <div class="row">
                                                                    <p
                                                                        class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">
                                                                        Name</p>
                                                                    <p class="col-sm-10">{{ $adminData->name }}</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p
                                                                        class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">
                                                                        Email</p>
                                                                    <p class="col-sm-10">{{ $adminData->email }}</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p
                                                                        class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">
                                                                        Mobile</p>
                                                                    <p class="col-sm-10">{{ $adminData->mobile }}</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0">
                                                                        Address</p>
                                                                    <p class="col-sm-10 mb-0">
                                                                        {{ $adminData->address }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Edit Details Modal -->
                                                        <div class="modal fade" id="edit_personal_details"
                                                            aria-hidden="true" role="dialog" style="height: 78%;">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Personal Details</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close"
                                                                            style="width: 20px; height: 20px; padding-bottom: 20px;">
                                                                            <span><i class="ti ti-x"></i></span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('editAdminInfo') }}"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            {{-- @method('PUT') --}}
                                                                            <div class="row form-row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label>Name</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="name"
                                                                                            value="{{ $adminData->name }}">
                                                                                        @if ($errors->has('name'))
                                                                                            <span
                                                                                                class="text-danger">{{ $errors->first('name') }}
                                                                                            </span>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label>Email</label>
                                                                                        <input type="email"
                                                                                            class="form-control"
                                                                                            name="email"
                                                                                            value="{{ $adminData->email }}">
                                                                                        @if ($errors->has('email'))
                                                                                            <span
                                                                                                class="text-danger">{{ $errors->first('email') }}
                                                                                            </span>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Mobile</label>
                                                                                        <input type="text"
                                                                                            name="mobile"
                                                                                            value="{{ $adminData->mobile }}"
                                                                                            class="form-control">
                                                                                        @if ($errors->has('mobile'))
                                                                                            <span
                                                                                                class="text-danger">{{ $errors->first('mobile') }}
                                                                                            </span>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Address</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="address"
                                                                                            value="{{ $adminData->address }}">
                                                                                        @if ($errors->has('address'))
                                                                                            <span
                                                                                                class="text-danger">{{ $errors->first('address') }}
                                                                                            </span>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label>Image</label>
                                                                                        <input type="file"
                                                                                            class="form-control"
                                                                                            name="image"
                                                                                            id="image"
                                                                                            value="{{ $adminData->image }}">
                                                                                        @if ($errors->has('image'))
                                                                                            <span
                                                                                                class="text-danger">{{ $errors->first('image') }}
                                                                                            </span>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto profile-image">
                                                                                    <label></label>
                                                                                    <a href="#">
                                                                                        <img class="rounded-circle my-4"
                                                                                            id="showImage"
                                                                                            alt="User Image"
                                                                                            src="{{ $adminData->image }}"
                                                                                            style="height: 100px; width: 100px;">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-block">Save
                                                                                Changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Edit Details Modal -->
                                                    </div>
                                                </div>
                                                <!-- /Personal Details -->
                                            </div>
                                            <!-- /Personal Details Tab -->

                                            <!-- Change Password Tab -->
                                            <div id="pass_tab" class="tab-pane fade">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Change Password</h5>
                                                        <div class="row">
                                                            <div class="col-md-10 col-lg-6">
                                                                <form action="{{ route('editAdminPass') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label>Old Password</label>
                                                                        <input type="password" class="form-control"
                                                                            name="password">
                                                                        @if ($errors->has('password'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('password') }}
                                                                            </span>
                                                                        @endif
                                                                    </div><br>
                                                                    <div class="form-group">
                                                                        <label>New Password</label>
                                                                        <input type="password" class="form-control"
                                                                            name="newpass">
                                                                        @if ($errors->has('newpass'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('newpass') }}
                                                                            </span>
                                                                        @endif
                                                                    </div><br>
                                                                    <div class="form-group">
                                                                        <label>Confirm Password</label>
                                                                        <input type="password" class="form-control"
                                                                            name="newpassconf">
                                                                        @if ($errors->has('newpassconf'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('newpassconf') }}
                                                                            </span>
                                                                        @endif
                                                                    </div><br>
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Save Changes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Change Password Tab -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Wrapper -->
                    </div>
                    <!-- /Main Wrapper -->
                </div>
            </div>

            <!--///////////////////////////////////////// END Of Header /////////////////////////////////////////-->
        </div>
    </div>

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <!-- jQuery -->
    {{-- <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script> --}}

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('ssets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
