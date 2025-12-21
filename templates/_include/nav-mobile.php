<nav class="navbar d-md-none m-2 justify-content-around fixed-bottom bg-dark w-100 " data-bs-theme="dark">
    <a href="{{ path('app_admin_utilisateur_profil', { id: app.user.id }) }}" class="nav-item">
        <i class="bi bi-person-circle"></i>
        <span>Profil</span>
    </a>

    <a href="#" class="nav-item position-relative">
        <i class="bi bi-chat-dots"></i>
        <span>Messages</span>
        <span class="badge bg-danger rounded-circle position-absolute top-0 start-50 translate-middle p-1">3</span>
    </a>

    <a href="{{ path('app_logout') }}" class="nav-item text-danger">
        <i class="bi bi-box-arrow-right"></i>
        <span>Déconnexion</span>
    </a>
</nav>