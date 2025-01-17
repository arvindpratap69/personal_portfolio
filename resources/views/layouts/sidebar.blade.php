 <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#">
        <h1 class="logo">Arvind Portfolio</h1>
      </a>

      <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
      </button>

      <nav class="navbar container">
        <ul class="navbar-list">

          <li @if (Request::segment(1) == '') active @endif>
            <a href="{{ route('home') }}" class="navbar-link " data-nav-link>Home</a>
          </li>

          <li>
            <a href="{{ route('about') }}" class="navbar-link" data-nav-link>About</a>
          </li>

          <li>
            <a href="{{ route('portfolio') }}" class="navbar-link" data-nav-link>Portfolio</a>
          </li>

          <li>
            <a href="{{ route('skills') }}" class="navbar-link" data-nav-link>Skills</a>
          </li>

          <li>
            <a href="{{ route('contact') }}" class="navbar-link" data-nav-link>Contact</a>
          </li>

          <li>
            <a href="{{ route('blog') }}" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li>
            <a href="#" class="btn btn-primary">Download CV</a>
          </li>

        </ul>
      </nav>

    </div>
  </header>