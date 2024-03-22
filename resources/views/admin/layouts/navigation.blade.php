  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        {{ Auth::user()->name }}
          <i class="fas fa-angle-down"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu dropdown-menu-right">
        <!-- <a href="{{ route('profile.edit') }}" class="dropdown-item"> {{ __('Profile') }} </a> -->
        <!-- <div class="dropdown-divider"></div> -->
        <form method="POST" action="{{ route('logout') }}">
                    @csrf
          <a href="#" class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
          </a>
          </form>
          
         
        </div>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->