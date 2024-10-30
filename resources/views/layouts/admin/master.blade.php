<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.admin.partials.head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layouts.admin.partials.navbar')

@include('layouts.admin.partials.sidebar')

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Dashboard v3</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard v3</li>
</ol>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">Online Store Visitors</h3>
<a href="javascript:void(0);">View Report</a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
<p class="d-flex flex-column">
<span class="text-bold text-lg">820</span>
<span>Visitors Over Time</span>
</p>
<p class="ml-auto d-flex flex-column text-right">
<span class="text-success">
<i class="fas fa-arrow-up"></i> 12.5%
</span>
<span class="text-muted">Since last week</span>
</p>
</div>

<div class="position-relative mb-4">
<canvas id="visitors-chart" height="200"></canvas>
</div>
<div class="d-flex flex-row justify-content-end">
<span class="mr-2">
<i class="fas fa-square text-primary"></i> This Week
</span>
<span>
<i class="fas fa-square text-gray"></i> Last Week
</span>
</div>
</div>
</div>

</div>

<div class="col-lg-6">
<div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">Sales</h3>
<a href="javascript:void(0);">View Report</a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
<p class="d-flex flex-column">
<span class="text-bold text-lg">$18,230.00</span>
<span>Sales Over Time</span>
</p>
<p class="ml-auto d-flex flex-column text-right">
<span class="text-success">
<i class="fas fa-arrow-up"></i> 33.1%
</span>
<span class="text-muted">Since last month</span>
</p>
</div>

<div class="position-relative mb-4">
<canvas id="sales-chart" height="200"></canvas>
</div>
<div class="d-flex flex-row justify-content-end">
<span class="mr-2">
<i class="fas fa-square text-primary"></i> This year
</span>
<span>
<i class="fas fa-square text-gray"></i> Last year
</span>
</div>
</div>
</div>

<div class="card">
<div class="card-header border-0">
<h3 class="card-title">Online Store Overview</h3>
<div class="card-tools">
<a href="#" class="btn btn-sm btn-tool">
<i class="fas fa-download"></i>
</a>
<a href="#" class="btn btn-sm btn-tool">
<i class="fas fa-bars"></i>
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
<i class="ion ion-android-arrow-up text-success"></i> 12%
</span>
<span class="text-muted">CONVERSION RATE</span>
</p>
</div>

<div class="d-flex justify-content-between align-items-center border-bottom mb-3">
<p class="text-warning text-xl">
<i class="ion ion-ios-cart-outline"></i>
</p>
<p class="d-flex flex-column text-right">
<span class="font-weight-bold">
<i class="ion ion-android-arrow-up text-warning"></i> 0.8%
</span>
<span class="text-muted">SALES RATE</span>
</p>
</div>

<div class="d-flex justify-content-between align-items-center mb-0">
<p class="text-danger text-xl">
<i class="ion ion-ios-people-outline"></i>
</p>
<p class="d-flex flex-column text-right">
<span class="font-weight-bold">
<i class="ion ion-android-arrow-down text-danger"></i> 1%
</span>
<span class="text-muted">REGISTRATION RATE</span>
</p>
</div>

</div>
</div>
</div>

</div>

</div>

</div>

</div>


<aside class="control-sidebar control-sidebar-dark">

</aside>


@include('layouts.admin.partials.footer')
</div>



<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('AdminLTE/dist/js/adminlte.js?v=3.2.0') }}"></script>

<script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>

<script src="{{ asset('AdminLTE/dist/js/pages/dashboard3.js') }}"></script>
</body>
</html>
