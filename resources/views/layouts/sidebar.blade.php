  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- <a href="index3.html" class="brand-link"> --}}
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      {{-- <span class="brand-text font-weight-light">Perpustakaan</span> --}}
    {{-- </a> --}}

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="center">
          <a href="#" class="d-block"><strong>PERPUS | DIGITAL</strong></a>
        </div>
      </div>

      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          <li class="nav-item menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Data Perpustakaan</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/anggota" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/buku" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/penulis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penulis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/penerbit" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/rak" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Rak</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Transaksi</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Peminjaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/pengembalian" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengembalian</p>
                </a>
              </li>
      </nav>
    </div>
  </aside>