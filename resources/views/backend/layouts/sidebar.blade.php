 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
 {{-- <img src="#" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">{{Auth::user()->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="{{ asset('Templet/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Category
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categories') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subcategories') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Category</p>
                </a>
              </li>
             
            </ul>

            
          </li>
          <!-- District sub district -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               District
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('districts') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>District</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subdistricts') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub District</p>
                </a>
              </li>
             
            </ul>

            
          </li>
          <!-- Post Are here -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Posts
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('insert.post') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('all.post') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All post</p>
                </a>
              </li>
             
            </ul>

            
          </li>


          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Settings
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('seo.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seo settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('social.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Socials settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('namaz.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prayer time</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('tv.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Live Tv</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('notice.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notice </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('important.website') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>important website </p>
                </a>
              </li>
             
              
            </ul>

            
          </li>

             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
            Gallery
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('photo.gallery') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Photo Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('social.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video Gallery</p>
                </a>
              </li>
             
             
              
            </ul>

            
          </li>
          

  
         
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="{{ route('user.logout') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

