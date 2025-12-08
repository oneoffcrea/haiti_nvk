<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* _include/nav2.php */
class __TwigTemplate_39b8ed30e8e74daaf37178a8e62254e5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_include/nav2.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_include/nav2.php"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-custom py-3 shadow-sm\">
    <div class=\"container\">

        <!-- LOGO + NOM DU SITE -->
        <a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
            <!-- Logo CSS -->
            <div class=\"logo-css me-2\">HNVK</div>
            <span class=\"fw-bold text-white\">HAITI SPORT NETWORK</span>
        </a>
        <!-- Bouton mobile -->
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- NAVBAR CONTENT -->
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">

            <!-- MENU CENTRÉ -->
            <ul class=\"navbar-nav mx-auto text-center\">
                <li class=\"nav-item\"><a class=\"nav-link active text-white\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Actualité</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_club");
        yield "\">Club</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sportif");
        yield "\">Sportif</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"#\">Contact</a></li>
            </ul>

            <!-- BOUTONS A DROITE -->
            <div class=\"d-flex gap-2 d-none d-md-flex\">


                ";
        // line 32
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                ";
            // line 34
            yield "                <a class=\"btn\" style=\"background-color: #2a2828ff; color: white;\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\">Profil Admin</a>
                <a class=\"btn\" style=\"background-color: #c3b4b4ff; color: white;\" href=\"";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>

                ";
        } elseif ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                ";
            // line 39
            yield "                <a class=\"btn\" style=\"background-color: #dc3545; color: white;\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>

                ";
        } else {
            // line 42
            yield "                ";
            // line 43
            yield "                <a class=\"btn btn-outline-light\" href=\"#\">Demende réferencement</a>
                <a class=\"btn\" style=\"background-color: #35dca7ff; color: white;\" href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Se connecter</a>
                ";
        }
        // line 46
        yield "
            </div>


        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_include/nav2.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  128 => 46,  123 => 44,  120 => 43,  118 => 42,  111 => 39,  109 => 38,  107 => 37,  102 => 35,  97 => 34,  95 => 33,  93 => 32,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-custom py-3 shadow-sm\">
    <div class=\"container\">

        <!-- LOGO + NOM DU SITE -->
        <a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
            <!-- Logo CSS -->
            <div class=\"logo-css me-2\">HNVK</div>
            <span class=\"fw-bold text-white\">HAITI SPORT NETWORK</span>
        </a>
        <!-- Bouton mobile -->
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- NAVBAR CONTENT -->
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">

            <!-- MENU CENTRÉ -->
            <ul class=\"navbar-nav mx-auto text-center\">
                <li class=\"nav-item\"><a class=\"nav-link active text-white\" href=\"{{ path('app_home') }}\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"{{ path('app_home') }}\">Actualité</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"{{ path('app_club') }}\">Club</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"{{ path('app_sportif') }}\">Sportif</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"#\">Contact</a></li>
            </ul>

            <!-- BOUTONS A DROITE -->
            <div class=\"d-flex gap-2 d-none d-md-flex\">


                {% if is_granted('ROLE_ADMIN') %}
                {# Utilisateur admin connecté #}
                <a class=\"btn\" style=\"background-color: #2a2828ff; color: white;\" href=\"{{ path('app_admin') }}\">Profil Admin</a>
                <a class=\"btn\" style=\"background-color: #c3b4b4ff; color: white;\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>

                {% elseif app.user is not null %}
                {# Utilisateur normal connecté #}
                <a class=\"btn\" style=\"background-color: #dc3545; color: white;\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>

                {% else %}
                {# Aucun utilisateur connecté #}
                <a class=\"btn btn-outline-light\" href=\"#\">Demende réferencement</a>
                <a class=\"btn\" style=\"background-color: #35dca7ff; color: white;\" href=\"{{ path('app_login') }}\">Se connecter</a>
                {% endif %}

            </div>


        </div>
    </div>
</nav>", "_include/nav2.php", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\_include\\nav2.php");
    }
}
