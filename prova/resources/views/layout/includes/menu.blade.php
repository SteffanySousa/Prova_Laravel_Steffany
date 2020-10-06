<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Admin Certidões</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('certidao') }}">Certidões</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tabeliao') }}">Tabeliões</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contrato') }}">Contatos</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>