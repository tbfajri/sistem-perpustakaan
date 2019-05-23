<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- Menu Dashboar -->
        <li><a href="<?php echo base_url('admin/dasbor')?>"><i class="fa fa-dashboard text-aqua"></i> <span>DASHBOARD</span></a></li>

     

        <!-- Menu Kategori -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap"></i> <span>Kelola Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/transaksi')?>"><i class="fa fa-table"></i> Data Transaksi </a></li>
            <li><a href="<?php echo base_url('admin/transaksi/tambah')?>"><i class="fa fa-plus"></i> Tambah Transaksi</a></li>
        
          </ul>
        </li>

        <!-- Menu Rekening -->
        <li><a href="<?php echo base_url('admin/transaksi/tambah')?>"><i class="fa fa-dollar text-aqua"></i> <span>Transaksi</span></a></li>

        <!-- Menu User -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-lock"></i> <span>Data Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/anggota')?>"><i class="fa fa-table"></i> Data Anggota </a></li>
            <li><a href="<?php echo base_url('admin/anggota/tambah')?>"><i class="fa fa-plus"></i> Tambah Anggota</a></li>
          </ul>
        </li>

        <!-- Menu User -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Data Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/buku')?>"><i class="fa fa-table"></i> Data Buku </a></li>
            <li><a href="<?php echo base_url('admin/buku/tambah')?>"><i class="fa fa-plus"></i> Tambah Buku</a></li>
          </ul>
        </li>


      

        <!-- Menu Konfigurasi -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clone"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/buku/cetak')?>"><i class="fa fa-calendar-check-o"></i> Laporan Data Buku </a></li>
            <li><a href="<?php echo base_url('admin/transaksi/cetak')?>"><i class="fa fa-calendar-plus-o"></i> Laporan Data Peminjaman</a></li>
          </ul>
        </li>


        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">