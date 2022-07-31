<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">

      <li class="nav-item">
        <a class="nav-link @if($title == 'Dashboard') active @endif"  
          href="{{ route('Dashboard.index') }}">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link  @if($title == 'Bencana') active @endif" 
          href="{{ route('Bencana.index') }}">
          <span data-feather="file"></span>
          Bencana
        </a>
      </li> 

      <li class="nav-item">
        <a class="nav-link  @if($title == 'Bantukami') active @endif" 
          href="{{ route('Bantukami.index') }}">
          <span data-feather="file"></span>
          Bantukami
        </a>
      </li> 

      <li class="nav-item">
        <a class="nav-link  @if($title == 'Bantukamiapproval') active @endif" 
          href="{{ route('Bantukamiapproval.index') }}">
          <span data-feather="file"></span>
          Approval
        </a>
      </li> 


    </ul>

  </div>
</nav>