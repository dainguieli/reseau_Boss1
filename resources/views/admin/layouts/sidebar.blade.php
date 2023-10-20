<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('admin.dashboard')}}" class="brand-link"
    style="background: linear-gradient(-45deg, #664650 0%, #664650 100%)">
    <img src="{{asset('storage/image/logo/logo.jpeg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">Dughu </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar" style="background: linear-gradient(-45deg, #664650 0%, #664650 100%)">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/bonhome.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{url('/')}}"> {{Auth::guard('admin')->user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
   
        <li class="nav-item has-treeview {{request()->is('admin')? 'menu-open' : ''}} ">
          <a href="#" class="nav-link   {{request()->is('admin')? 'active' : ''}} ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>


          <ul class="nav nav-treeview ">
            <li class="nav-item">
              <a href={{ route('admin.dashboard') }} class="nav-link {{request()->is('admin')? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p> Dashboard</p>
              </a>
            </li>
          </ul>
        </li>
        <li
          class="nav-item has-treeview {{request()->is('client')|| request()->is('admin/AjouterClient')?'menu-open' : ''}}">
          <a href="#"
            class="nav-link {{request()->is('client') || request()->is('admin/AjouterClient')?'active' : ''}}">
            <i class="nav-icon fas fa-male"></i>
            <p>
              Utilisateur
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview ">
            <li class="nav-item">
              <a href={{ route('admin.ajouterClient') }}
                class="nav-link  {{request()->is('admin/AjouterClient')?'active' : ''}}">
                <i class="far fa-file nav-icon"></i>
                <p>Ajouter un utilsateur</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href={{ route('admin.Client') }}
                class="nav-link  {{request()->is('admin/liste_client')?'active' : ''}}">
                <i class="far fa-file nav-icon"></i>
                <p>Liste des utilisateur</p>
              </a>
            </li>
          </ul>
        </li>
        <li
          class="nav-item has-treeview {{request()->is('client')|| request()->is('admin/AjouterClient')?'menu-open' : ''}}">
          <a href="#"
            class="nav-link {{request()->is('client') || request()->is('admin/AjouterClient')?'active' : ''}}">
            <i class="nav-icon fas fa-male"></i>
            <p>
            Adminsateur
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview ">
            <li class="nav-item">
              <a href={{ route('admin.ajouterAdminsateur') }}
                class="nav-link  {{request()->is('admin/Adminsateur')?'active' : ''}}">
                <i class="far fa-file nav-icon"></i>
                <p>Ajouter un Adminsateur</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href={{ route('admin.Adminsateur') }}
                class="nav-link  {{request()->is('admin/liste_Adminsateur')?'active' : ''}}">
                <i class="far fa-file nav-icon"></i>
                <p>Liste des Adminsateur</p>
              </a>
            </li>
          </ul>
        </li>

        <li
        class="nav-item has-treeview {{request()->is('tache')|| request()->is('admin/AjouterTache')?'menu-open' : ''}}">
        <a href="#"
          class="nav-link {{request()->is('tache') || request()->is('admin/AjouterTache')?'active' : ''}}">
          <i class="nav-icon fas fa-tasks"></i>
          <p>
            Tâches
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview ">
          <li class="nav-item">
            <a href={{ route('admin.ajouterTache') }}
              class="nav-link  {{request()->is('admin/AjouterTache')?'active' : ''}}">
              <i class="far fa-file nav-icon"></i>
              <p>Ajouter des tâches</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href={{ route('admin.Tache') }}
              class="nav-link  {{request()->is('admin/liste_Tache')?'active' : ''}}">
              <i class="far fa-file nav-icon"></i>
              <p>Liste des tâches</p>
            </a>
          </li>
        </ul>
      </li>

      <li
      class="nav-item">
      <a href="{{ route('admin.calendar') }}"
        class="nav-link {{request()->is('calendar') || request()->is('admin/voirCalendar')?'active' : ''}}">
        <i class="nav-icon fas fa-calendar"></i>
        <p>
          Calendrier
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
  

    </li>



    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>