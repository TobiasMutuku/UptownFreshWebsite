<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wifi Management</title>
    <!-- base:css -->
    <link rel="stylesheet" href="/Admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/Admin/vendors/css/vendor.bundle.base.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
          crossorigin="anonymous">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/Admin/css/newstyle.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/Admin/images/logo.png" />
</head>
<body>
<div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item sidebar-category">
                <p>Navigation</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Admin/home.html">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/home.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">Dashboard</span>
                    <div class="badge badge-info badge-pill">4</div>
                </a>
            </li>
            <li class="nav-item sidebar-category">
                <p>Clients</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/info.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">client information</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">General</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Subscriptions</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/form.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">Forms</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Admin/pages/charts/chartjs.html">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/analysis.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">Analysis</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Admin/pages/icons/mdi.html">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/todolist.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">TO-DO LIST</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Admin/pages/Tickets.html">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/invoice.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">Tickets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Admin/pages/Settings.html">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/settings.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Admin/pages/transactions.html">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/pay.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">Transactions</span>
                </a>
            </li>
            <!--     <li class="nav-item">
              <a class="nav-link" href="../../pages/mail.html">
                <i class="mdi mdi-comment menu-icon"></i>
                <span class="menu-title">Mail</span>
              </a>
            </li>-->
            <li class="nav-item sidebar-category">
                <p>Pages</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/form.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">Sample Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item sidebar-category">
                <p>Apps</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Admin/docs/documentation.html">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/help.svg" height="20" width="20">
                    </span>
                    <span class="menu-title">Help</span>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:./partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span style="padding-right: 10px">
                        <img src="/Admin/icon/drawer.svg" height="20" width="20">
                    </span>
                </button>
                <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, Alfred Mutua</h4>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Aug 30, 2021</h4>
                    </li>
                    <li class="nav-item dropdown mr-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                            <span style="padding-right: 10px">
                                    <img src="/Admin/icon/urgent.svg" height="20" width="20">
                                </span>
                            <span class="count bg-info">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal">David Warui
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Mbataru
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
            <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/face5.jpg" alt="profile"/>
                            <span class="nav-profile-name">Alfred Mutua</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <span style="padding-right: 10px">
                                    <img src="/Admin/icon/settings.svg" height="20" width="20">
                                </span>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <span style="padding-right: 10px">
                                    <img src="/Admin/icon/logout.svg" height="20" width="20">
                                </span>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Scheduled for today</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                User
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Event
                                            </th>
                                            <th>
                                                Payment
                                            </th>
                                            <th>
                                                Due date
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face1.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                katie perry
                                            </td>
                                            <td>
                                                <div class="preview-item-content">
                                                    <h6 class="preview-subject font-weight-normal">Wifi installation</h6>
                                                    <p class="font-weight-light small-text mb-0 text-muted">
                                                        new client ,due at 9 a.m
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                today
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face2.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                henry shakes
                                            </td>
                                            <td>
                                                <div class="preview-item-content">
                                                    <h6 class="preview-subject font-weight-normal">Wifi installation</h6>
                                                    <p class="font-weight-light small-text mb-0 text-muted">
                                                        new client ,due at 12 p.m
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                $245.30
                                            </td>
                                            <td>
                                                today
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face3.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                pauline wawira
                                            </td>
                                            <td>
                                                <div class="preview-item-content">
                                                    <h6 class="preview-subject font-weight-normal">Wifi configuration</h6>
                                                    <p class="font-weight-light small-text mb-0 text-muted">
                                                        Upgrade bouqet
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                $138.00
                                            </td>
                                            <td>
                                                today
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face4.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                purity mwendia
                                            </td>
                                            <td>
                                                <div class="preview-item-content">
                                                    <h6 class="preview-subject font-weight-normal">Wifi servicing</h6>
                                                    <p class="font-weight-light small-text mb-0 text-muted">
                                                        due at 2 p.m
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                today
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face5.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                alex marvin
                                            </td>
                                            <td>
                                                <div class="preview-item-content">
                                                    <h6 class="preview-subject font-weight-normal">wifi reconfiguration</h6>
                                                    <p class="font-weight-light small-text mb-0 text-muted">
                                                        location change
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                $ 160.25
                                            </td>
                                            <td>
                                                today
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-6 grid-margin stretch-card">
                        <div class="row w-100 flex-grow">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title">Audience Metrics</p>
                                        <p class="text-muted">25% more traffic than previous week</p>
                                        <div class="row mb-3">
                                            <div class="col-md-7">
                                                <div class="d-flex justify-content-between traffic-status">
                                                    <div class="item">
                                                        <p class="mb-">Users</p>
                                                        <h5 class="font-weight-bold mb-0">93,956</h5>
                                                        <div class="color-border"></div>
                                                    </div>
                                                    <div class="item">
                                                        <p class="mb-">Bounce Rate</p>
                                                        <h5 class="font-weight-bold mb-0">58,605</h5>
                                                        <div class="color-border"></div>
                                                    </div>
                                                    <div class="item">
                                                        <p class="mb-">Page Views</p>
                                                        <h5 class="font-weight-bold mb-0">78,254</h5>
                                                        <div class="color-border"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill"
                                                           href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                                                            Day
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career"
                                                           role="tab" aria-controls="pills-profile" aria-selected="false">
                                                            Week
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music"
                                                           role="tab" aria-controls="pills-contact" aria-selected="false">
                                                            Month
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <canvas id="audience-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <p class="card-title">Weekly Balance</p>
                                            <p class="text-success font-weight-medium">20.15 %</p>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap mb-3">
                                            <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">$22.736</h5>
                                            <p class="text-muted mb-0">Avg Sessions</p>
                                        </div>
                                        <canvas id="balance-chart" height="130"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <p class="card-title">Today Task</p>
                                            <p class="text-success font-weight-medium">45.39 %</p>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap mb-3">
                                            <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">17.247</h5>
                                            <p class="text-muted mb-0">Avg Sessions</p>
                                        </div>
                                        <canvas id="task-chart" height="130"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 grid-margin stretch-card">
                        <div class="row w-100 flex-grow">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title">Regional Load</p>
                                        <p class="text-muted">Last update: 2 Hours ago</p>
                                        <div class="regional-chart-legend d-flex align-items-center flex-wrap mb-1"
                                             id="regional-chart-legend"></div>
                                        <canvas height="280" id="regional-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <p class="card-title mb-0 mr-1">Today activity</p>
                                            <div class="badge badge-info badge-pill">2</div>
                                        </div>
                                        <div class="d-flex flex-wrap pt-2">
                                            <div class="mr-4 mb-lg-2 mb-xl-0">
                                                <p>Time On Site</p>
                                                <h4 class="font-weight-bold mb-0">77.15 %</h4>
                                            </div>
                                            <div>
                                                <p>Page Views</p>
                                                <h4 class="font-weight-bold mb-0">14.15 %</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas height="150" id="activity-chart"></canvas>
                                </div>
                            </div>
                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <p class="card-title">Server Status 247</p>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <p class="text-muted">Last update: 2 Hours ago</p>
                                            <div class="d-flex align-items-center flex-wrap server-status-legend mt-3 mb-3 mb-md-0">
                                                <div class="item mr-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="color-bullet"></div>
                                                        <h5 class="font-weight-bold mb-0">128GB</h5>
                                                    </div>
                                                    <p class="mb-">Total Usage</p>
                                                </div>
                                                <div class="item mr-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="color-bullet"></div>
                                                        <h5 class="font-weight-bold mb-0">92%</h5>
                                                    </div>
                                                    <p class="mb-">Memory Usage</p>
                                                </div>
                                                <div class="item mr-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="color-bullet"></div>
                                                        <h5 class="font-weight-bold mb-0">16%</h5>
                                                    </div>
                                                    <p class="mb-">Disk Usage</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas height="170" id="status-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Clients</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                User
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Progress
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Deadline
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face1.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                Herman muthombi
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face2.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                Messsy wambui
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $245.30
                                            </td>
                                            <td>
                                                July 1, 2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face3.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                John Mbuthia
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $138.00
                                            </td>
                                            <td>
                                                Apr 12, 2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face4.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                Peter Macguire
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face5.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                Edward wairimu
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 160.25
                                            </td>
                                            <td>
                                                May 03, 2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face6.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                John kiarie
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 123.21
                                            </td>
                                            <td>
                                                April 05, 2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="images/faces/face7.jpg" alt="image"/>
                                            </td>
                                            <td>
                                                Henry mukendi
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 150.00
                                            </td>
                                            <td>
                                                June 16, 2021
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row end -->
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:./partials/_footer.html -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="/Admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="/Admin/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/Admin/js/off-canvas.js"></script>
<script src="/Admin/js/hoverable-collapse.js"></script>
<script src="/Admin/js/template.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="/Admin/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>