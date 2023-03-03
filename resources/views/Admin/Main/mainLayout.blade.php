<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('User/assets/img/favicon.png') }}" type="image/x-icon" />
    <title>@yield('title')</title>
    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/main.css') }}" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'/>
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="{{ route('index') }}">
          <img height="70px" width="185px" src="{{ asset('User/assets/img/logo.png') }}" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                  <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                </svg>
              </span>
              <span class="text {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">Dashboard</span>
            </a>
            
          </li>
          <li class="nav-item nav-item-has-children">
            <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2" aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                </svg>
              </span>
              <span class="text">DOT Professionals</span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li class="{{ Route::currentRouteName() == 'dot-professionals.index' ? 'active' : '' }}">
                <a href="{{ route('dot-professionals.index') }}"> List of All </a>
              </li>
              <li class="{{ Route::currentRouteName() == 'dot-professionals.index' ? 'active' : '' }}">
                <a href="{{ route('dot-professionals.create') }}">Add New </a>
              </li>
            </ul>
          </li>

          <li class="nav-item nav-item-has-children">
            <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3" aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                </svg>
              </span>
              <span class="text">CMS Management</span>
            </a>
            <ul id="ddmenu_3" class="collapse dropdown-nav">
              <li class="{{ Route::currentRouteName() == 'admin.cmsHomepage' ? 'active' : '' }}">
                <a href="{{ route('admin.cmsHomepage') }}"> Home Page </a>
              </li>

              <li class="{{ Route::currentRouteName() == 'admin.cmsAboutpage' ? 'active' : '' }}">
                <a href="{{ route('admin.cmsAboutpage') }}"> About Page </a>
              </li>
              <li>
                <a href="{{ route('cms.create') }}">Add New </a>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <main class="main-wrapper">
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Menu </button>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                        <h6>John Doe</h6>
                        <div class="image">
                          <img src="{{ asset('Admin/assets/images/profile/profile-image.png') }}" alt="" />
                          <span class="status"></span>
                        </div>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <a href="{{ route('admin.profile') }}">
                        <i class="lni lni-user"></i> View Profile</a>
                    </li>
                   <li>
                      <a href="{{ route('admin.logout') }}">
                        <i class="lni lni-exit"></i> Sign Out </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="section">
        @yield('content')
      </section>
      <footer class="footer">
        
      </footer>
    </main>
    <script src="{{ asset('User/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    <script>
      $('.show_confirm').click(function(event) {
          var form = $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
                 title: "Do you want to Delete this?",
                 icon: "warning",
                 text: "Please ensure and then confirm!",
                 type: "warning",
                 showCancelButton: !0,
                 confirmButtonText: "Yes, delete it!",
                 cancelButtonText: "No, cancel!",
                 reverseButtons: !0
             })

              .then((willDelete) => {
                  if (willDelete.value) {
                      form.submit();
                  } else {
                      swal("Your data file is safe!");
                  }
              });
      });
  </script>
  </body>
</html>