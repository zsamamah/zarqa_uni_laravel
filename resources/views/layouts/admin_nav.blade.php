    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}">
              <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Dashboard</span>
            </a>
         
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('create-user') }}">
              <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
              <span class="menu-title">Add User</span>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="{{ route('users') }}">
              <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
              <span class="menu-title">User</span>
            </a>
          </li>
    
         
          <li class="nav-item sidebar-user-actions">
            <div class="user-details">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <div class="d-flex align-items-center">
                 
                  </div>
                </div>
         
              </div>
            </div>
          </li>
          {{-- <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Settings</span>
              </a>
            </div>
          </li> --}}
    
          <li class="nav-item sidebar-user-actions">
            {{-- <div class="sidebar-user-menu">
              <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div> --}}
            <div class="sidebar-user-menu">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Log Out</span></a> 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
            </div>
          </li>
        </ul>
      </nav>