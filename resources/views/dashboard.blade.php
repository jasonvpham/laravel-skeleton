@extends('layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header no-border">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Card One</h3>
                                <a href="javascript:void(0);">View Example</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">Card One header</span>
                                    <span>Card One subheader</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    Example
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="visitors-chart" height="200"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                      <span class="mr-2">
                        <i class="fa fa-square text-primary"></i> Example
                      </span>

                                <span>
                        <i class="fa fa-square text-gray"></i> Example
                      </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header no-border">
                            <h3 class="card-title">Products</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fa fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                <tr>
                                    <th>TH 1</th>
                                    <th>TH 2</th>
                                    <th>TH 3</th>
                                    <th>TH 4</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Example</td>
                                    <td>Example</td>
                                    <td>Example</td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Example</td>
                                    <td>Example</td>
                                    <td>Example</td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Example</td>
                                    <td>Example</td>
                                    <td>Example</td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-header no-border">
                            <h3 class="card-title">Card Three</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-sm btn-tool">
                                    <i class="fa fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-tool">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-success text-xl">
                                    <i class="ion ion-ios-refresh-empty"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                          <i class="ion ion-android-arrow-up text-success"></i> 88%
                        </span>
                                    <span class="text-muted">Example</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-warning text-xl">
                                    <i class="ion ion-ios-cart-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                          <i class="ion ion-android-arrow-up text-warning"></i> 88.8%
                        </span>
                                    <span class="text-muted">Example</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <p class="text-danger text-xl">
                                    <i class="ion ion-ios-people-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                          <i class="ion ion-android-arrow-down text-danger"></i> 88.88%
                        </span>
                                    <span class="text-muted">Example</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>

@endsection
