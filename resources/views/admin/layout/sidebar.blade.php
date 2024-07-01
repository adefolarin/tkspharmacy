 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
      <img src="{{ asset('') }}" alt="Shalom Global" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Shalom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        @if(!empty(Auth::guard('admin')->user()->image))
          <img src="{{ asset('admin/img/photos/'.Auth::guard('admin')->user()->image) }}" class="img-circle elevation-2" alt="User Image">
        @else
        <img src="{{ asset('admin/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(Session::get('page') == "dashboard")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/dashboard') }}" class="nav-link {{  $active }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if(Session::get('page') == "update-password" || Session::get('page') == "update-admin-details")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item menu-close">
            <a href="#" class="nav-link {{  $active }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @if(Session::get('page') == "update-password")
             @php $active = "active" @endphp
            @else
              @php $active = "" @endphp
            @endif
              <li class="nav-item">
                <a href="{{ url('admin/update-password') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Admin Password</p>
                </a>
              </li>
              @if(Session::get('page') == "update-admin-details")
                @php $active = "active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/update-admin-details') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Admin Details</p>
                </a>
              </li>
            </ul>
          </li>

          @if(Session::get('page') == "cms-pages")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <!--<li class="nav-item">
            <a href="{{ url('admin/cms-pages') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                CMS Pages
              </p>
            </a>
          </li>-->

          @if(Session::get('page') == "membregs")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/sponsor') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Sponsors
              </p>
            </a>
          </li>


          @if(Session::get('page') == "banner")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/banner') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banners
              </p>
            </a>
          </li>


          <?php //  CATEGORIES    ?>

          @if(Session::get('page') == "categories-page" || Session::get('page') == "categories" ||  Session::get('page') == "eventcategory" || Session::get('page') == "sermoncategory" || Session::get('page') == "productcategory" || Session::get('page') == "foodbankcategory" || Session::get('page') == "deptcategory" || Session::get('page') == "donationcategory")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item menu-close">
            <a href="#" class="nav-link {{  $active }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @if(Session::get('page') == "eventcategory")
             @php $active = "active" @endphp
            @else
              @php $active = "" @endphp
             @endif
              <li class="nav-item">
                <a href="{{ url('admin/eventcategory') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event Categories</p>
                </a>
              </li>
              

              @if(Session::get('page') == "campaigncategory")
                @php $active = "active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/campaigncategory') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Medical Outreach Categories</p>
                </a>
              </li>


              @if(Session::get('page') == "newscategory")
                @php $active = "active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/newscategory') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News Categories</p>
                </a>
              </li>

              
              @if(Session::get('page') == "gallerycategory")
                @php $active = "active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/gallerycategory') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery Categories</p>
                </a>
              </li>
              
            


              @if(Session::get('page') == "resourcecategory")
                @php $active = "active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/resourcecategory') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Resource Categories</p>
                </a>
              </li>



              @if(Session::get('page') == "donationcategory")
                @php $active = "active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/donationcategory') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Donation Categories</p>
                </a>
              </li>



              @if(Session::get('page') == "givingcategory")
                @php $active = "active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/givingcategory') }}" class="nav-link {{  $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Giving Categories</p>
                </a>
              </li>

            </ul>
          </li>

          @if(Session::get('page') == "events")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/event') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Events
              </p>
            </a>
          </li>

          @if(Session::get('page') == "eventscheduler")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/eventscheduler') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Event Scheduler
              </p>
            </a>
          </li>

          @if(Session::get('page') == "campaigns")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/campaign') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Medical Outreach
              </p>
            </a>
          </li>

          @if(Session::get('page') == "campaignscheduler")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/campaignscheduler') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Campaign Scheduler
              </p>
            </a>
          </li>

          @if(Session::get('page') == "communities")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/community') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Community Requests
              </p>
            </a>
          </li>

          @if(Session::get('page') == "conditions")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/condition') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Condition Reports
              </p>
            </a>
          </li>

          @if(Session::get('page') == "volunteers")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/volunteer') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Volunteers
              </p>
            </a>
          </li>


          <?php
          /*
          @if(Session::get('page') == "news")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/news') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                News
              </p>
            </a>
          </li>
          */
          ?>

          <?php
          /*
          @if(Session::get('page') == "donations")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/donation') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-money"></i>
              <p>
                Donations
              </p>
            </a>
          </li>

          @if(Session::get('page') == "givings")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/giving') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-money"></i>
              <p>
                Giving
              </p>
            </a>
          </li>

          @if(Session::get('page') == "volunteers")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/volunteer') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Volunteers
              </p>
            </a>
          </li>


          @if(Session::get('page') == "prayers")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/prayer') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Prayer Requests
              </p>
            </a>
          </li>
          */
          ?>

          @if(Session::get('page') == "galleries")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/gallery') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>


          @if(Session::get('page') == "reports")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/report') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
              </p>
            </a>
          </li>

          @if(Session::get('page') == "resources")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/resource') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Resources
              </p>
            </a>
          </li>

          @if(Session::get('page') == "reports")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/reports') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
              </p>
            </a>
          </li>

          @if(Session::get('page') == "contacts")
             @php $active = "active" @endphp
          @else
             @php $active = "" @endphp
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/contacts') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>