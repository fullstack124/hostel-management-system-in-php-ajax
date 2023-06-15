
<?php 
include "../includes/header.php";
include "../connection/config.php";
?>
  <!-- Wrapper -->
  <div id="wrapper" class="fixed-sidebar fixed-navbar">
    <!-- available options: fixed-sidebar, fixed-navbar, fixed-footer, mini-sidebar -->

    <?php
    include "../includes/admin_sidebar.php";
    ?>

    <!-- Main -->
    <div id="main">

      <!-- Main header -->
      <div id="main-header">
        <nav class="navbar navbar-expand navbar-light bg-white gap-4">
          <button type="button" class="btn btn-light d-none d-xl-flex" data-toggle="mini-sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
          </button>
          <button type="button" class="btn btn-light d-flex d-xl-none me-3" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
          </button>
          <ul class="navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle no-caret" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-end p-3">
                <form><input type="text" class="form-control border-0 shadow-none px-3" placeholder="Search..." autofocus></form>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header d-flex justify-content-between">
                  Recently searched:
                  <a href="javascript:void(0)" class="text-muted ms-5">Clear</a>
                </h6>
                <div class="max-h-[300px] overflow-auto">
                  <a class="dropdown-item" href="javascript:void(0)">Calendar</a>
                  <a class="dropdown-item" href="javascript:void(0)">Chat</a>
                  <a class="dropdown-item" href="javascript:void(0)">Email</a>
                  <a class="dropdown-item" href="javascript:void(0)">File manager</a>
                  <a class="dropdown-item" href="javascript:void(0)">Forum</a>
                  <a class="dropdown-item" href="javascript:void(0)">Invoice</a>
                  <a class="dropdown-item" href="javascript:void(0)">Photos</a>
                  <a class="dropdown-item" href="javascript:void(0)">Pricing</a>
                  <a class="dropdown-item" href="javascript:void(0)">Todo</a>
                  <a class="dropdown-item" href="javascript:void(0)">Blog</a>
                  <a class="dropdown-item" href="javascript:void(0)">Settings</a>
                  <a class="dropdown-item" href="javascript:void(0)">Profile</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle no-caret" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="position-relative">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                  </svg>
                  <span class="badge bg-danger position-absolute top-0 start-100 translate-middle p-1">
                    <span class="visually-hidden">unread notifications</span>
                  </span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <h6 class="dropdown-header d-flex justify-content-between">
                  5 New notifications
                  <a href="javascript:void(0)" class="text-muted ms-5">Clear</a>
                </h6>
                <div class="dropdown-divider"></div>
                <div class="max-h-[300px] overflow-auto">
                  <a class="dropdown-item d-flex align-items-center gap-3 py-2" href="javascript:void(0)">
                    <svg class="text-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <div class="vstack">
                      <p class="mb-0">New customer registered</p>
                      <small class="text-muted">5 min ago</small>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center gap-3 py-2" href="javascript:void(0)">
                    <svg class="text-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <div class="vstack">
                      <p class="mb-0">New order received</p>
                      <small class="text-muted">11 min ago</small>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center gap-3 py-2" href="javascript:void(0)">
                    <svg class="text-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                    <div class="vstack">
                      <p class="mb-0">Plugin updates available <span class="badge rounded-pill ms-1 bg-secondary align-bottom">3</span></p>
                      <small class="text-muted">30 min ago</small>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center gap-3 py-2" href="javascript:void(0)">
                    <svg class="text-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <div class="vstack">
                      <p class="mb-0">Download completed</p>
                      <small class="text-muted">35 min ago</small>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center gap-3 py-2" href="javascript:void(0)">
                    <svg class="text-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    <div class="vstack">
                      <p class="mb-0">Weekly usage report</p>
                      <small class="text-muted">40 min ago</small>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item vr mx-3"></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle no-caret py-0 pe-0" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/user/user1.svg" width="32" alt="User" class="rounded-circle" loading="lazy">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="javascript:void(0)">Profile</a></li>
                <li><a class="dropdown-item" href="user-settings.html">Settings</a></li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li><a class="dropdown-item" href="signin.html">Sign out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /Main header -->

      <!-- Main body -->
      <div id="main-body">

        <div class="row g-4">

          <!-- Campaign Sent -->
          <div class="col-lg-6 col-xl-3">
            <div class="card">
              <div class="card-body p-md-4">
                <h6 class="mb-3 text-muted" title="Campaign Sent">Campaign Sent</h6>
                <div class="hstack gap-5">
                  <div>
                    <h4 class="mb-3">9,184</h4>
                    <p class="mb-0 text-nowrap text-success">
                      <svg class="align-top" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                      </svg>
                      3.27%
                    </p>
                  </div>
                  <div id="campaign-sent-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Campaign Sent -->

          <!-- New leads -->
          <div class="col-lg-6 col-xl-3">
            <div class="card">
              <div class="card-body p-md-4">
                <h6 class="mb-3 text-muted" title="Campaign Sent">New leads</h6>
                <div class="hstack gap-5">
                  <div>
                    <h4 class="mb-3">3,254</h4>
                    <p class="mb-0 text-nowrap text-danger">
                      <svg class="align-top" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                      5.38%
                    </p>
                  </div>
                  <div id="new-leads-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- /New leads -->

          <!-- Deals -->
          <div class="col-lg-6 col-xl-3">
            <div class="card">
              <div class="card-body p-md-4">
                <h6 class="mb-3 text-muted" title="Campaign Sent">Deals</h6>
                <div class="hstack gap-5">
                  <div>
                    <h4 class="mb-3">861</h4>
                    <p class="mb-0 text-nowrap text-success">
                      <svg class="align-top" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                      </svg>
                      4.87%
                    </p>
                  </div>
                  <div id="deals-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Deals -->

          <!-- Booked Revenue -->
          <div class="col-lg-6 col-xl-3">
            <div class="card">
              <div class="card-body p-md-4">
                <h6 class="mb-3 text-muted" title="Campaign Sent">Booked Revenue</h6>
                <div class="hstack gap-5">
                  <div>
                    <h4 class="mb-3">253k</h4>
                    <p class="mb-0 text-nowrap text-success">
                      <svg class="align-top" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                      </svg>
                      11.7%
                    </p>
                  </div>
                  <div id="booked-revenue-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Booked Revenue -->

          <!-- Campaigns -->
          <div class="col-lg-5">
            <div class="card h-100">
              <div class="card-body p-md-4">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="card-title">Campaigns</h5>
                  <div class="dropdown">
                    <button class="btn text-secondary p-0 dropdown-toggle no-caret" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><button class="dropdown-item" type="button">Today</button></li>
                      <li><button class="dropdown-item" type="button">Yesterday</button></li>
                      <li><button class="dropdown-item" type="button">Last Week</button></li>
                      <li><button class="dropdown-item" type="button">Last Month</button></li>
                    </ul>
                  </div>
                </div>
                <div id="dash-campaigns-chart"></div>
                <div class="row text-center mt-2">
                  <div class="col-md-4 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    <h4 class="mt-3">6,510</h4>
                    <div class="d-inline-flex align-items-center gap-2">
                      <svg class="text-warning" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                      Total Sent
                    </div>
                  </div>
                  <div class="col-md-4 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                    </svg>
                    <h4 class="mt-3">3,487</h4>
                    <div class="d-inline-flex align-items-center gap-2">
                      <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                      Reached
                    </div>
                  </div>
                  <div class="col-md-4 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                    </svg>
                    <h4 class="mt-3">1,568</h4>
                    <div class="d-inline-flex align-items-center gap-2">
                      <svg class="text-success" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                      Opened
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Campaigns -->

          <!-- Revenue -->
          <div class="col-lg-7">
            <div class="card h-100">
              <div class="card-body p-md-4">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="card-title">Revenue</h5>
                  <div class="dropdown">
                    <button class="btn text-secondary p-0 dropdown-toggle no-caret" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><button class="dropdown-item" type="button">Today</button></li>
                      <li><button class="dropdown-item" type="button">Yesterday</button></li>
                      <li><button class="dropdown-item" type="button">Last Week</button></li>
                      <li><button class="dropdown-item" type="button">Last Month</button></li>
                    </ul>
                  </div>
                </div>
                <div class="bg-light mt-5 mb-3">
                  <div class="row g-4 text-center">
                    <div class="col-md-6">
                      <p class="text-muted small mb-2">Current Month</p>
                      <h3 class="mb-4">$42,025</h3>
                    </div>
                    <div class="col-md-6">
                      <p class="text-muted small mb-2">Previous Month</p>
                      <h3 class="mb-4">$74,651</h3>
                    </div>
                  </div>
                </div>
                <div id="dash-revenue-chart"></div>
              </div>
            </div>
          </div>
          <!-- /Revenue -->

          <!-- Top performing -->
          <div class="col-lg-7">
            <div class="card h-100">
              <div class="card-body p-md-4">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="card-title">Top Performing</h5>
                  <div class="dropdown">
                    <button class="btn text-secondary p-0 dropdown-toggle no-caret" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><button class="dropdown-item" type="button">Settings</button></li>
                      <li><button class="dropdown-item" type="button">Action</button></li>
                    </ul>
                  </div>
                </div>
                <div class="table-responsive mt-3">
                  <table class="table table-striped table-sm mb-0">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Leads</th>
                        <th>Deals</th>
                        <th>Tasks</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <h6 class="mb-1">Jeremy Young</h6>
                          <span class="text-muted text-nowrap">Senior Sales Executive</span>
                        </td>
                        <td>187</td>
                        <td>154</td>
                        <td>49</td>
                        <td>
                          <a href="javascript:void(0)" class="link-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h6 class="mb-1">Thomas Krueger</h6>
                          <span class="text-muted text-nowrap">Senior Sales Executive</span>
                        </td>
                        <td>235</td>
                        <td>127</td>
                        <td>83</td>
                        <td>
                          <a href="javascript:void(0)" class="link-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h6 class="mb-1">Pete Burdine</h6>
                          <span class="text-muted text-nowrap">Senior Sales Executive</span>
                        </td>
                        <td>365</td>
                        <td>148</td>
                        <td>62</td>
                        <td>
                          <a href="javascript:void(0)" class="link-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h6 class="mb-1">Mary Nelson</h6>
                          <span class="text-muted text-nowrap">Senior Sales Executive</span>
                        </td>
                        <td>753</td>
                        <td>159</td>
                        <td>258</td>
                        <td>
                          <a href="javascript:void(0)" class="link-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h6 class="mb-1">Kevin Grove</h6>
                          <span class="text-muted text-nowrap">Senior Sales Executive</span>
                        </td>
                        <td>458</td>
                        <td>126</td>
                        <td>73</td>
                        <td>
                          <a href="javascript:void(0)" class="link-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /Top performing -->

          <!-- Recent leads -->
          <div class="col-lg-5">
            <div class="card h-100">
              <div class="card-body p-md-4">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="card-title">Recent Leads</h5>
                  <div class="dropdown">
                    <button class="btn text-secondary p-0 dropdown-toggle no-caret" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><button class="dropdown-item" type="button">Settings</button></li>
                      <li><button class="dropdown-item" type="button">Action</button></li>
                    </ul>
                  </div>
                </div>
                <div class="table-responsive mt-3">
                  <table class="table table-borderless table-sm mb-0">
                    <tbody>
                      <tr>
                        <td><img src="assets/img/user/user5.svg" alt="avatar" class="rounded-circle" width="40" height="40"></td>
                        <td>
                          <h6 class="mb-1">Risa Pearson</h6>
                          <span class="text-secondary">richard.john@mail.com</span>
                        </td>
                        <td><span class="badge bg-warning text-dark">Cold lead</span></td>
                      </tr>
                      <tr>
                        <td><img src="assets/img/user/user6.svg" alt="avatar" class="rounded-circle" width="40" height="40"></td>
                        <td>
                          <h6 class="mb-1">Margaret D. Evans</h6>
                          <span class="text-secondary">margaret@rhyta.com</span>
                        </td>
                        <td><span class="badge bg-danger">Lost lead</span></td>
                      </tr>
                      <tr>
                        <td><img src="assets/img/user/user7.svg" alt="avatar" class="rounded-circle" width="40" height="40"></td>
                        <td>
                          <h6 class="mb-1">Bryan J. Luellen</h6>
                          <span class="text-secondary">bryuellen@dayrep.com</span>
                        </td>
                        <td><span class="badge bg-success">Won lead</span></td>
                      </tr>
                      <tr>
                        <td><img src="assets/img/user/user8.svg" alt="avatar" class="rounded-circle" width="40" height="40"></td>
                        <td>
                          <h6 class="mb-1">Timothy Kauper</h6>
                          <span class="text-secondary">thykauper@rhyta.com</span>
                        </td>
                        <td><span class="badge bg-warning text-dark">Cold lead</span></td>
                      </tr>
                      <tr>
                        <td><img src="assets/img/user/user9.svg" alt="avatar" class="rounded-circle" width="40" height="40"></td>
                        <td>
                          <h6 class="mb-1">Zara Raws</h6>
                          <span class="text-secondary">austin@dayrep.com</span>
                        </td>
                        <td><span class="badge bg-success">Won lead</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /Recent leads -->

        </div>
      </div>
      <!-- /Main body -->

      <!-- Main footer -->
      <div id="main-footer">
        <nav class="navbar navbar-expand navbar-light bg-white small shadow-sm">
          <span class="navbar-text">
            2021 © Mimity admin
          </span>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">Help</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /Main footer -->

    </div>
    <!-- /Main -->

  </div>
  <!-- /Wrapper -->
<?php 
include "../includes/footer.php";
?>