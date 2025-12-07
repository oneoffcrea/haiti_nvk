<nav class="navbar navbar-expand-lg navbar-custom py-3 shadow-sm">
    <div class="container">

        <!-- LOGO + NOM DU SITE -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <!-- Logo CSS -->
            <div class="logo-css me-2">HNVK</div>
            <span class="fw-bold text-white">HAITI SPORT NETWORK</span>
        </a>
        <!-- Bouton mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAVBAR CONTENT -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- MENU CENTRÉ -->
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item"><a class="nav-link active text-white" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ path('app_home') }}">Actualité</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ path('app_club') }}">Club</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ path('app_sportif') }}">Sportif</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>
            </ul>

            <!-- BOUTONS A DROITE -->
            <div class="d-flex gap-2">
                <a class="btn btn-outline-light" href="#">Espace Pro</a>

                {% if app.user %}
                {# Utilisateur connecté → bouton Déconnexion #}
                <a class="btn" style="background-color: #dc3545; color: white;" href="{{ path('app_logout') }}">Se déconnecter</a>
                {% else %}
                {# Aucun utilisateur → bouton Connexion #}
                <a class="btn" style="background-color: #35dca7ff; color: white;" href="{{ path('app_login') }}">Se connecter</a>
                {% endif %}
            </div>


        </div>
    </div>
</nav>