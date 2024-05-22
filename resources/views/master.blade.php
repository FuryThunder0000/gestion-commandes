<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logos/favicon.png')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
</head>

<body>
      <!--  Body Wrapper -->
      <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <!-- Sidebar Start -->
            <aside class="left-sidebar">
                  <!-- Sidebar scroll-->
                  <div>
                        <div class="brand-logo d-flex align-items-center justify-content-between">
                              <a href="/" class="text-nowrap logo-img">
                                    <h4>Gestion Commandes</h4>
                              </a>
                        </div>
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                              <ul id="sidebarnav">
                                    <li class="nav-small-cap">
                                          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                          <span class="hide-menu">Pages</span>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link" href="{{route('clients.index')}}" aria-expanded="false">
                                                
                                                <span class="hide-menu">Clients</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link" href="{{route('produits.index')}}" aria-expanded="false">
                                                
                                                <span class="hide-menu">Produits</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link" href="{{route('commandes.index')}}" aria-expanded="false">
                                                
                                                <span class="hide-menu">Commandes</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link" href="{{route('commandeProduits.index')}}" aria-expanded="false">
                                                
                                                <span class="hide-menu">Associer Commandes</span>
                                          </a>
                                    </li>
                                    <li class="nav-small-cap">
                                          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                          <span class="hide-menu">Recherche</span>
                                    </li>
                                    <li class="sidebar-item">
                                          <a href="{{route('recherche.commandes_par_client')}}" class="sidebar-link fs-2">
                                                
                                                <span class="hide-menu">Commandes</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a href="{{route('recherche.nombre_commandes_par_client')}}" class="sidebar-link fs-2">
                                                
                                                <span class="hide-menu">Nombre Commandes</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a href="{{route('recherche.total_commandes_valides')}}" class="sidebar-link fs-2">
                                                
                                                <span class="hide-menu">Commandes validé</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a href="{{route('recherche.produits_par_categorie')}}" class="sidebar-link fs-2">
                                                
                                                <span class="hide-menu">Produits par categorie</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a href="{{route('recherche.commandes_produits_par_client_View')}}" class="sidebar-link fs-2">
                                                
                                                <span class="hide-menu">Commandes par clients</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a href="{{route('recherche.commandes_produits_par_annee_View')}}" class="sidebar-link fs-2">
                                                
                                                <span class="hide-menu">Commandes par annee</span>
                                          </a>
                                    </li>

                              </ul>

                        </nav>
                        <!-- End Sidebar navigation -->
                  </div>
                  <!-- End Sidebar scroll-->
            </aside>
            <!--  Sidebar End -->
            <!--  Main wrapper -->
            <div class="body-wrapper">
                  <!--  Header Start -->
                  <header class="app-header">
                        <nav class="navbar navbar-expand-lg navbar-light">

                              <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                          <li class="nav-item dropdown">
                                                <div class="message-body">
                                                      <form action="{{route('auth.logout')}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="col-10 btn btn-outline-primary mx-3 mt-2 d-block">Se deconnecter</button>
                                                      </form>
                                                </div>
                                          </li>
                                    </ul>
                              </div>
                        </nav>
                  </header>
                  <!--  Header End -->
                  <div class="container-fluid">

                        @yield('content')
                  </div>
            </div>
      </div>
      <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
      <script src="{{asset('assets/js/app.min.js')}}"></script>
      <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
      <script src="{{asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
      <script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>

</html>