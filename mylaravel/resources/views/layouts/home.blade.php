@extends('layouts.default')

@section('content')
<div class="home-page">
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                  <i class="bi bi-list"></i>
                </a>
              </li>
              <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
              <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
            </ul>
            <!--end::Start Navbar Links-->
            <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto">
              <!--begin::Navbar Search-->
              <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                  <i class="bi bi-search"></i>
                </a>
              </li>
              <!--end::Navbar Search-->
              <!--begin::Messages Dropdown Menu-->
              <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                  <i class="bi bi-chat-text"></i>
                  <span class="navbar-badge badge text-bg-danger">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                  <a href="#" class="dropdown-item">
                    <!--begin::Message-->
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="../../dist/assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3">
                      </div>
                      <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                          Brad Diesel
                          <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                        </h3>
                        <p class="fs-7">Call me whenever you can...</p>
                        <p class="fs-7 text-secondary">
                          <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                      </div>
                    </div>
                    <!--end::Message-->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <!--begin::Message-->
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="../../dist/assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3">
                      </div>
                      <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                          John Pierce
                          <span class="float-end fs-7 text-secondary">
                            <i class="bi bi-star-fill"></i>
                          </span>
                        </h3>
                        <p class="fs-7">I got your message bro</p>
                        <p class="fs-7 text-secondary">
                          <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                      </div>
                    </div>
                    <!--end::Message-->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <!--begin::Message-->
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="../../dist/assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3">
                      </div>
                      <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                          Nora Silvester
                          <span class="float-end fs-7 text-warning">
                            <i class="bi bi-star-fill"></i>
                          </span>
                        </h3>
                        <p class="fs-7">The subject goes here</p>
                        <p class="fs-7 text-secondary">
                          <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                      </div>
                    </div>
                    <!--end::Message-->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
              </li>
              <!--end::Messages Dropdown Menu-->
              <!--begin::Notifications Dropdown Menu-->
              <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                  <i class="bi bi-bell-fill"></i>
                  <span class="navbar-badge badge text-bg-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                  <span class="dropdown-item dropdown-header">15 Notifications</span>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="bi bi-envelope me-2"></i> 4 new messages
                    <span class="float-end text-secondary fs-7">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="bi bi-people-fill me-2"></i> 8 friend requests
                    <span class="float-end text-secondary fs-7">12 hours</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                    <span class="float-end text-secondary fs-7">2 days</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                </div>
              </li>
              <!--end::Notifications Dropdown Menu-->
              <!--begin::Fullscreen Toggle-->
              <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                  <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                  <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
              </li>
              <!--end::Fullscreen Toggle-->
              <!--begin::User Menu Dropdown-->
              <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <img src="../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image">
                  <span class="d-none d-md-inline">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                  <!--begin::User Image-->
                  <li class="user-header text-bg-primary">
                    <img src="../../dist/assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2023</small>
                    </p>
                  </li>
                  <!--end::User Image-->
                  <!--begin::Menu Body-->
                  <li class="user-body">
                    <!--begin::Row-->
                    <div class="row">
                      <div class="col-4 text-center"><a href="#">Followers</a></div>
                      <div class="col-4 text-center"><a href="#">Sales</a></div>
                      <div class="col-4 text-center"><a href="#">Friends</a></div>
                    </div>
                    <!--end::Row-->
                  </li>
                  <!--end::Menu Body-->
                  <!--begin::Menu Footer-->
                  <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                    <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                  </li>
                  <!--end::Menu Footer-->
                </ul>
              </li>
              <!--end::User Menu Dropdown-->
            </ul>
            <!--end::End Navbar Links-->
          </div>
          <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
          <!--begin::Sidebar Brand-->
          <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="./index.html" class="brand-link">
              <!--begin::Brand Image-->
              <img src="../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
              <!--end::Brand Image-->
              <!--begin::Brand Text-->
              <span class="brand-text fw-light">AdminLTE 4</span>
              <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
          </div>
          <!--end::Sidebar Brand-->
          <!--begin::Sidebar Wrapper-->
          <div class="sidebar-wrapper" data-overlayscrollbars="host"><div class="os-size-observer"><div class="os-size-observer-listener"></div></div><div class="" data-overlayscrollbars-viewport="scrollbarHidden overflowXHidden overflowYScroll" tabindex="-1" style="margin-right: -16px; margin-bottom: -16px; margin-left: 0px; top: -8px; right: auto; left: -8px; width: calc(100% + 16px); padding: 8px;">
            <nav class="mt-2">
              <!--begin::Sidebar Menu-->
              <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                      Dashboard
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Dashboard v1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link active">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Dashboard v2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index3.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Dashboard v3</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="./generate/theme.html" class="nav-link">
                    <i class="nav-icon bi bi-palette"></i>
                    <p>Theme Generate</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                      Widgets
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./widgets/small-box.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Small Box</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./widgets/info-box.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>info Box</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./widgets/cards.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Cards</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>
                      Layout Options
                      <span class="nav-badge badge text-bg-secondary me-3">6</span>
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./layout/unfixed-sidebar.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Default Sidebar</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./layout/fixed-sidebar.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Fixed Sidebar</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./layout/layout-custom-area.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Layout <small>+ Custom Area </small></p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./layout/sidebar-mini.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Sidebar Mini</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./layout/collapsed-sidebar.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Sidebar Mini <small>+ Collapsed</small></p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./layout/logo-switch.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Sidebar Mini <small>+ Logo Switch</small></p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./layout/layout-rtl.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Layout RTL</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-tree-fill"></i>
                    <p>
                      UI Elements
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./UI/general.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>General</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./UI/icons.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Icons</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./UI/timeline.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Timeline</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-pencil-square"></i>
                    <p>
                      Forms
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./forms/general.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>General Elements</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-table"></i>
                    <p>
                      Tables
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./tables/simple.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Simple Tables</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-arrow-in-right"></i>
                    <p>
                      Auth
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                          Version 1
                          <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="./examples/login.html" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Login</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="./examples/register.html" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Register</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                          Version 2
                          <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="./examples/login-v2.html" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Login</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="./examples/register-v2.html" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Register</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="./examples/lockscreen.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Lockscreen</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header">DOCUMENTATIONS</li>
                <li class="nav-item">
                  <a href="./docs/introduction.html" class="nav-link">
                    <i class="nav-icon bi bi-download"></i>
                    <p>Installation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/layout.html" class="nav-link">
                    <i class="nav-icon bi bi-grip-horizontal"></i>
                    <p>Layout</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/color-mode.html" class="nav-link">
                    <i class="nav-icon bi bi-star-half"></i>
                    <p>Color Mode</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-ui-checks-grid"></i>
                    <p>
                      Components
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./docs/components/main-header.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Main Header</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./docs/components/main-sidebar.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Main Sidebar</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-filetype-js"></i>
                    <p>
                      Javascript
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./docs/javascript/treeview.html" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Treeview</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="./docs/browser-support.html" class="nav-link">
                    <i class="nav-icon bi bi-browser-edge"></i>
                    <p>Browser Support</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/how-to-contribute.html" class="nav-link">
                    <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
                    <p>How To Contribute</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/faq.html" class="nav-link">
                    <i class="nav-icon bi bi-question-circle-fill"></i>
                    <p>FAQ</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./docs/license.html" class="nav-link">
                    <i class="nav-icon bi bi-patch-check-fill"></i>
                    <p>License</p>
                  </a>
                </li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>Level 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>
                      Level 1
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Level 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>
                          Level 2
                          <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-record-circle-fill"></i>
                            <p>Level 3</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-record-circle-fill"></i>
                            <p>Level 3</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-record-circle-fill"></i>
                            <p>Level 3</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Level 2</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>Level 1</p>
                  </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle text-danger"></i>
                    <p class="text">Important</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle text-warning"></i>
                    <p>Warning</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle text-info"></i>
                    <p>Informational</p>
                  </a>
                </li>
              </ul>
              <!--end::Sidebar Menu-->
            </nav>
          </div><div class="os-scrollbar os-scrollbar-horizontal os-theme-light os-scrollbar-auto-hide os-scrollbar-auto-hide-hidden os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-cornerless os-scrollbar-unusable" style="--os-viewport-percent: 1; --os-scroll-direction: 0;"><div class="os-scrollbar-track"><div class="os-scrollbar-handle"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-theme-light os-scrollbar-auto-hide os-scrollbar-auto-hide-hidden os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-visible os-scrollbar-cornerless" style="--os-viewport-percent: 0.6854; --os-scroll-direction: 0;"><div class="os-scrollbar-track"><div class="os-scrollbar-handle"></div></div></div></div>
          <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
          <!--begin::App Content Header-->
          <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
              <!--begin::Row-->
              <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Dashboard v2</h3></div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard v2</li>
                  </ol>
                </div>
              </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
              <!-- Info boxes -->
              <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-primary shadow-sm">
                      <i class="bi bi-gear-fill"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">CPU Traffic</span>
                      <span class="info-box-number">
                        10
                        <small>%</small>
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-danger shadow-sm">
                      <i class="bi bi-hand-thumbs-up-fill"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Likes</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- fix for small devices only -->
                <!-- <div class="clearfix hidden-md-up"></div> -->
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm">
                      <i class="bi bi-cart-fill"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Sales</span>
                      <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-warning shadow-sm">
                      <i class="bi bi-people-fill"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">New Members</span>
                      <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!--begin::Row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Monthly Recap Report</h5>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-tool dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-wrench"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" role="menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item"> Something else here </a>
                            <a class="dropdown-divider"></a>
                            <a href="#" class="dropdown-item">Separated link</a>
                          </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                          <i class="bi bi-x-lg"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <!--begin::Row-->
                      <div class="row">
                        <div class="col-md-8">
                          <p class="text-center">
                            <strong>Sales: 1 Jan, 2023 - 30 Jul, 2023</strong>
                          </p>
                          <div id="sales-chart" style="min-height: 195px;"><div id="apexcharts0x8bwkblk" class="apexcharts-canvas apexcharts0x8bwkblk apexcharts-theme-light" style="width: 310px; height: 180px;"><svg id="SvgjsSvg1463" width="310" height="180" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1472" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1530" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG1531" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1533" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1534">100</tspan><title>100</title></text><text id="SvgjsText1536" font-family="Helvetica, Arial, sans-serif" x="20" y="55.14" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1537">80</tspan><title>80</title></text><text id="SvgjsText1539" font-family="Helvetica, Arial, sans-serif" x="20" y="78.78" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1540">60</tspan><title>60</title></text><text id="SvgjsText1542" font-family="Helvetica, Arial, sans-serif" x="20" y="102.42" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1543">40</tspan><title>40</title></text><text id="SvgjsText1545" font-family="Helvetica, Arial, sans-serif" x="20" y="126.06" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1546">20</tspan><title>20</title></text><text id="SvgjsText1548" font-family="Helvetica, Arial, sans-serif" x="20" y="149.7" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1549">0</tspan><title>0</title></text></g></g><g id="SvgjsG1465" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)"><defs id="SvgjsDefs1464"><clipPath id="gridRectMask0x8bwkblk"><rect id="SvgjsRect1477" width="262.640625" height="122.19999999999999" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask0x8bwkblk"></clipPath><clipPath id="nonForecastMask0x8bwkblk"></clipPath><clipPath id="gridRectMarkerMask0x8bwkblk"><rect id="SvgjsRect1478" width="258.640625" height="122.19999999999999" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1483" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1484" stop-opacity="0.65" stop-color="rgba(13,110,253,0.65)" offset="0"></stop><stop id="SvgjsStop1485" stop-opacity="0.5" stop-color="rgba(134,183,254,0.5)" offset="1"></stop><stop id="SvgjsStop1486" stop-opacity="0.5" stop-color="rgba(134,183,254,0.5)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1492" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1493" stop-opacity="0.65" stop-color="rgba(32,201,151,0.65)" offset="0"></stop><stop id="SvgjsStop1494" stop-opacity="0.5" stop-color="rgba(144,228,203,0.5)" offset="1"></stop><stop id="SvgjsStop1495" stop-opacity="0.5" stop-color="rgba(144,228,203,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1473" x1="0" y1="0" x2="0" y2="68.758837890625" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="68.758837890625" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1502" x1="0" y1="119.19999999999999" x2="0" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1503" x1="83.00440262430939" y1="119.19999999999999" x2="83.00440262430939" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1504" x1="168.8225138121547" y1="119.19999999999999" x2="168.8225138121547" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1498" class="apexcharts-grid"><g id="SvgjsG1499" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1506" x1="0" y1="23.639999999999997" x2="254.640625" y2="23.639999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1507" x1="0" y1="47.279999999999994" x2="254.640625" y2="47.279999999999994" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1508" x1="0" y1="70.91999999999999" x2="254.640625" y2="70.91999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1509" x1="0" y1="94.55999999999999" x2="254.640625" y2="94.55999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1500" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1512" x1="0" y1="118.19999999999999" x2="254.640625" y2="118.19999999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1511" x1="0" y1="1" x2="0" y2="118.19999999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1501" class="apexcharts-grid-borders"><line id="SvgjsLine1505" x1="0" y1="0" x2="254.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1510" x1="0" y1="118.19999999999999" x2="254.640625" y2="118.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1529" x1="0" y1="119.19999999999999" x2="254.640625" y2="119.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1479" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1480" class="apexcharts-series" seriesName="DigitalxGoods" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1487" d="M 0 118.19999999999999 L 0 85.10399999999998C 15.26436895718232 85.10399999999998 28.348113777624313 61.464 43.61248273480663 61.464C 57.3996546961326 61.464 69.21723066298343 70.91999999999999 83.00440262430939 70.91999999999999C 98.2687715814917 70.91999999999999 111.35251640193371 95.74199999999999 126.61688535911603 95.74199999999999C 141.38885531767957 95.74199999999999 154.05054385359117 16.548000000000002 168.8225138121547 16.548000000000002C 184.08688276933702 16.548000000000002 197.170627589779 86.286 212.43499654696132 86.286C 227.20696650552486 86.286 239.86865504143645 11.820000000000007 254.640625 11.820000000000007C 254.640625 11.820000000000007 254.640625 11.820000000000007 254.640625 118.19999999999999M 254.640625 11.820000000000007z" fill="url(#SvgjsLinearGradient1483)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0x8bwkblk)" pathTo="M 0 118.19999999999999 L 0 85.10399999999998C 15.26436895718232 85.10399999999998 28.348113777624313 61.464 43.61248273480663 61.464C 57.3996546961326 61.464 69.21723066298343 70.91999999999999 83.00440262430939 70.91999999999999C 98.2687715814917 70.91999999999999 111.35251640193371 95.74199999999999 126.61688535911603 95.74199999999999C 141.38885531767957 95.74199999999999 154.05054385359117 16.548000000000002 168.8225138121547 16.548000000000002C 184.08688276933702 16.548000000000002 197.170627589779 86.286 212.43499654696132 86.286C 227.20696650552486 86.286 239.86865504143645 11.820000000000007 254.640625 11.820000000000007C 254.640625 11.820000000000007 254.640625 11.820000000000007 254.640625 118.19999999999999M 254.640625 11.820000000000007z" pathFrom="M -1 118.19999999999999 L -1 118.19999999999999 L 43.61248273480663 118.19999999999999 L 83.00440262430939 118.19999999999999 L 126.61688535911603 118.19999999999999 L 168.8225138121547 118.19999999999999 L 212.43499654696132 118.19999999999999 L 254.640625 118.19999999999999"></path><path id="SvgjsPath1488" d="M 0 85.10399999999998C 15.26436895718232 85.10399999999998 28.348113777624313 61.464 43.61248273480663 61.464C 57.3996546961326 61.464 69.21723066298343 70.91999999999999 83.00440262430939 70.91999999999999C 98.2687715814917 70.91999999999999 111.35251640193371 95.74199999999999 126.61688535911603 95.74199999999999C 141.38885531767957 95.74199999999999 154.05054385359117 16.548000000000002 168.8225138121547 16.548000000000002C 184.08688276933702 16.548000000000002 197.170627589779 86.286 212.43499654696132 86.286C 227.20696650552486 86.286 239.86865504143645 11.820000000000007 254.640625 11.820000000000007" fill="none" fill-opacity="1" stroke="#0d6efd" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0x8bwkblk)" pathTo="M 0 85.10399999999998C 15.26436895718232 85.10399999999998 28.348113777624313 61.464 43.61248273480663 61.464C 57.3996546961326 61.464 69.21723066298343 70.91999999999999 83.00440262430939 70.91999999999999C 98.2687715814917 70.91999999999999 111.35251640193371 95.74199999999999 126.61688535911603 95.74199999999999C 141.38885531767957 95.74199999999999 154.05054385359117 16.548000000000002 168.8225138121547 16.548000000000002C 184.08688276933702 16.548000000000002 197.170627589779 86.286 212.43499654696132 86.286C 227.20696650552486 86.286 239.86865504143645 11.820000000000007 254.640625 11.820000000000007" pathFrom="M -1 118.19999999999999 L -1 118.19999999999999 L 43.61248273480663 118.19999999999999 L 83.00440262430939 118.19999999999999 L 126.61688535911603 118.19999999999999 L 168.8225138121547 118.19999999999999 L 212.43499654696132 118.19999999999999 L 254.640625 118.19999999999999" fill-rule="evenodd"></path><g id="SvgjsG1481" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1553" r="0" cx="0" cy="0" class="apexcharts-marker w1qh0tv22f no-pointer-events" stroke="#ffffff" fill="#0d6efd" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1489" class="apexcharts-series" seriesName="Electronics" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1496" d="M 0 118.19999999999999 L 0 41.370000000000005C 15.26436895718232 41.370000000000005 28.348113777624313 48.462 43.61248273480663 48.462C 57.3996546961326 48.462 69.21723066298343 23.64 83.00440262430939 23.64C 98.2687715814917 23.64 111.35251640193371 22.458 126.61688535911603 22.458C 141.38885531767957 22.458 154.05054385359117 52.007999999999996 168.8225138121547 52.007999999999996C 184.08688276933702 52.007999999999996 197.170627589779 53.19 212.43499654696132 53.19C 227.20696650552486 53.19 239.86865504143645 70.91999999999999 254.640625 70.91999999999999C 254.640625 70.91999999999999 254.640625 70.91999999999999 254.640625 118.19999999999999M 254.640625 70.91999999999999z" fill="url(#SvgjsLinearGradient1492)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask0x8bwkblk)" pathTo="M 0 118.19999999999999 L 0 41.370000000000005C 15.26436895718232 41.370000000000005 28.348113777624313 48.462 43.61248273480663 48.462C 57.3996546961326 48.462 69.21723066298343 23.64 83.00440262430939 23.64C 98.2687715814917 23.64 111.35251640193371 22.458 126.61688535911603 22.458C 141.38885531767957 22.458 154.05054385359117 52.007999999999996 168.8225138121547 52.007999999999996C 184.08688276933702 52.007999999999996 197.170627589779 53.19 212.43499654696132 53.19C 227.20696650552486 53.19 239.86865504143645 70.91999999999999 254.640625 70.91999999999999C 254.640625 70.91999999999999 254.640625 70.91999999999999 254.640625 118.19999999999999M 254.640625 70.91999999999999z" pathFrom="M -1 118.19999999999999 L -1 118.19999999999999 L 43.61248273480663 118.19999999999999 L 83.00440262430939 118.19999999999999 L 126.61688535911603 118.19999999999999 L 168.8225138121547 118.19999999999999 L 212.43499654696132 118.19999999999999 L 254.640625 118.19999999999999"></path><path id="SvgjsPath1497" d="M 0 41.370000000000005C 15.26436895718232 41.370000000000005 28.348113777624313 48.462 43.61248273480663 48.462C 57.3996546961326 48.462 69.21723066298343 23.64 83.00440262430939 23.64C 98.2687715814917 23.64 111.35251640193371 22.458 126.61688535911603 22.458C 141.38885531767957 22.458 154.05054385359117 52.007999999999996 168.8225138121547 52.007999999999996C 184.08688276933702 52.007999999999996 197.170627589779 53.19 212.43499654696132 53.19C 227.20696650552486 53.19 239.86865504143645 70.91999999999999 254.640625 70.91999999999999" fill="none" fill-opacity="1" stroke="#20c997" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask0x8bwkblk)" pathTo="M 0 41.370000000000005C 15.26436895718232 41.370000000000005 28.348113777624313 48.462 43.61248273480663 48.462C 57.3996546961326 48.462 69.21723066298343 23.64 83.00440262430939 23.64C 98.2687715814917 23.64 111.35251640193371 22.458 126.61688535911603 22.458C 141.38885531767957 22.458 154.05054385359117 52.007999999999996 168.8225138121547 52.007999999999996C 184.08688276933702 52.007999999999996 197.170627589779 53.19 212.43499654696132 53.19C 227.20696650552486 53.19 239.86865504143645 70.91999999999999 254.640625 70.91999999999999" pathFrom="M -1 118.19999999999999 L -1 118.19999999999999 L 43.61248273480663 118.19999999999999 L 83.00440262430939 118.19999999999999 L 126.61688535911603 118.19999999999999 L 168.8225138121547 118.19999999999999 L 212.43499654696132 118.19999999999999 L 254.640625 118.19999999999999" fill-rule="evenodd"></path><g id="SvgjsG1490" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1554" r="0" cx="0" cy="0" class="apexcharts-marker wizqu7blr no-pointer-events" stroke="#ffffff" fill="#20c997" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1482" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1491" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1513" x1="0" y1="0" x2="254.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1514" x1="0" y1="0" x2="254.640625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1515" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1516" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1518" font-family="Helvetica, Arial, sans-serif" x="0" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1519">Jan '23</tspan><title>Jan '23</title></text><text id="SvgjsText1521" font-family="Helvetica, Arial, sans-serif" x="83.00440262430939" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1522">Mar '23</tspan><title>Mar '23</title></text><text id="SvgjsText1524" font-family="Helvetica, Arial, sans-serif" x="168.8225138121547" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1525">May '23</tspan><title>May '23</title></text><text id="SvgjsText1527" font-family="Helvetica, Arial, sans-serif" x="254.64062500000003" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1528"></tspan><title></title></text></g></g><g id="SvgjsG1550" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1551" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1552" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1555" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1556" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1466" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 90px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(13, 110, 253);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 201, 151);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                          <p class="text-center"><strong>Goal Completion</strong></p>
                          <div class="progress-group">
                            Add Products to Cart
                            <span class="float-end"><b>160</b>/200</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar text-bg-primary" style="width: 80%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            Complete Purchase
                            <span class="float-end"><b>310</b>/400</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar text-bg-danger" style="width: 75%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text">Visit Premium Page</span>
                            <span class="float-end"><b>480</b>/800</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar text-bg-success" style="width: 60%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            Send Inquiries
                            <span class="float-end"><b>250</b>/500</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar text-bg-warning" style="width: 50%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                      <!--begin::Row-->
                      <div class="row">
                        <div class="col-md-3 col-6">
                          <div class="text-center border-end">
                            <span class="text-success">
                              <i class="bi bi-caret-up-fill"></i> 17%
                            </span>
                            <h5 class="fw-bold mb-0">$35,210.43</h5>
                            <span class="text-uppercase">TOTAL REVENUE</span>
                          </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-6">
                          <div class="text-center border-end">
                            <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 0% </span>
                            <h5 class="fw-bold mb-0">$10,390.90</h5>
                            <span class="text-uppercase">TOTAL COST</span>
                          </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-6">
                          <div class="text-center border-end">
                            <span class="text-success">
                              <i class="bi bi-caret-up-fill"></i> 20%
                            </span>
                            <h5 class="fw-bold mb-0">$24,813.53</h5>
                            <span class="text-uppercase">TOTAL PROFIT</span>
                          </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-6">
                          <div class="text-center">
                            <span class="text-danger">
                              <i class="bi bi-caret-down-fill"></i> 18%
                            </span>
                            <h5 class="fw-bold mb-0">1200</h5>
                            <span class="text-uppercase">GOAL COMPLETIONS</span>
                          </div>
                        </div>
                      </div>
                      <!--end::Row-->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!--end::Row-->
              <!--begin::Row-->
              <div class="row">
                <!-- Start col -->
                <div class="col-md-8">
                  <!--begin::Row-->
                  <div class="row g-4 mb-4">
                    <div class="col-md-6">
                      <!-- DIRECT CHAT -->
                      <div class="card direct-chat direct-chat-warning">
                        <div class="card-header">
                          <h3 class="card-title">Direct Chat</h3>
                          <div class="card-tools">
                            <span title="3 New Messages" class="badge text-bg-warning"> 3 </span>
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                              <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                              <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-lte-toggle="chat-pane">
                              <i class="bi bi-chat-text-fill"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                              <i class="bi bi-x-lg"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <!-- Conversations are loaded here -->
                          <div class="direct-chat-messages">
                            <!-- Message. Default to the start -->
                            <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-start"> Alexander Pierce </span>
                                <span class="direct-chat-timestamp float-end"> 23 Jan 2:00 pm </span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="../../dist/assets/img/user1-128x128.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                            <!-- Message to the end -->
                            <div class="direct-chat-msg end">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-end"> Sarah Bullock </span>
                                <span class="direct-chat-timestamp float-start">
                                  23 Jan 2:05 pm
                                </span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="../../dist/assets/img/user3-128x128.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">You better believe it!</div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                            <!-- Message. Default to the start -->
                            <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-start"> Alexander Pierce </span>
                                <span class="direct-chat-timestamp float-end"> 23 Jan 5:37 pm </span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="../../dist/assets/img/user1-128x128.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Working with AdminLTE on a great new app! Wanna join?
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                            <!-- Message to the end -->
                            <div class="direct-chat-msg end">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-end"> Sarah Bullock </span>
                                <span class="direct-chat-timestamp float-start">
                                  23 Jan 6:10 pm
                                </span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="../../dist/assets/img/user3-128x128.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">I would love to.</div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                          </div>
                          <!-- /.direct-chat-messages-->
                          <!-- Contacts are loaded here -->
                          <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="../../dist/assets/img/user1-128x128.jpg" alt="User Avatar">
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Count Dracula
                                      <small class="contacts-list-date float-end"> 2/28/2023 </small>
                                    </span>
                                    <span class="contacts-list-msg">
                                      How have you been? I was...
                                    </span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="../../dist/assets/img/user7-128x128.jpg" alt="User Avatar">
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Sarah Doe
                                      <small class="contacts-list-date float-end"> 2/23/2023 </small>
                                    </span>
                                    <span class="contacts-list-msg"> I will be waiting for... </span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="../../dist/assets/img/user3-128x128.jpg" alt="User Avatar">
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Nadia Jolie
                                      <small class="contacts-list-date float-end"> 2/20/2023 </small>
                                    </span>
                                    <span class="contacts-list-msg"> I'll call you back at... </span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="../../dist/assets/img/user5-128x128.jpg" alt="User Avatar">
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Nora S. Vans
                                      <small class="contacts-list-date float-end"> 2/10/2023 </small>
                                    </span>
                                    <span class="contacts-list-msg"> Where is your new... </span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="../../dist/assets/img/user6-128x128.jpg" alt="User Avatar">
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      John K.
                                      <small class="contacts-list-date float-end"> 1/27/2023 </small>
                                    </span>
                                    <span class="contacts-list-msg"> Can I take a look at... </span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="../../dist/assets/img/user8-128x128.jpg" alt="User Avatar">
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Kenneth M.
                                      <small class="contacts-list-date float-end"> 1/4/2023 </small>
                                    </span>
                                    <span class="contacts-list-msg"> Never mind I found... </span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                            </ul>
                            <!-- /.contacts-list -->
                          </div>
                          <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <form action="#" method="post">
                            <div class="input-group">
                              <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                              <span class="input-group-append">
                                <button type="button" class="btn btn-warning">Send</button>
                              </span>
                            </div>
                          </form>
                        </div>
                        <!-- /.card-footer-->
                      </div>
                      <!-- /.direct-chat -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <!-- USERS LIST -->
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Latest Members</h3>
                          <div class="card-tools">
                            <span class="badge text-bg-danger"> 8 New Members </span>
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                              <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                              <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                              <i class="bi bi-x-lg"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <div class="row text-center m-1">
                            <div class="col-3 p-2">
                              <img class="img-fluid rounded-circle" src="../../dist/assets/img/user1-128x128.jpg" alt="User Image">
                              <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                Alexander Pierce
                              </a>
                              <div class="fs-8">Today</div>
                            </div>
                            <div class="col-3 p-2">
                              <img class="img-fluid rounded-circle" src="../../dist/assets/img/user1-128x128.jpg" alt="User Image">
                              <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                Norman
                              </a>
                              <div class="fs-8">Yesterday</div>
                            </div>
                            <div class="col-3 p-2">
                              <img class="img-fluid rounded-circle" src="../../dist/assets/img/user7-128x128.jpg" alt="User Image">
                              <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                Jane
                              </a>
                              <div class="fs-8">12 Jan</div>
                            </div>
                            <div class="col-3 p-2">
                              <img class="img-fluid rounded-circle" src="../../dist/assets/img/user6-128x128.jpg" alt="User Image">
                              <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                John
                              </a>
                              <div class="fs-8">12 Jan</div>
                            </div>
                            <div class="col-3 p-2">
                              <img class="img-fluid rounded-circle" src="../../dist/assets/img/user2-160x160.jpg" alt="User Image">
                              <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                Alexander
                              </a>
                              <div class="fs-8">13 Jan</div>
                            </div>
                            <div class="col-3 p-2">
                              <img class="img-fluid rounded-circle" src="../../dist/assets/img/user5-128x128.jpg" alt="User Image">
                              <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                Sarah
                              </a>
                              <div class="fs-8">14 Jan</div>
                            </div>
                            <div class="col-3 p-2">
                              <img class="img-fluid rounded-circle" src="../../dist/assets/img/user4-128x128.jpg" alt="User Image">
                              <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                Nora
                              </a>
                              <div class="fs-8">15 Jan</div>
                            </div>
                            <div class="col-3 p-2">
                              <img class="img-fluid rounded-circle" src="../../dist/assets/img/user3-128x128.jpg" alt="User Image">
                              <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                Nadia
                              </a>
                              <div class="fs-8">15 Jan</div>
                            </div>
                          </div>
                          <!-- /.users-list -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                          <a href="javascript:" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View All Users</a>
                        </div>
                        <!-- /.card-footer -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!--end::Row-->
                  <!--begin::Latest Order Widget-->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Latest Orders</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                          <i class="bi bi-x-lg"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table m-0">
                          <thead>
                            <tr>
                              <th>Order ID</th>
                              <th>Item</th>
                              <th>Status</th>
                              <th>Popularity</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a>
                              </td>
                              <td>Call of Duty IV</td>
                              <td><span class="badge text-bg-success"> Shipped </span></td>
                              <td><div id="table-sparkline-1" style="min-height: 30px;"><div id="apexchartsme7dgyui" class="apexcharts-canvas apexchartsme7dgyui apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1558" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1563" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1599" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1560" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1559"><clipPath id="gridRectMaskme7dgyui"><rect id="SvgjsRect1565" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskme7dgyui"></clipPath><clipPath id="nonForecastMaskme7dgyui"></clipPath><clipPath id="gridRectMarkerMaskme7dgyui"><rect id="SvgjsRect1566" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1564" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1572" class="apexcharts-grid"><g id="SvgjsG1573" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1577" x1="0" y1="6" x2="150" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1578" x1="0" y1="12" x2="150" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1579" x1="0" y1="18" x2="150" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1580" x1="0" y1="24" x2="150" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1574" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1583" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1582" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1575" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1576" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1581" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1567" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1568" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1571" d="M 0 22.5 L 15 10.2 L 30 17.700000000000003 L 45 3.3000000000000007 L 60 11.100000000000001 L 75 22.5 L 90 16.8 L 105 26.4 L 120 19.200000000000003 L 135 27.3 L 150 13.8" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskme7dgyui)" pathTo="M 0 22.5 L 15 10.2 L 30 17.700000000000003 L 45 3.3000000000000007 L 60 11.100000000000001 L 75 22.5 L 90 16.8 L 105 26.4 L 120 19.200000000000003 L 135 27.3 L 150 13.8" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1569" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1603" r="0" cx="0" cy="0" class="apexcharts-marker wh6g35orn no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1570" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1584" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1585" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1586" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1587" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1600" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1601" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1602" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1561" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                            </tr>
                            <tr>
                              <td>
                                <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a>
                              </td>
                              <td>Samsung Smart TV</td>
                              <td><span class="badge text-bg-warning">Pending</span></td>
                              <td><div id="table-sparkline-2" style="min-height: 30px;"><div id="apexcharts5yyobcgm" class="apexcharts-canvas apexcharts5yyobcgm apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1605" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1610" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1645" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1607" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1606"><clipPath id="gridRectMask5yyobcgm"><rect id="SvgjsRect1612" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask5yyobcgm"></clipPath><clipPath id="nonForecastMask5yyobcgm"></clipPath><clipPath id="gridRectMarkerMask5yyobcgm"><rect id="SvgjsRect1613" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1611" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1619" class="apexcharts-grid"><g id="SvgjsG1620" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1624" x1="0" y1="7.5" x2="150" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1625" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1626" x1="0" y1="22.5" x2="150" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1621" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1629" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1628" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1622" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1623" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1627" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1614" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1615" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1618" d="M 0 25.5 L 15 9 L 30 22.125 L 45 15.375 L 60 2.625 L 75 13.125 L 90 6 L 105 10.5 L 120 16.5 L 135 7.875 L 150 13.5" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask5yyobcgm)" pathTo="M 0 25.5 L 15 9 L 30 22.125 L 45 15.375 L 60 2.625 L 75 13.125 L 90 6 L 105 10.5 L 120 16.5 L 135 7.875 L 150 13.5" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1616" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1649" r="0" cx="0" cy="0" class="apexcharts-marker wrmiz7idx no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1617" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1630" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1631" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1632" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1633" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1646" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1647" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1648" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1608" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                            </tr>
                            <tr>
                              <td>
                                <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                              </td>
                              <td>iPhone 6 Plus</td>
                              <td><span class="badge text-bg-danger"> Delivered </span></td>
                              <td><div id="table-sparkline-3" style="min-height: 30px;"><div id="apexchartssi3eylna" class="apexcharts-canvas apexchartssi3eylna apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1651" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1656" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1693" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1653" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1652"><clipPath id="gridRectMasksi3eylna"><rect id="SvgjsRect1658" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasksi3eylna"></clipPath><clipPath id="nonForecastMasksi3eylna"></clipPath><clipPath id="gridRectMarkerMasksi3eylna"><rect id="SvgjsRect1659" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1657" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1665" class="apexcharts-grid"><g id="SvgjsG1666" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1670" x1="0" y1="5" x2="150" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1671" x1="0" y1="10" x2="150" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1672" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1673" x1="0" y1="20" x2="150" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1674" x1="0" y1="25" x2="150" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1667" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1677" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1676" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1668" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1669" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1675" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1660" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1661" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1664" d="M 0 27.5 L 15 12 L 30 24.5 L 45 5.5 L 60 18.5 L 75 27.5 L 90 18 L 105 14 L 120 7 L 135 25.5 L 150 3" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasksi3eylna)" pathTo="M 0 27.5 L 15 12 L 30 24.5 L 45 5.5 L 60 18.5 L 75 27.5 L 90 18 L 105 14 L 120 7 L 135 25.5 L 150 3" pathFrom="M -1 35 L -1 35 L 15 35 L 30 35 L 45 35 L 60 35 L 75 35 L 90 35 L 105 35 L 120 35 L 135 35 L 150 35" fill-rule="evenodd"></path><g id="SvgjsG1662" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1697" r="0" cx="0" cy="0" class="apexcharts-marker wairdtiny no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1663" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1678" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1679" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1680" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1681" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1694" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1695" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1696" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1654" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                            </tr>
                            <tr>
                              <td>
                                <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                              </td>
                              <td>Samsung Smart TV</td>
                              <td><span class="badge text-bg-info">Processing</span></td>
                              <td><div id="table-sparkline-4" style="min-height: 30px;"><div id="apexcharts8nmo8916" class="apexcharts-canvas apexcharts8nmo8916 apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1699" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1704" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1741" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1701" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1700"><clipPath id="gridRectMask8nmo8916"><rect id="SvgjsRect1706" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask8nmo8916"></clipPath><clipPath id="nonForecastMask8nmo8916"></clipPath><clipPath id="gridRectMarkerMask8nmo8916"><rect id="SvgjsRect1707" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1705" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1713" class="apexcharts-grid"><g id="SvgjsG1714" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1718" x1="0" y1="5" x2="150" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1719" x1="0" y1="10" x2="150" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1720" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1721" x1="0" y1="20" x2="150" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1722" x1="0" y1="25" x2="150" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1715" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1725" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1724" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1716" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1717" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1723" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1708" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1709" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1712" d="M 0 25 L 15 12 L 30 24.5 L 45 5.5 L 60 18.5 L 75 22.5 L 90 28 L 105 24 L 120 17 L 135 25.5 L 150 8" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask8nmo8916)" pathTo="M 0 25 L 15 12 L 30 24.5 L 45 5.5 L 60 18.5 L 75 22.5 L 90 28 L 105 24 L 120 17 L 135 25.5 L 150 8" pathFrom="M -1 40 L -1 40 L 15 40 L 30 40 L 45 40 L 60 40 L 75 40 L 90 40 L 105 40 L 120 40 L 135 40 L 150 40" fill-rule="evenodd"></path><g id="SvgjsG1710" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1745" r="0" cx="0" cy="0" class="apexcharts-marker w01yadoqj no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1711" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1726" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1727" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1728" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1729" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1742" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1743" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1744" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1702" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                            </tr>
                            <tr>
                              <td>
                                <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a>
                              </td>
                              <td>Samsung Smart TV</td>
                              <td><span class="badge text-bg-warning">Pending</span></td>
                              <td><div id="table-sparkline-5" style="min-height: 30px;"><div id="apexchartsmq1vlrakg" class="apexcharts-canvas apexchartsmq1vlrakg apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1747" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1752" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1788" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1749" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1748"><clipPath id="gridRectMaskmq1vlrakg"><rect id="SvgjsRect1754" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskmq1vlrakg"></clipPath><clipPath id="nonForecastMaskmq1vlrakg"></clipPath><clipPath id="gridRectMarkerMaskmq1vlrakg"><rect id="SvgjsRect1755" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1753" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1761" class="apexcharts-grid"><g id="SvgjsG1762" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1766" x1="0" y1="6" x2="150" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1767" x1="0" y1="12" x2="150" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1768" x1="0" y1="18" x2="150" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1769" x1="0" y1="24" x2="150" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1763" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1772" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1771" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1764" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1765" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1770" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1756" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1757" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1760" d="M 0 24 L 15 7.199999999999999 L 30 14.700000000000001 L 45 6.300000000000001 L 60 14.100000000000001 L 75 19.5 L 90 13.8 L 105 23.4 L 120 19.200000000000003 L 135 15.3 L 150 10.8" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskmq1vlrakg)" pathTo="M 0 24 L 15 7.199999999999999 L 30 14.700000000000001 L 45 6.300000000000001 L 60 14.100000000000001 L 75 19.5 L 90 13.8 L 105 23.4 L 120 19.200000000000003 L 135 15.3 L 150 10.8" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1758" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1792" r="0" cx="0" cy="0" class="apexcharts-marker wo8mdyer1 no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1759" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1773" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1774" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1775" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1776" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1789" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1790" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1791" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1750" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                            </tr>
                            <tr>
                              <td>
                                <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                              </td>
                              <td>iPhone 6 Plus</td>
                              <td><span class="badge text-bg-danger"> Delivered </span></td>
                              <td><div id="table-sparkline-6" style="min-height: 30px;"><div id="apexchartsre2qc7srj" class="apexcharts-canvas apexchartsre2qc7srj apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1794" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1799" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1834" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1796" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1795"><clipPath id="gridRectMaskre2qc7srj"><rect id="SvgjsRect1801" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskre2qc7srj"></clipPath><clipPath id="nonForecastMaskre2qc7srj"></clipPath><clipPath id="gridRectMarkerMaskre2qc7srj"><rect id="SvgjsRect1802" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1800" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1808" class="apexcharts-grid"><g id="SvgjsG1809" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1813" x1="0" y1="7.5" x2="150" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1814" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1815" x1="0" y1="22.5" x2="150" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1810" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1818" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1817" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1811" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1812" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1816" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1803" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1804" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1807" d="M 0 28.125 L 15 16.5 L 30 25.875 L 45 4.125 L 60 21.375 L 75 24.375 L 90 24.75 L 105 14.25 L 120 20.25 L 135 22.875 L 150 13.5" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskre2qc7srj)" pathTo="M 0 28.125 L 15 16.5 L 30 25.875 L 45 4.125 L 60 21.375 L 75 24.375 L 90 24.75 L 105 14.25 L 120 20.25 L 135 22.875 L 150 13.5" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1805" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1838" r="0" cx="0" cy="0" class="apexcharts-marker w3441k0ct no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1806" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1819" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1820" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1821" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1822" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1835" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1836" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1837" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1797" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                            </tr>
                            <tr>
                              <td>
                                <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a>
                              </td>
                              <td>Call of Duty IV</td>
                              <td><span class="badge text-bg-success">Shipped</span></td>
                              <td><div id="table-sparkline-7" style="min-height: 30px;"><div id="apexchartsorwp0q5d" class="apexcharts-canvas apexchartsorwp0q5d apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1840" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1845" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1880" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1842" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1841"><clipPath id="gridRectMaskorwp0q5d"><rect id="SvgjsRect1847" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskorwp0q5d"></clipPath><clipPath id="nonForecastMaskorwp0q5d"></clipPath><clipPath id="gridRectMarkerMaskorwp0q5d"><rect id="SvgjsRect1848" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1846" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1854" class="apexcharts-grid"><g id="SvgjsG1855" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1859" x1="0" y1="7.5" x2="150" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1860" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1861" x1="0" y1="22.5" x2="150" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1856" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1864" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1863" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1857" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1858" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1862" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1849" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1850" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1853" d="M 0 25.5 L 15 9 L 30 22.125 L 45 15.375 L 60 2.625 L 75 13.125 L 90 6 L 105 10.5 L 120 16.5 L 135 7.875 L 150 2.25" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskorwp0q5d)" pathTo="M 0 25.5 L 15 9 L 30 22.125 L 45 15.375 L 60 2.625 L 75 13.125 L 90 6 L 105 10.5 L 120 16.5 L 135 7.875 L 150 2.25" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1851" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1884" r="0" cx="0" cy="0" class="apexcharts-marker whkbaqo13j no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1852" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1865" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1866" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1867" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1868" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1881" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1882" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1883" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1843" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <a href="javascript:void(0)" class="btn btn-sm btn-primary float-start">
                        Place New Order
                      </a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-end">
                        View All Orders
                      </a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <!-- Info Boxes Style 2 -->
                  <div class="info-box mb-3 text-bg-warning">
                    <span class="info-box-icon"> <i class="bi bi-tag-fill"></i> </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Inventory</span>
                      <span class="info-box-number">5,200</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  <div class="info-box mb-3 text-bg-success">
                    <span class="info-box-icon"> <i class="bi bi-heart-fill"></i> </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Mentions</span>
                      <span class="info-box-number">92,050</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  <div class="info-box mb-3 text-bg-danger">
                    <span class="info-box-icon"> <i class="bi bi-cloud-download"></i> </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Downloads</span>
                      <span class="info-box-number">114,381</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  <div class="info-box mb-3 text-bg-info">
                    <span class="info-box-icon"> <i class="bi bi-chat-fill"></i> </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Direct Messages</span>
                      <span class="info-box-number">163,921</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h3 class="card-title">Browser Usage</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                          <i class="bi bi-x-lg"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <!--begin::Row-->
                      <div class="row">
                        <div class="col-12"><div id="pie-chart" style="min-height: 177.7px;"><div id="apexchartstflv3k" class="apexcharts-canvas apexchartstflv3k apexcharts-theme-light" style="width: 310px; height: 177.7px;"><svg id="SvgjsSvg1909" width="310" height="177.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1911" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1910"><clipPath id="gridRectMasktflv3k"><rect id="SvgjsRect1913" width="181" height="199" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktflv3k"></clipPath><clipPath id="nonForecastMasktflv3k"></clipPath><clipPath id="gridRectMarkerMasktflv3k"><rect id="SvgjsRect1914" width="179" height="201" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1915" class="apexcharts-pie"><g id="SvgjsG1916" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1917" r="51.587804878048786" cx="87.5" cy="87.5" fill="transparent"></circle><g id="SvgjsG1918" class="apexcharts-slices"><g id="SvgjsG1919" class="apexcharts-series apexcharts-pie-series" seriesName="Chrome" rel="1" data:realIndex="0"><path id="SvgjsPath1920" d="M 87.5 8.134146341463406 A 79.3658536585366 79.3658536585366 0 0 1 166.2871872271968 97.06649652562979 L 138.7116716976779 93.71822274165936 A 51.587804878048786 51.587804878048786 0 0 0 87.5 35.912195121951214 L 87.5 8.134146341463406 z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="96.92307692307692" data:startAngle="0" data:strokeWidth="2" data:value="700" data:pathOrig="M 87.5 8.134146341463406 A 79.3658536585366 79.3658536585366 0 0 1 166.2871872271968 97.06649652562979 L 138.7116716976779 93.71822274165936 A 51.587804878048786 51.587804878048786 0 0 0 87.5 35.912195121951214 L 87.5 8.134146341463406 z" stroke="#ffffff"></path></g><g id="SvgjsG1921" class="apexcharts-series apexcharts-pie-series" seriesName="Edge" rel="2" data:realIndex="1"><path id="SvgjsPath1922" d="M 166.2871872271968 97.06649652562979 A 79.3658536585366 79.3658536585366 0 0 1 106.49349199004182 164.5596261927896 L 99.84576979352718 137.58875702531324 A 51.587804878048786 51.587804878048786 0 0 0 138.7116716976779 93.71822274165936 L 166.2871872271968 97.06649652562979 z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="69.23076923076921" data:startAngle="96.92307692307692" data:strokeWidth="2" data:value="500" data:pathOrig="M 166.2871872271968 97.06649652562979 A 79.3658536585366 79.3658536585366 0 0 1 106.49349199004182 164.5596261927896 L 99.84576979352718 137.58875702531324 A 51.587804878048786 51.587804878048786 0 0 0 138.7116716976779 93.71822274165936 L 166.2871872271968 97.06649652562979 z" stroke="#ffffff"></path></g><g id="SvgjsG1923" class="apexcharts-series apexcharts-pie-series" seriesName="FireFox" rel="3" data:realIndex="2"><path id="SvgjsPath1924" d="M 106.49349199004182 164.5596261927896 A 79.3658536585366 79.3658536585366 0 0 1 34.870704148401316 146.9061945011894 L 53.29095769646086 126.11402642577309 A 51.587804878048786 51.587804878048786 0 0 0 99.84576979352718 137.58875702531324 L 106.49349199004182 164.5596261927896 z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="55.38461538461539" data:startAngle="166.15384615384613" data:strokeWidth="2" data:value="400" data:pathOrig="M 106.49349199004182 164.5596261927896 A 79.3658536585366 79.3658536585366 0 0 1 34.870704148401316 146.9061945011894 L 53.29095769646086 126.11402642577309 A 51.587804878048786 51.587804878048786 0 0 0 99.84576979352718 137.58875702531324 L 106.49349199004182 164.5596261927896 z" stroke="#ffffff"></path></g><g id="SvgjsG1925" class="apexcharts-series apexcharts-pie-series" seriesName="Safari" rel="4" data:realIndex="3"><path id="SvgjsPath1926" d="M 34.870704148401316 146.9061945011894 A 79.3658536585366 79.3658536585366 0 0 1 22.183182936147332 42.415056442361475 L 45.04406890849577 58.19478668753496 A 51.587804878048786 51.587804878048786 0 0 0 53.29095769646086 126.11402642577309 L 34.870704148401316 146.9061945011894 z" fill="rgba(214,51,132,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="83.07692307692307" data:startAngle="221.53846153846152" data:strokeWidth="2" data:value="600" data:pathOrig="M 34.870704148401316 146.9061945011894 A 79.3658536585366 79.3658536585366 0 0 1 22.183182936147332 42.415056442361475 L 45.04406890849577 58.19478668753496 A 51.587804878048786 51.587804878048786 0 0 0 53.29095769646086 126.11402642577309 L 34.870704148401316 146.9061945011894 z" stroke="#ffffff"></path></g><g id="SvgjsG1927" class="apexcharts-series apexcharts-pie-series" seriesName="Opera" rel="5" data:realIndex="4"><path id="SvgjsPath1928" d="M 22.183182936147332 42.415056442361475 A 79.3658536585366 79.3658536585366 0 0 1 68.50650800995815 10.44037380721042 L 75.1542302064728 37.41124297468677 A 51.587804878048786 51.587804878048786 0 0 0 45.04406890849577 58.19478668753496 L 22.183182936147332 42.415056442361475 z" fill="rgba(111,66,193,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-4" index="0" j="4" data:angle="41.53846153846155" data:startAngle="304.6153846153846" data:strokeWidth="2" data:value="300" data:pathOrig="M 22.183182936147332 42.415056442361475 A 79.3658536585366 79.3658536585366 0 0 1 68.50650800995815 10.44037380721042 L 75.1542302064728 37.41124297468677 A 51.587804878048786 51.587804878048786 0 0 0 45.04406890849577 58.19478668753496 L 22.183182936147332 42.415056442361475 z" stroke="#ffffff"></path></g><g id="SvgjsG1929" class="apexcharts-series apexcharts-pie-series" seriesName="IE" rel="6" data:realIndex="5"><path id="SvgjsPath1930" d="M 68.50650800995815 10.44037380721042 A 79.3658536585366 79.3658536585366 0 0 1 87.48614804547034 8.134147550274477 L 87.49099622955572 35.91219590767841 A 51.587804878048786 51.587804878048786 0 0 0 75.1542302064728 37.41124297468677 L 68.50650800995815 10.44037380721042 z" fill="rgba(173,181,189,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-5" index="0" j="5" data:angle="13.846153846153868" data:startAngle="346.15384615384613" data:strokeWidth="2" data:value="100" data:pathOrig="M 68.50650800995815 10.44037380721042 A 79.3658536585366 79.3658536585366 0 0 1 87.48614804547034 8.134147550274477 L 87.49099622955572 35.91219590767841 A 51.587804878048786 51.587804878048786 0 0 0 75.1542302064728 37.41124297468677 L 68.50650800995815 10.44037380721042 z" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine1931" x1="0" y1="0" x2="175" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1932" x1="0" y1="0" x2="175" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1912" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend apexcharts-align-center apx-legend-position-right" style="position: absolute; left: auto; top: 24px; right: 5px;"><div class="apexcharts-legend-series" rel="1" seriesname="Chrome" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(13, 110, 253) !important; color: rgb(13, 110, 253); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Chrome" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Chrome</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Edge" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(32, 201, 151) !important; color: rgb(32, 201, 151); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Edge" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Edge</span></div><div class="apexcharts-legend-series" rel="3" seriesname="FireFox" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 193, 7) !important; color: rgb(255, 193, 7); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="FireFox" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">FireFox</span></div><div class="apexcharts-legend-series" rel="4" seriesname="Safari" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="4" data:collapsed="false" style="background: rgb(214, 51, 132) !important; color: rgb(214, 51, 132); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="4" i="3" data:default-text="Safari" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Safari</span></div><div class="apexcharts-legend-series" rel="5" seriesname="Opera" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="5" data:collapsed="false" style="background: rgb(111, 66, 193) !important; color: rgb(111, 66, 193); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="5" i="4" data:default-text="Opera" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Opera</span></div><div class="apexcharts-legend-series" rel="6" seriesname="IE" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="6" data:collapsed="false" style="background: rgb(173, 181, 189) !important; color: rgb(173, 181, 189); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="6" i="5" data:default-text="IE" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">IE</span></div></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(13, 110, 253);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 201, 151);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 193, 7);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(214, 51, 132);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 5;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(111, 66, 193);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 6;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(173, 181, 189);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div></div>
                        <!-- /.col -->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer p-0">
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            United States of America
                            <span class="float-end text-danger">
                              <i class="bi bi-arrow-down fs-7"></i>
                              12%
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            India
                            <span class="float-end text-success">
                              <i class="bi bi-arrow-up fs-7"></i> 4%
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            China
                            <span class="float-end text-info">
                              <i class="bi bi-arrow-left fs-7"></i> 0%
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <!-- /.footer -->
                  </div>
                  <!-- /.card -->
                  <!-- PRODUCT LIST -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Recently Added Products</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                          <i class="bi bi-x-lg"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <div class="px-2">
                        <div class="d-flex border-top py-2 px-1">
                          <div class="col-2">
                            <img src="../../dist/assets/img/default-150x150.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="col-10">
                            <a href="javascript:void(0)" class="fw-bold">
                              Samsung TV
                              <span class="badge text-bg-warning float-end"> $1800 </span>
                            </a>
                            <div class="text-truncate">Samsung 32" 1080p 60Hz LED Smart HDTV.</div>
                          </div>
                        </div>
                        <!-- /.item -->
                        <div class="d-flex border-top py-2 px-1">
                          <div class="col-2">
                            <img src="../../dist/assets/img/default-150x150.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="col-10">
                            <a href="javascript:void(0)" class="fw-bold">
                              Bicycle
                              <span class="badge text-bg-info float-end"> $700 </span>
                            </a>
                            <div class="text-truncate">
                              26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                            </div>
                          </div>
                        </div>
                        <!-- /.item -->
                        <div class="d-flex border-top py-2 px-1">
                          <div class="col-2">
                            <img src="../../dist/assets/img/default-150x150.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="col-10">
                            <a href="javascript:void(0)" class="fw-bold">
                              Xbox One
                              <span class="badge text-bg-danger float-end"> $350 </span>
                            </a>
                            <div class="text-truncate">
                              Xbox One Console Bundle with Halo Master Chief Collection.
                            </div>
                          </div>
                        </div>
                        <!-- /.item -->
                        <div class="d-flex border-top py-2 px-1">
                          <div class="col-2">
                            <img src="../../dist/assets/img/default-150x150.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="col-10">
                            <a href="javascript:void(0)" class="fw-bold">
                              PlayStation 4
                              <span class="badge text-bg-success float-end"> $399 </span>
                            </a>
                            <div class="text-truncate">PlayStation 4 500GB Console (PS4)</div>
                          </div>
                        </div>
                        <!-- /.item -->
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <a href="javascript:void(0)" class="uppercase"> View All Products </a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <footer class="app-footer">
          <!--begin::To the end-->
          <div class="float-end d-none d-sm-inline">Anything you want</div>
          <!--end::To the end-->
          <!--begin::Copyright-->
          <strong>
            Copyright © 2014-2024&nbsp;
            <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
          </strong>
          All rights reserved.
          <!--end::Copyright-->
        </footer>
        <!--end::Footer-->
      <div class="sidebar-overlay"></div></div>
</div>
@endsection
