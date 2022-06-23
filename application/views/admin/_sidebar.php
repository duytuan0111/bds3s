<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url(); ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Nhatro365</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $user_info['username']; ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview  <?php echo (isset($sidebar) && $sidebar == 1) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Quản lý người dùng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listUser" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 1.1) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách người dùng</p>
                </a>
              </li>
              <?php if ($user_info['type'] == 1) { ?>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listAdmin" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 1.2) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách quản trị viên</p>
                </a>
              </li>
            <?php } ?>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php echo (isset($sidebar) && $sidebar == 2) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Quản lý tin đăng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listNews" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 2.1) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tin đăng</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quản lý bài viết
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview <?php echo (isset($sidebar) && $sidebar == 3) ? 'menu-open' : '' ?>">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listPosts" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 3.1) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết tại đường phố</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listPostsDistrict" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 3.2) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết tại quận/huyện</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listPostsCity" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 3.3) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết tại tỉnh/thành phố</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listPostsNewType" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 3.4) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết theo loại tin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php echo (isset($sidebar) && $sidebar == 4) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link">
              <i class="fas fa-key"></i>
              <p>
                &nbsp;Quản lý tags
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listTags" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 4.1) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tags phòng trọ</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listTagsApartment" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 4.2) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tags Chung cư</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listTagsHouse" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 4.3) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tags nhà nguyên căn</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/home/listTagsHomeStay" class="nav-link <?php echo (isset($sidebar_sm) && $sidebar_sm == 4.4) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tags homestay</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/auth/logout" class="nav-link">
              <i class="fas fa-power-off"></i>
              <p>Đăng xuất</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>