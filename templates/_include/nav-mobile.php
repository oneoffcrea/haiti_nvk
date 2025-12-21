{% if app.user %}
<nav class="mobile-bottom-nav d-md-none fixed-bottom bg-dark text-white">
    <a href="{{ path('app_admin_utilisateur_profil', { id: app.user.id }) }}" class="nav-item text-center flex-fill">
        <i class="bi bi-person-circle"></i>
        <span class="d-block small">Profil</span>
    </a>

    <a href="#" class="nav-item text-center flex-fill position-relative">
        <i class="bi bi-chat-dots"></i>
        <span class="d-block small">Messages</span>
        <span class="badge bg-danger rounded-circle position-absolute top-0 start-50 translate-middle p-1">3</span>
    </a>

    <a href="{{ path('app_logout') }}" class="nav-item text-center flex-fill text-danger">
        <i class="bi bi-box-arrow-right"></i>
        <span class="d-block small">Déconnexion</span>
    </a>
</nav>
{% endif %}