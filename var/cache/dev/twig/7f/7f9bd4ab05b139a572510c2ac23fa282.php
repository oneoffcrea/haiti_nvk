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

/* home/index.html.twig */
class __TwigTemplate_1795fca6eb8e63e22aabe52d660fdf88 extends Template
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
            'slide' => [$this, 'block_slide'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Haiti Sport Network — NVK
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slide(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
\t";
        // line 10
        yield from $this->load("_include/slide.php", 10)->unwrap()->yield($context);
        // line 11
        yield "
\t<div
\t\tclass=\"container my-5\">

\t\t";
        // line 16
        yield "\t\t<div class=\"row g-4 mb-5\">
\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home/ht_card.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"HT Card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Championnat Haïtien</h5>
\t\t\t\t\t\t<p class=\"card-text\">Retrouvez les résultats et les derniers matchs du championnat haïtien.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home/ligue_ht.png"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Ligue HT\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Ligue Haïtienne</h5>
\t\t\t\t\t\t<p class=\"card-text\">Découvrez les clubs participants et les classements officiels.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home/sportif_ht.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Sportif HT\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Sportifs</h5>
\t\t\t\t\t\t<p class=\"card-text\">Les profils des meilleurs sportifs haïtiens et leurs performances.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 49
        yield "\t\t<section class=\"mb-5\">
\t\t\t<div class=\"row g-4 align-items-center\">
\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t<div class=\"ratio ratio-16x9\">
\t\t\t\t\t\t<video src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/video/video_du_jour.mp4"), "html", null, true);
        yield "\" controls poster=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/video_thumbnail.jpg"), "html", null, true);
        yield "\"></video>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t<h3>Vidéo du Jour : Match de la Ligue Haïtienne</h3>
\t\t\t\t\t<p>Revivez les meilleurs moments du match entre le Club A et le Club B avec des actions incroyables et des buts mémorables.</p>
\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center gap-3\">
\t\t\t\t\t\t<span class=\"text-muted\">Publié le 1er Décembre 2025</span>
\t\t\t\t\t\t<span class=\"d-flex gap-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-outline-primary\">F</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-outline-info\">T</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-outline-danger\">I</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t";
        // line 73
        yield "\t\t<section class=\"my-5\">
\t\t\t<h2 class=\"mb-4\">Nos Sportifs</h2>
\t\t\t<div class=\"row g-4\">

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home/player_placeholder.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Joueur 1\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 1</h5>
\t\t\t\t\t\t\t<p class=\"card-text mb-2\">Poste : Défenseur</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home/player_placeholder.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Joueur 2\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 2</h5>
\t\t\t\t\t\t\t<p class=\"card-text mb-2\">Poste : Milieu</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home/player_placeholder.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Joueur 3\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 3</h5>
\t\t\t\t\t\t\t<p class=\"card-text mb-2\">Poste : Attaquant</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

\t\t";
        // line 114
        yield "\t\t<div class=\"row my-5\">
\t\t\t<div class=\"col-12 col-md-8 col-lg-6\">
\t\t\t\t";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'form');
        yield "
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  263 => 116,  259 => 114,  244 => 101,  230 => 90,  216 => 79,  208 => 73,  184 => 53,  178 => 49,  166 => 39,  153 => 29,  140 => 19,  135 => 16,  129 => 11,  127 => 10,  124 => 9,  111 => 8,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Haiti Sport Network — NVK
{% endblock %}

{% block slide %}{% endblock %}

{% block body %}

\t{% include \"_include/slide.php\" %}

\t<div
\t\tclass=\"container my-5\">

\t\t{# Cartes compétitions #}
\t\t<div class=\"row g-4 mb-5\">
\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/home/ht_card.jpg') }}\" class=\"card-img-top\" alt=\"HT Card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Championnat Haïtien</h5>
\t\t\t\t\t\t<p class=\"card-text\">Retrouvez les résultats et les derniers matchs du championnat haïtien.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/home/ligue_ht.png') }}\" class=\"card-img-top\" alt=\"Ligue HT\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Ligue Haïtienne</h5>
\t\t\t\t\t\t<p class=\"card-text\">Découvrez les clubs participants et les classements officiels.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/home/sportif_ht.jpg') }}\" class=\"card-img-top\" alt=\"Sportif HT\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Sportifs</h5>
\t\t\t\t\t\t<p class=\"card-text\">Les profils des meilleurs sportifs haïtiens et leurs performances.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{# Vidéo du jour #}
\t\t<section class=\"mb-5\">
\t\t\t<div class=\"row g-4 align-items-center\">
\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t<div class=\"ratio ratio-16x9\">
\t\t\t\t\t\t<video src=\"{{ asset('assets/video/video_du_jour.mp4') }}\" controls poster=\"{{ asset('assets/img/video_thumbnail.jpg') }}\"></video>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t<h3>Vidéo du Jour : Match de la Ligue Haïtienne</h3>
\t\t\t\t\t<p>Revivez les meilleurs moments du match entre le Club A et le Club B avec des actions incroyables et des buts mémorables.</p>
\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center gap-3\">
\t\t\t\t\t\t<span class=\"text-muted\">Publié le 1er Décembre 2025</span>
\t\t\t\t\t\t<span class=\"d-flex gap-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-outline-primary\">F</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-outline-info\">T</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-outline-danger\">I</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t{# Slider / liste joueurs #}
\t\t<section class=\"my-5\">
\t\t\t<h2 class=\"mb-4\">Nos Sportifs</h2>
\t\t\t<div class=\"row g-4\">

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home/player_placeholder.jpg') }}\" class=\"card-img-top\" alt=\"Joueur 1\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 1</h5>
\t\t\t\t\t\t\t<p class=\"card-text mb-2\">Poste : Défenseur</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home/player_placeholder.jpg') }}\" class=\"card-img-top\" alt=\"Joueur 2\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 2</h5>
\t\t\t\t\t\t\t<p class=\"card-text mb-2\">Poste : Milieu</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home/player_placeholder.jpg') }}\" class=\"card-img-top\" alt=\"Joueur 3\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 3</h5>
\t\t\t\t\t\t\t<p class=\"card-text mb-2\">Poste : Attaquant</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

\t\t{# Formulaire #}
\t\t<div class=\"row my-5\">
\t\t\t<div class=\"col-12 col-md-8 col-lg-6\">
\t\t\t\t{{ form(form) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t{% endblock %}
", "home/index.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\home\\index.html.twig");
    }
}
