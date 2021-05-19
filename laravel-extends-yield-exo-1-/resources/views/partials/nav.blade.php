<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href={{ route('welcome') }}>Coding School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ $page === 'About' ? 'active' : '' }}" href={{ route('about') }}>About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $page === 'Service' ? 'active' : '' }}" href={{ route('service') }}>Service </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contact </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>