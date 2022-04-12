

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
      <a class="navbar-brand" href="/">logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ ($title === "Bimbel") ? 'active' : '' }}" href="/bimbel">Bimbel</a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ ($title === "Beasiswa") ? 'active' : '' }}" href="/beasiswa">Beasiswa</a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ ($title === "Kursus") ? 'active' : '' }}" href="/kursus">Kursus</a>
          </li>
      </ul>
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a href="/login" class="nav-link {{ ($title === "login") ? 'active' : '' }}""><i class="bi bi-person"></i>Login</a>
          </li>

      </ul>
      </div>
  </div>
  </nav>