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

/* base.html.twig */
class __TwigTemplate_bb65424a1c1d09987cc323bf1e81681d extends Template
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
            'title' => [$this, 'block_title'],
            'slide' => [$this, 'block_slide'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 9
        yield "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"assets/css/nav_nvk.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/pages/footer.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/pages/club.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/pages/sportif.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/global_nvk.css\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI\" crossorigin=\"anonymous\"></script>
\t\t";
        // line 22
        yield "\t</head>
\t<body>
\t\t<header>


\t\t\t";
        // line 27
        yield from $this->load("_include/infos_header.php", 27)->unwrap()->yield($context);
        // line 28
        yield "\t\t\t";
        yield from $this->load("_include/nav2.php", 28)->unwrap()->yield($context);
        // line 29
        yield "\t\t</header>

\t\t<section>

\t\t\t<div class=\"slide_nvk\"> ";
        // line 33
        yield from $this->unwrap()->yieldBlock('slide', $context, $blocks);
        // line 34
        yield "\t\t\t\t</div>

\t\t\t\t<div class=\"section_nvk\"> ";
        // line 36
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 37
        yield "\t\t\t\t\t</div>

\t\t\t\t</section>


\t\t\t\t<footer class=\"footer-nvk\">
\t\t\t\t\t<div class=\"footer-content container\">
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<h5>À propos</h5>
\t\t\t\t\t\t\t<p>Haiti Sport Network, la référence pour toute l’actualité sportive haïtienne. Suivez les clubs, joueurs et résultats.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<h5>Liens utiles</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Actualités</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Clubs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Sportifs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<h5>Contact</h5>
\t\t\t\t\t\t\t<p>Email : contact@haitisportnetwork.com</p>
\t\t\t\t\t\t\t<p>Téléphone : +509 1234 5678</p>
\t\t\t\t\t\t\t<p>Adresse : Port‑au‑Prince, Haïti</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<h5>Réseaux sociaux</h5>
\t\t\t\t\t\t\t<div class=\"social-icons\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">F</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">T</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">I</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">Y</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"footer-bottom\">
\t\t\t\t\t\t<p>© 2025 Haiti Sport Network — Créé par Oneoffcrea.fr</p>
\t\t\t\t\t</div>
\t\t\t\t</footer>


\t\t\t</body>
\t\t</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Haiti Sport Network — NVK
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slide(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  186 => 36,  170 => 33,  152 => 7,  98 => 37,  96 => 36,  92 => 34,  90 => 33,  84 => 29,  81 => 28,  79 => 27,  72 => 22,  58 => 9,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t{% block title %}Haiti Sport Network — NVK
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"assets/css/nav_nvk.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/pages/footer.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/pages/club.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/pages/sportif.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/global_nvk.css\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI\" crossorigin=\"anonymous\"></script>
\t\t{# {% block styles %}{% endblock %} #}
\t</head>
\t<body>
\t\t<header>


\t\t\t{% include \"_include/infos_header.php\" %}
\t\t\t{% include \"_include/nav2.php\" %}
\t\t</header>

\t\t<section>

\t\t\t<div class=\"slide_nvk\"> {% block slide %}{% endblock %}
\t\t\t\t</div>

\t\t\t\t<div class=\"section_nvk\"> {% block body %}{% endblock %}
\t\t\t\t\t</div>

\t\t\t\t</section>


\t\t\t\t<footer class=\"footer-nvk\">
\t\t\t\t\t<div class=\"footer-content container\">
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<h5>À propos</h5>
\t\t\t\t\t\t\t<p>Haiti Sport Network, la référence pour toute l’actualité sportive haïtienne. Suivez les clubs, joueurs et résultats.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<h5>Liens utiles</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Actualités</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Clubs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Sportifs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<h5>Contact</h5>
\t\t\t\t\t\t\t<p>Email : contact@haitisportnetwork.com</p>
\t\t\t\t\t\t\t<p>Téléphone : +509 1234 5678</p>
\t\t\t\t\t\t\t<p>Adresse : Port‑au‑Prince, Haïti</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<h5>Réseaux sociaux</h5>
\t\t\t\t\t\t\t<div class=\"social-icons\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">F</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">T</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">I</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">Y</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"footer-bottom\">
\t\t\t\t\t\t<p>© 2025 Haiti Sport Network — Créé par Oneoffcrea.fr</p>
\t\t\t\t\t</div>
\t\t\t\t</footer>


\t\t\t</body>
\t\t</html>
", "base.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\base.html.twig");
    }
}
