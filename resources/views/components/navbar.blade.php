<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('article.index') }}">Tutti gli articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item text-capitalize"
                                    href="{{ route('article.byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                            </li>

                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach
                    </ul>
                    <form action="{{ route('logout') }}" method="POST" class="d-none" id="form-logout">@csrf</form>
                </li>
                @auth
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25" aria-current="page"
                                href="{{ route('revisor.index') }}">Zona revisore
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ \App\Models\Article::toBeRevisedCount() }}
                                </span>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('article.create') }}">Crea</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                        </ul>
                        <form action="{{ route('logout') }}" method="POST" class="d-none" id="form-logout">@csrf</form>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, utente!
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
            <div class="d-flex ms-auto align-items-center">
                <x-_locale lang="it" />
                <x-_locale lang="uk" />
                <x-_locale lang="es" />
                <form role="search" action="{{ route('article.search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control me-2" type="search" name="query" placeholder="Search"
                            aria-label="Search" />
                        <button class="btn btn-outline-success input-group-text" type="submit"
                            id="basic-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>
