<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://fakhrads.id/images/nono.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $username['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Halaman Utama</span>
          </a>
        </li>
        <li>
          <a href="index.php?content=peminjam">
            <i class="fa fa-user"></i> <span>Peminjam</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?content=buku"><i class="fa fa-circle-o"></i> Data buku</a></li>
            <li><a href="index.php?content=rak-buku"><i class="fa fa-circle-o"></i> Data rak buku</a></li>
          </ul>
        </li>
        <li>
          <a href="index.php?content=transaksi-peminjaman">
            <i class="fa fa-table"></i> <span>Peminjaman</span>
          </a>
        </li>
        <!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Peminjam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Peminjam</a></li>
          </ul>
        </li>
        -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>