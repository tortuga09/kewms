<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('theme') }}/img/logo/logo.png">
    </div>
    <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-home"></i>
      <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Pengurusan Kewangan
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTunai"
      aria-expanded="true" aria-controls="collapseBootstrap">
      <i class="fas fa-fw fa-hand-holding-usd"></i>
      <span>Transaksi Tunai</span>
    </a>
    <div id="collapseTunai" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Buku Tunai</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBayaran" aria-expanded="true"
      aria-controls="collapseForm">
      <i class="fas fa-fw fa-receipt"></i>
      <span>Bayaran</span>
    </a>
    <div id="collapseBayaran" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Baucer Bayaran</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePenyata" aria-expanded="true"
      aria-controls="collapseForm">
      <i class="fas fa-fw fa-file-invoice-dollar"></i>
      <span>Penyata</span>
    </a>
    <div id="collapsePenyata" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Kewangan</a>
        <a class="collapse-item" href="#">Bank</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Pengurusan Tabung
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTabung" aria-expanded="true"
      aria-controls="collapsePage">
      <i class="fas fa-fw fa-funnel-dollar"></i>
      <span>Kutipan Tabung</span>
    </a>
    <div id="collapseTabung" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Borang Kutipan</a>
        <a class="collapse-item" href="#">Penyata Kutipan</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Pengurusan Aset
  </div>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-boxes"></i>
      <span>Daftar Aset</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Tetapan
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSistem" aria-expanded="true"
      aria-controls="collapsePage">
      <i class="fas fa-fw fa-cogs"></i>
      <span>Sistem</span>
    </a>
    <div id="collapseSistem" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Akaun Bank</a>
        <a class="collapse-item" href="#">Perihal Kewangan</a>
      </div>
    </div>
  </li>
  <li class="nav-item {{ (request()->is('tetapan/pengguna')) ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tetapan.pengguna.index') }}">
      <i class="fas fa-fw fa-users-cog"></i>
      <span>Pengguna</span>
    </a>
  </li>
  <hr class="sidebar-divider">
</ul>
