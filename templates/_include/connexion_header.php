   <div class="col">
       <div class="d-md-none">

           {% if is_granted('ROLE_ADMIN') %}
           {# Utilisateur admin connecté #}
           <a class="btn" style="background-color: #ffffffff; color: black;" href="{{ path('app_admin') }}">Profil Admin</a>
           <a class="btn" style="background-color: #000000ff; color: white;" href="{{ path('app_logout') }}">Se déconnecter</a>

           {% elseif app.user is not null %}
           {# Utilisateur normal connecté #}
           <a class="btn" style="background-color: #000000ff; color: white;" href="{{ path('app_logout') }}">Se déconnecter</a>

           {% else %}
           {# Aucun utilisateur connecté #}
           <a class="btn btn-outline-light" href="#">Réferencement</a>
           <a class="btn bg-light bg-gradient" href="{{ path('app_login') }}">Se connecter</a>
           {% endif %}

       </div>
   </div>