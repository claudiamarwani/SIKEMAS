<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard')? 'active':'' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/accound*')? 'active':'' }}" href="/dashboard/accound">
            <span data-feather="user"></span>
            Profile
          </a>
        </li>
      </ul>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/infokeluhan*')? 'active':'' }}" href="/dashboard/infokeluhan">
            <span data-feather="file-text"></span>
            Informasi Keluhan
          </a>
        </li>
      </ul>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('kuesioner/create-step1*')? 'active':'' }}" aria-current="page"
            href="/kuesioner/create-step1">
            <span data-feather="list"></span>
            Kuesioner
          </a>
        </li>
      </ul>


      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/notifmasya*')? 'active':'' }}" href="/dashboard/notifmasya">
            <span data-feather="eye"></span>
            Pengumuman
          </a>
        </li>
      </ul>

      @can('admin')
      A D M I N
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link {{ Request::is('dashboard/kuesioners*')? 'active':'' }}"
            aria-current="page" href="/dashboard/kuesioners">
            <span data-feather="settings"></span>
            Kuesioner Control
          </a>
        </li>
      </ul>
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link {{ Request::is('dashboard/adminviewkuesioner*')? 'active':'' }}"
            aria-current="page" href="/dashboard/adminviewkuesioner">
            <span data-feather="eye"></span>
            Kuesioner View
          </a>
        </li>

      </ul>

      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link {{ Request::is('dashboard/kuesioners*')? 'active':'' }}"
            aria-current="page" href="/dashboard/infokeluhanadmin">
            <span data-feather="eye"></span>
            Informasi Keluhan View
          </a>
        </li>
      </ul>


      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/notif*')? 'active':'' }}" href="/dashboard/notif">
            <span data-feather="eye"></span>
            Pengumuman Admin
          </a>
        </li>
      </ul>
      @endcan

  </div>
</nav>