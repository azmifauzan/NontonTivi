<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link @if($title == 'Dashboard') active @endif" href="{{ route('dashboard') }}">
          <span data-feather="home"></span>
          Dashboard @if($title == "Dashboard")<span class="sr-only">(current)</span>@endif
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if($title == 'Channels') active @endif" href="{{ route('channel.index') }}">
          <span data-feather="file"></span>
          Channels @if($title == "Channels")<span class="sr-only">(current)</span>@endif
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="shopping-cart"></span>
          Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users"></span>
          Customers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="bar-chart-2"></span>
          Reports
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="layers"></span>
          Integrations
        </a>
      </li>
    </ul>        
  </div>
</nav>