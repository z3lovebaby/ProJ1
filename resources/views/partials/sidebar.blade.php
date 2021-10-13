  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVqoDMovFUeYh6AqHjGeIgRxUm2BlTagBvoA&usqp=CAUg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Group 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://images.unsplash.com/photo-1515871204537-49a5fe66a31f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGhlYXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Group 1</a>
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
          <li class="nav-item">
            <a href="{{route('categories.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh mục sản phẩm
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('menus.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Menus
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('sachs.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Sách
                <span class="right badge badge-danger">SP</span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('nxbs.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Nhà xuất bản
                <span class="right badge badge-danger">Nxb</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('tacgias.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tác giả
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('advert.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Advertisement
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('settings.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Setting
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('news.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Nhóm tin
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tin tức
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>