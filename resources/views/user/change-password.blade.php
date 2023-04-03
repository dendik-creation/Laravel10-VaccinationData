<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>{{ $title }}</title>




    <link href="jawa/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <style>
    body{
        overflow-x: hidden;
      }
        .uppercase{
            text-transform: capitalize;
        }
        .jawa{
            background:linear-gradient(to right,rgb(34, 33, 33),rgba(34, 33, 33,0.8));
        }
        .sidebar .nav-link.jawa{
            color: white;
        }
        .messageCustom{
          position: absolute;
          bottom: 1em;
          right: 1.5em;
          transform: translateX(200%);
          transition: all ease 0.5s;
        }
    </style>
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">
    <span data-feather="database"></span>&nbsp;&nbsp;Data Vaksinasi</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    @auth
  <div class="navbar-nav">
      <div class="nav-item text-nowrap">
            <span class="nav-link active px-3">
              <span data-feather="user">
            </span>
            <span class="uppercase">
                {{ auth()->user()->name }}
            </span>
            </span>
        </div>
    </div>
    @endauth
    @guest
  <div class="navbar-nav">
      <div class="nav-item text-nowrap">
            <span class="nav-link active px-3">
              <span data-feather="user">
            </span>
            <span class="uppercase">
                Guest
            </span>
            </span>
        </div>
    </div>
    @endguest
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          @guest
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/login') ? 'jawa' : '' }}"href="/login">
              <span data-feather="log-in" class="align-text-bottom"></span>
              Login Page
            </a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'jawa' : '' }}"href="/">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Transactions Data</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="/mvaksinasi" class="nav-link {{ Request::is('mvaksinasi*') ? 'jawa' : '' }}">
              <span data-feather="key" class="align-text-bottom"></span>
              Vaksinasi
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Master Data</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('vaksin*') ? 'jawa' : '' }}" href="/vaksin">
              <span data-feather="database" class="align-text-bottom"></span>
              Vaksin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('lokasi*') ? 'jawa' : '' }}" href="/lokasi">
              <span data-feather="database" class="align-text-bottom"></span>
              Lokasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('penduduk*') ? 'jawa' : '' }}" href="/penduduk">
              <span data-feather="database" class="align-text-bottom"></span>
              Penduduk
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="/user" class="nav-link {{ Request::is('user*') ? 'jawa' : '' }}">
              <span data-feather="users" class="align-text-bottom"></span>
              User
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST" onsubmit="return confirm('Apakah anda yakin untuk logout ?')">
            @csrf
              <button type="submit" class="btn btn-link text-decoration-none nav-link">
                <span data-feather="log-out"></span>
                Logout
              </button>
              </form>
          </li>
          @endauth
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
              Framework Used
          </h6>
          <li class="nav-item">
            <a href="https://laravel.com" target="blank" class="nav-link">
              <span data-feather="info"></span>
            Laravel 10
            </a>
          </li>
          <li class="nav-item">
            <a href="https://getbootstrap.com" target="blank" class="nav-link">
              <span data-feather="info"></span>
            Bootstrap 5.3
            </a>
          </li>
          <li class="nav-item">
            <a href="https://feathericons.com" target="blank" class="nav-link">
              <span data-feather="feather"></span>
            Feather Icons
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="mt-2">
        <div class="messageCustom">
            @include('layouts.message')
        </div>
        {{-- CONTENT --}}


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Ubah Password dari <span>{{ $user->name }}</span></h1>
        </div>

        <form action="{{ url('user-'.$user->id.'-change-password') }}" method="POST" class="w-50" onsubmit="return confirm('Mengubah password membuat Anda logout dan login menggunakan password baru')">
            @csrf
            <div class="mb-3">
              <label class="form-label">Password Lama</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
              <label class="form-label">Password Baru</label>
              <input type="password" class="form-control" name="new_password">
            </div>
            <div class="mb-3">
              <label class="form-label">Konfirmasi Password Baru</label>
              <input type="password" class="form-control" name="new_password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>



        {{-- END CONTENT --}}
      </div>
    </main>



    <script>
      message = document.querySelector('.messageCustom');
      setTimeout(function(){
        message.style.transform = 'translateX(0)';
      },1000);
      setTimeout(function(){
        message.style.transform = 'translateX(200%)';
      },5000);
    </script>
    <script src="jawa/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="js/dashboard.js"></script>
  </body>
</html>
