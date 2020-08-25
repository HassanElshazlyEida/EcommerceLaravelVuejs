 <!-- Sidebar Menu -->
 <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>
                {{__("Profile")}}
                <i class="right fas fa-angle-down"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{aurl('logout')}}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>{{__("admin.signout")}}</p>
                </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a href="{{aurl()}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
             {{   __("admin.dashboard")}}
              </p>
            </a>
          </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-users"></i>
          <p>
         {{   __("admin.admin_accounts")}}
            <i class="fas fa-angle-down right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{aurl("admins")}}" class="nav-link">
              <i class="fa fa-users nav-icon"></i>
              <p>{{ __('admin.admin_accounts')}}</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
