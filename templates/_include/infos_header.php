<div class="infos_header_nvk container-fluid py-2">
    <div class="row align-items-center text-center text-md-start">

        <!-- Réseaux sociaux -->
        <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-start gap-3 mb-2 mb-md-0">
            <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-link"><i class="bi bi-youtube"></i></a>
            <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
        </div>

        <!-- Slogan -->
        <div class="col-12 col-md-4 slogan_nvk">
            <span>Haiti Sport Network – Le sport, notre passion 🇭🇹🔥</span>
        </div>

        <!-- Contact -->
        <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-end flex-column flex-md-row gap-3">
            <div><i class="bi bi-telephone"></i> +509 45 67 89 10</div>
            <div><i class="bi bi-envelope"></i> contact@haitisportnetwork.com</div>
        </div>

    </div>

    <div class="row">
        <div class="container">

            <div class="d-flex gap-2 d-md-none">

                {% if is_granted('ROLE_ADMIN') %}
                {# Utilisateur admin connecté #}
                <a class="btn" style="background-color: #2a2828ff; color: white;" href="{{ path('app_admin') }}">Profil Admin</a>
                <a class="btn" style="background-color: #c3b4b4ff; color: white;" href="{{ path('app_logout') }}">Se déconnecter</a>

                {% elseif app.user is not null %}
                {# Utilisateur normal connecté #}
                <a class="btn" style="background-color: #dc3545; color: white;" href="{{ path('app_logout') }}">Se déconnecter</a>

                {% else %}
                {# Aucun utilisateur connecté #}
                <a class="btn btn-outline-light" href="#">Demende réferencement</a>
                <a class="btn" style="background-color: #35dca7ff; color: white;" href="{{ path('app_login') }}">Se connecter</a>
                {% endif %}

            </div>
        </div>

    </div>
</div>