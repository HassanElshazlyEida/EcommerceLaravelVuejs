 <!-- Sidebar Menu -->
 <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li > </li>
        <li class="nav-item">
            <a href="{{aurl()}}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                {{   __("admin.dashboard")}}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{aurl("settings")}}" class="nav-link">
                <i class="nav-icon fa fa-cogs"></i>
                <p>
                {{   __("admin.settings")}}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>
                {{__("admin.Profile")}}
            @if(dir_lang()=="ltr")
                <i class="fas fa-angle-right right"></i>
            @else
                <i class="fas fa-angle-down down"></i>
            @endif
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{aurl('logout')}}" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>{{__("admin.signout")}}</p>
                    </a>
                </li>
            </ul>
        </li>


      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-users"></i>
          <p>
         {{   __("admin.admin_accounts")}}
        @if(dir_lang()=="ltr")
            <i class="fas fa-angle-right right"></i>
        @else
            <i class="fas fa-angle-down down"></i>
        @endif
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{aurl("admins")}}" class="nav-link">
              <i class="fa fa-table nav-icon"></i>
              <p>{{ __('admin.admin_tables')}}</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{aurl("users")}}" class="nav-link">
              <i class="fa fa-table nav-icon"></i>
            <p>{{ __('admin.users_tables')}}
            @if(dir_lang()=="ltr")
                <i class="fas fa-angle-right right"></i>
            @else
                <i class="fas fa-angle-down down"></i>
            @endif
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{aurl('users')}}" class="nav-link">
                        <i class="fas fa-users  nav-icon"></i>
                        <p>{{__("admin.users")}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{aurl('users')}}?level=user" class="nav-link">
                        <i class="fas  fa-users  nav-icon"></i>
                        <p>{{__("admin.user")}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{aurl('users')}}?level=vendor" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>{{__("admin.vendor")}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{aurl('users')}}?level=company" class="nav-link">
                        <i class="fas  fa-users  nav-icon"></i>
                        <p>{{__("admin.company")}}</p>
                    </a>
                </li>
            </ul>
          </li>
        </ul>
      </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-flag"></i>
          <p>
         {{   __("admin.countries")}}
        @if(dir_lang()=="ltr")
            <i class="fas fa-angle-right right"></i>
        @else
            <i class="fas fa-angle-down down"></i>
        @endif
          </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{aurl('countries')}}" class="nav-link">
                    <i class="fas fa-flag nav-icon"></i>
                    <p>{{__("admin.countries")}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{aurl('countries/create')}}" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>{{trans_(__("admin.add"))}}</p>
                </a>
            </li>
        </ul>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
