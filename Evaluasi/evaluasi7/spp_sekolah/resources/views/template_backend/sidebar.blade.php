<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Wahyu Prayogo</span>
          <span class="text-secondary text-small">Backend Developer</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('home')}}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-tags" aria-expanded="false" aria-controls="general-tags">
        <span class="menu-title">Master Data</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
      </a>
      <div class="collapse" id="general-tags">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('guru.index')}}"> Guru </a></li>
          <li class="nav-item"> <a class="nav-link" href=""> Siswa </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('jurusan.index')}}"> Jurusan </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('kelas.index')}}"> Kelas </a></li>

        </ul>
      </div>
    </li>
  </ul>
</nav>