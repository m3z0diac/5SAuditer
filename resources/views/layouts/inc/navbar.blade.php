<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand text-white" href="{{ url('/') }}">
        <span><i class="fa-solid fa-5 m-0"></i><i class="fa-solid fa-s m-0"></i></span><span>Audit</span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#main"
        aria-controls="main"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="main">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 {{ Request::is('engins') ? 'active':'' }} {{ Request::is('start-audit') || Request::is('start') || Request::is('store-audit') ? 'disabled':'' }}" href="{{ url('engins') }}">Engins Flottants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 {{ Request::is('planning') ? 'active':'' }} {{ Request::is('start-audit') || Request::is('start') || Request::is('store-audit') ? 'disabled':'' }}" href="{{ url('planning') }}">Plans d'audits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 {{ Request::is('auditeurs') ? 'active':'' }} {{ Request::is('start-audit') || Request::is('start') || Request::is('store-audit') ? 'disabled':'' }}" href="{{ url('auditeurs') }}">Liste d'auditeurs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 {{ Request::is('audits') ? 'active':'' }} {{ Request::is('start-audit') || Request::is('start') || Request::is('store-audit') ? 'disabled':'' }}" href="{{ url('audits') }}">Audits Réalisés</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 {{ Request::is('analyses') || Request::is('analyser')? 'active':'' }} {{ Request::is('start-audit') || Request::is('start') || Request::is('store-audit') ? 'disabled':'' }}" href="{{ url('analyses') }}">Analyses</a>
          </li>
        </ul>
        <a class="btn rounded-pill main-btn {{ Request::is('start-audit') || Request::is('start') || Request::is('store-audit') ? 'disabled':'' }}" href="{{ url('/') }}">Accueil</a>
      </div>
    </div>
  </nav>
