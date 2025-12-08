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

/* admin/_include/nav.html.twig */
class __TwigTemplate_1de6f8aae5f3d05cd3f202cd769b5887 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_include/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_include/nav.html.twig"));

        // line 1
        yield "<!-- Bouton visible seulement sur mobile -->
<button class=\"btn btn-primary w-100 d-md-none \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebar\">
\tMenu - Administrateur
</button>
<div
\tclass=\" d-flex\">
\t<!-- Sidebar -->
\t<nav id=\"sidebar\" class=\"collapse d-md-block bg-light sidebar w-100 text-center p-3\">
\t\t<ul class=\"nav flex-column\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_profil");
        yield "\" class=\"nav-link active\">Profil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Utilisateur</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Sportif</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Club</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Message</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/_include/nav.html.twig";
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
        return array (  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Bouton visible seulement sur mobile -->
<button class=\"btn btn-primary w-100 d-md-none \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebar\">
\tMenu - Administrateur
</button>
<div
\tclass=\" d-flex\">
\t<!-- Sidebar -->
\t<nav id=\"sidebar\" class=\"collapse d-md-block bg-light sidebar w-100 text-center p-3\">
\t\t<ul class=\"nav flex-column\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{path('app_admin_profil')}}\" class=\"nav-link active\">Profil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Utilisateur</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Sportif</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Club</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Message</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</div>
", "admin/_include/nav.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\admin\\_include\\nav.html.twig");
    }
}
