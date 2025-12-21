   <div class="row">
       <div class="container">

           <div class="d-flex gap-2 flex-fill d-md-none">

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