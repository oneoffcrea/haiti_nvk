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
class __TwigTemplate_3f5d928e9440bbc957d2d5a6acb4931f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Haiti Sport Network — NVK
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "
\t";
        // line 10
        yield from $this->load("_include/slide.php", 10)->unwrap()->yield($context);
        // line 11
        yield "
\t<div class=\"home_card_nvk d-flex flex-wrap gap-3\">

\t\t<div class=\"card\">
\t\t\t<img src=\"assets/img/home/ht_card.jpg\" class=\"card-img-top\" alt=\"HT Card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">Championnat Haïtien</h5>
\t\t\t\t<p class=\"card-text\">Retrouvez les résultats et les derniers matchs du championnat haïtien.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card\">
\t\t\t<img src=\"assets/img/home/ligue_ht.png\" class=\"card-img-top\" alt=\"Ligue HT\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">Ligue Haïtienne</h5>
\t\t\t\t<p class=\"card-text\">Découvrez les clubs participants et les classements officiels.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card\">
\t\t\t<img src=\"assets/img/home/sportif_ht.jpg\" class=\"card-img-top\" alt=\"Sportif HT\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">Sportifs</h5>
\t\t\t\t<p class=\"card-text\">Les profils des meilleurs sportifs haïtiens et leurs performances.</p>
\t\t\t</div>
\t\t</div>

\t</div>

\t<section class=\"video_du_jour_section\">
\t\t<div
\t\t\tclass=\"video_du_jour d-flex flex-wrap gap-4\">

\t\t\t<!-- Video -->
\t\t\t<div class=\"video-container\">
\t\t\t\t<video src=\"assets/video/video_du_jour.mp4\" controls poster=\"assets/img/video_thumbnail.jpg\"></video>
\t\t\t</div>

\t\t\t<!-- Texte et infos -->
\t\t\t<div class=\"video-info\">
\t\t\t\t<h3>Vidéo du Jour : Match de la Ligue Haïtienne</h3>
\t\t\t\t<p>Revivez les meilleurs moments du match entre le Club A et le Club B avec des actions incroyables et des buts mémorables.</p>
\t\t\t\t<div class=\"video-meta d-flex flex-wrap gap-3\">
\t\t\t\t\t<span class=\"date\">Publié le 1er Décembre 2025</span>
\t\t\t\t\t<span class=\"reseaux\">
\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">F</a>
\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">T</a>
\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">I</a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</section>

\t<section class=\"players_section my-5\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title\">Nos Sportifs</h2>
\t\t\t<div class=\"players_slider d-flex flex-wrap gap-3\">

\t\t\t\t<div class=\"player_card\">
\t\t\t\t\t<img src=\"assets/img/home/player_placeholder.jpg\" alt=\"Joueur\">
\t\t\t\t\t<div class=\"player_info\">
\t\t\t\t\t\t<h5>Joueur 1</h5>
\t\t\t\t\t\t<p>Poste : Défenseur</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"player_card\">
\t\t\t\t\t<img src=\"assets/img/home/player_placeholder.jpg\" alt=\"Joueur\">
\t\t\t\t\t<div class=\"player_info\">
\t\t\t\t\t\t<h5>Joueur 2</h5>
\t\t\t\t\t\t<p>Poste : Milieu</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"player_card\">
\t\t\t\t\t<img src=\"assets/img/home/player_placeholder.jpg\" alt=\"Joueur\">
\t\t\t\t\t<div class=\"player_info\">
\t\t\t\t\t\t<h5>Joueur 3</h5>
\t\t\t\t\t\t<p>Poste : Attaquant</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  108 => 11,  106 => 10,  103 => 9,  93 => 8,  77 => 6,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Haiti Sport Network — NVK
{% endblock %}

{% block slide %}{% endblock %}

{% block body %}

\t{% include \"_include/slide.php\" %}

\t<div class=\"home_card_nvk d-flex flex-wrap gap-3\">

\t\t<div class=\"card\">
\t\t\t<img src=\"assets/img/home/ht_card.jpg\" class=\"card-img-top\" alt=\"HT Card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">Championnat Haïtien</h5>
\t\t\t\t<p class=\"card-text\">Retrouvez les résultats et les derniers matchs du championnat haïtien.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card\">
\t\t\t<img src=\"assets/img/home/ligue_ht.png\" class=\"card-img-top\" alt=\"Ligue HT\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">Ligue Haïtienne</h5>
\t\t\t\t<p class=\"card-text\">Découvrez les clubs participants et les classements officiels.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card\">
\t\t\t<img src=\"assets/img/home/sportif_ht.jpg\" class=\"card-img-top\" alt=\"Sportif HT\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">Sportifs</h5>
\t\t\t\t<p class=\"card-text\">Les profils des meilleurs sportifs haïtiens et leurs performances.</p>
\t\t\t</div>
\t\t</div>

\t</div>

\t<section class=\"video_du_jour_section\">
\t\t<div
\t\t\tclass=\"video_du_jour d-flex flex-wrap gap-4\">

\t\t\t<!-- Video -->
\t\t\t<div class=\"video-container\">
\t\t\t\t<video src=\"assets/video/video_du_jour.mp4\" controls poster=\"assets/img/video_thumbnail.jpg\"></video>
\t\t\t</div>

\t\t\t<!-- Texte et infos -->
\t\t\t<div class=\"video-info\">
\t\t\t\t<h3>Vidéo du Jour : Match de la Ligue Haïtienne</h3>
\t\t\t\t<p>Revivez les meilleurs moments du match entre le Club A et le Club B avec des actions incroyables et des buts mémorables.</p>
\t\t\t\t<div class=\"video-meta d-flex flex-wrap gap-3\">
\t\t\t\t\t<span class=\"date\">Publié le 1er Décembre 2025</span>
\t\t\t\t\t<span class=\"reseaux\">
\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">F</a>
\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">T</a>
\t\t\t\t\t\t<a href=\"#\" class=\"social-icon\">I</a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</section>

\t<section class=\"players_section my-5\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title\">Nos Sportifs</h2>
\t\t\t<div class=\"players_slider d-flex flex-wrap gap-3\">

\t\t\t\t<div class=\"player_card\">
\t\t\t\t\t<img src=\"assets/img/home/player_placeholder.jpg\" alt=\"Joueur\">
\t\t\t\t\t<div class=\"player_info\">
\t\t\t\t\t\t<h5>Joueur 1</h5>
\t\t\t\t\t\t<p>Poste : Défenseur</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"player_card\">
\t\t\t\t\t<img src=\"assets/img/home/player_placeholder.jpg\" alt=\"Joueur\">
\t\t\t\t\t<div class=\"player_info\">
\t\t\t\t\t\t<h5>Joueur 2</h5>
\t\t\t\t\t\t<p>Poste : Milieu</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"player_card\">
\t\t\t\t\t<img src=\"assets/img/home/player_placeholder.jpg\" alt=\"Joueur\">
\t\t\t\t\t<div class=\"player_info\">
\t\t\t\t\t\t<h5>Joueur 3</h5>
\t\t\t\t\t\t<p>Poste : Attaquant</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</section>


{% endblock %}
", "home/index.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\home\\index.html.twig");
    }
}
