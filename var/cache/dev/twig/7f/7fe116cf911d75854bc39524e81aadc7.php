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

/* admin/profil/index.html.twig */
class __TwigTemplate_c09802298b6ac742d4bb09bf3419ebaf extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profil/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Administrateur | Haiti sport network
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<div class=\"container\">
\t\t<div class=\"row g-2\">

\t\t\t<div class=\"col-md-12 col-xl-2 col-sm-12 align-items-start justify-content-center flex-column\">

\t\t\t\t";
        // line 12
        yield from $this->load("admin/_include/nav.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "

\t\t\t</div>

\t\t\t<div class=\"col-md-6 col-xl-6 col-sm-12\">

\t\t\t\t<div class=\"col-md-12 col-xl-10 col-sm-12 \">
\t\t\t\t\t<h2>Profil Administrateur</h2>

\t\t\t\t\t<!-- Informations principales -->
\t\t\t\t\t<ul class=\"list-group mb-3\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<strong>Nom :</strong>
\t\t\t\t\t\t\tJean Dupont</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<strong>Email :</strong>
\t\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29), "html", null, true);
        yield "</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<strong>Rôle :</strong>
\t\t\t\t\t\t\tAdministrateur</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Statistiques ou détails -->
\t\t\t\t\t<ul class=\"list-group list-group-horizontal-sm mb-3\">
\t\t\t\t\t\t<li class=\"list-group-item text-center flex-fill\">
\t\t\t\t\t\t\t<strong>Messages</strong><br>123</li>
\t\t\t\t\t\t<li class=\"list-group-item text-center flex-fill\">
\t\t\t\t\t\t\t<strong>Clubs</strong><br>5</li>
\t\t\t\t\t\t<li class=\"list-group-item text-center flex-fill\">
\t\t\t\t\t\t\t<strong>Sports</strong><br>3</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Activités récentes -->
\t\t\t\t\t<h5>Activités récentes</h5>
\t\t\t\t\t<ul class=\"list-group mb-3\">
\t\t\t\t\t\t<li class=\"list-group-item\">Connecté le 07/12/2025</li>
\t\t\t\t\t\t<li class=\"list-group-item\">A rejoint le club \"Football Club\"</li>
\t\t\t\t\t\t<li class=\"list-group-item\">A modifié son profil</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Boutons actions -->
\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">Modifier le profil</button>
\t\t\t\t\t\t<button class=\"btn btn-danger\">Supprimer l'utilisateur</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/profil/index.html.twig";
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
        return array (  128 => 29,  110 => 13,  108 => 12,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administrateur | Haiti sport network
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row g-2\">

\t\t\t<div class=\"col-md-12 col-xl-2 col-sm-12 align-items-start justify-content-center flex-column\">

\t\t\t\t{% include \"admin/_include/nav.html.twig\" %}


\t\t\t</div>

\t\t\t<div class=\"col-md-6 col-xl-6 col-sm-12\">

\t\t\t\t<div class=\"col-md-12 col-xl-10 col-sm-12 \">
\t\t\t\t\t<h2>Profil Administrateur</h2>

\t\t\t\t\t<!-- Informations principales -->
\t\t\t\t\t<ul class=\"list-group mb-3\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<strong>Nom :</strong>
\t\t\t\t\t\t\tJean Dupont</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<strong>Email :</strong>
\t\t\t\t\t\t\t{{app.user.email}}</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<strong>Rôle :</strong>
\t\t\t\t\t\t\tAdministrateur</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Statistiques ou détails -->
\t\t\t\t\t<ul class=\"list-group list-group-horizontal-sm mb-3\">
\t\t\t\t\t\t<li class=\"list-group-item text-center flex-fill\">
\t\t\t\t\t\t\t<strong>Messages</strong><br>123</li>
\t\t\t\t\t\t<li class=\"list-group-item text-center flex-fill\">
\t\t\t\t\t\t\t<strong>Clubs</strong><br>5</li>
\t\t\t\t\t\t<li class=\"list-group-item text-center flex-fill\">
\t\t\t\t\t\t\t<strong>Sports</strong><br>3</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Activités récentes -->
\t\t\t\t\t<h5>Activités récentes</h5>
\t\t\t\t\t<ul class=\"list-group mb-3\">
\t\t\t\t\t\t<li class=\"list-group-item\">Connecté le 07/12/2025</li>
\t\t\t\t\t\t<li class=\"list-group-item\">A rejoint le club \"Football Club\"</li>
\t\t\t\t\t\t<li class=\"list-group-item\">A modifié son profil</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Boutons actions -->
\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">Modifier le profil</button>
\t\t\t\t\t\t<button class=\"btn btn-danger\">Supprimer l'utilisateur</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t{% endblock %}
", "admin/profil/index.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\admin\\profil\\index.html.twig");
    }
}
