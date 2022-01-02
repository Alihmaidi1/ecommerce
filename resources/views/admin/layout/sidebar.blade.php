<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url("http://127.0.0.1:8000/en/admin/") }}" class="brand-link">
      <div class="brand-text font-weight-light text-center">Admin <span  style="color:red;font-weight:900">Ecommerce</span></div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{ asset("img/setting/". \App\Models\setting::find(1)->logo) }} class="img-circle elevation-2" alt="User Image"/>
        </div>
        <div class="info">
          <a href="" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
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
          
              <li class="nav-item">
                <a href="{{ url("http://127.0.0.1:8000/en/admin/") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>

        <li class="nav-item ">
          <a href="#" class="nav-link active">
            <i class="fas fa-users-cog"></i>
            <p>
              Admin
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route("show_admin") }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Admins</p>
              </a>
            </li>
            
          </ul>
      </li>



      <li class="nav-item ">
        <a href="#" class="nav-link active">
          <i class="fas fa-users"></i>
          <p> 
          Users
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route("show_user") }}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Users</p>
            </a>
          </li>
          
        </ul>
    </li>


   
    <li class="nav-item ">
      <a href="#" class="nav-link active">
        <i class="fas fa-flag"></i>
        <p> 
        Countries
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route("show_country") }}" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Counrties</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route("add_country") }}" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Add Country</p>
          </a>
        </li>


      </ul>
  </li>






  <li class="nav-item">
    <a href="#" class="nav-link active">
      <i class="fas fa-city"></i>
      <p>  
      Cities
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route("show_cities") }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>Cities</p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="{{ route("add_city") }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Cities</p>
        </a>
      </li>
    </ul>
</li>


<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="fas fa-chart-area"></i>
    <p>  
    area
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route("show_area") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Area</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ route("add_area") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Add Area</p>
      </a>
    </li>
  </ul>
</li>


<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Departments
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route("show_department") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Departments</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ route("add_department") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Add Department</p>
      </a>
    </li>
  </ul>
</li>



<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="fas fa-industry"></i>
    <p>  
    Factories
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route("show_factory") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Factory</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ route("add_factory") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Add factory</p>
      </a>
    </li>
  </ul>
</li>


<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="fas fa-building"></i>
    <p> 
    tracking Company
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route("show_track") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>tracking Company</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ route("add_track") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Add tracking Company</p>
      </a>
    </li>
  </ul>
</li>





<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="fab fa-mailchimp"></i>
    <p>
      malls
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route("show_mall") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>malls</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ route("add_mall") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Add mall</p>
      </a>
    </li>
  </ul>
</li>



<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="fas fa-paint-brush"></i>    
    <p>  
    colors
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route("show_color") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>color</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ route("add_color") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Add color</p>
      </a>
    </li>
  </ul>
</li>








<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      sizes
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route("show_size") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>size</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ route("add_size") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Add size</p>
      </a>
    </li>
  </ul>
</li>









<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="fab fa-product-hunt"></i>
    <p>  
    Products
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route("show_product") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>product</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ route("add_product") }}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Add product</p>
      </a>
    </li>
  </ul>
</li>






    
    <li class="nav-item">
      
      <a href="{{ route("settings") }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p> <i class="fa fa-settings"></i> Settings</p>
      </a>
    </li>
      </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
