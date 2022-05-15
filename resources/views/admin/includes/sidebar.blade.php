<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
  
    <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="{{route('admin.main.index')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Главная страница
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('admin.user.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Пользователи
              </p>
            </a>
          </li>
      <li class="nav-item">
        <a href="{{route('admin.category.index')}}" class="nav-link">
          <i class="nav-icon fas fa-th-list"></i>
          <p>
            Категории
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.brand.index')}}" class="nav-link">
          <i class="nav-icon fas fa-th-list"></i>
          <p>
            Бренды
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.good.index')}}" class="nav-link">
          <i class="nav-icon fas fa-th-list"></i>
          <p>
            Товар
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.checkout.index')}}" class="nav-link">
          <i class="nav-icon fas fa-th-list"></i>
          <p>
            Заказы
          </p>
        </a>
      </li>
      
    </ul>

    <!-- Sidebar Menu -->
   
  </div>
  <!-- /.sidebar -->
</aside>