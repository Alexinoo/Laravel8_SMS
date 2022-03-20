
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    <a class="navbar-brand" href="{{ url('/')}}">Coding Pro</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">

      <span class="navbar-toggler-icon"></span>      
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        <a class="nav-link active" href="{{ url('/')}}">
            Home
          </a>
        <a class="nav-link" href="{{ url('/create')}}">
            Create
        </a>
      </div>
    </div>
  </div>
</nav>