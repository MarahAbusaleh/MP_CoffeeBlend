@extends('Admin.Layouts.master')
@section('title', 'Dashboard')
@section('content')

    <!--////////////////////////////////////////// END Of Header //////////////////////////////////////////-->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-sm-12">
                <h2 class="page-title">Welcome Admin!</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
        <!--  Row 2 -->
        <div class="row">
            <div class="row col-lg-9">
                <div class="col-lg-6 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $users->count() }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Users</h6>
                                <div class="progress progress-sm" style="height: 10px;">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span>
                                    <i class="ti ti-truck-delivery"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $orders->count() }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Orders</h6>
                                <div class="progress progress-sm" style="height: 10px;">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $products->count() }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Products</h6>
                                <div class="progress progress-sm" style="height: 10px;">
                                    <div class="progress-bar bg-danger w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span>
                                    <i class="ti ti-coffee"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $menus->count() }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Menu</h6>
                                <div class="progress progress-sm" style="height: 10px;">
                                    <div class="progress-bar bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <img class="col-xl-4" src="../assets/images/profile/person.png" alt="" height="280px"
                    style="width: 180px;">
            </div>
        </div>

    </div>
    </div>
    </div>


@endsection
