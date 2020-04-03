<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="{{ asset('/siteassets/images/Izone.png') }}" alt="Izone" style="width: 69px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('customer.home')}}"> <i class="fa fa-home"></i> Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{auth()->user()->name}} {{-- Manager Account --}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('customer.information')}}">Contact Account</a>
          <a class="dropdown-item" href="{{route('customer.setting')}}">Settings</a>
          <a class="dropdown-item" href="{{route('customer.employees')}}">Employees</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" onclick="document.getElementById('logoutForm').submit();">Logout</a>
        </div>
        <form action="{{route('logout')}}" id="logoutForm" method="POST"> @csrf</form>
      </li>
    </ul>
  </div>
</nav>