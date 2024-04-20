<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse  navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI']==='/' ? 'active' : ' ' ?> " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI']==='/about' ? 'active' : ' ' ?>  " aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php  echo $_SERVER['REQUEST_URI']==='/notes' ? 'active' : ' ' ?>  " aria-current="page" href="/notes">Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI']==='/contact' ? 'active' : ' ' ?>  " aria-current="page" href="/contact">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>