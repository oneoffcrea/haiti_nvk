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

/* sportif/index.html.twig */
class __TwigTemplate_5cce853d19b61060e2ddbf8d176b74ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sportif/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sportif/index.html.twig"));

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

        yield "Sportifs — Haiti Sport Network
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
        yield "
\t<div
\t\tclass=\"container-fluid\">

\t\t";
        // line 12
        yield "\t\t<section class=\"bg-dark text-white py-5 text-center\">
\t\t\t<div class=\"container px-3\">
\t\t\t\t<h2 class=\"mb-4\">Référencez et découvrez les joueurs haïtiens de différents clubs</h2>
\t\t\t\t<div class=\"col-lg-6 mx-auto\">
\t\t\t\t\t<input type=\"text\" id=\"joueurSearch\" class=\"form-control form-control-lg\" placeholder=\"Rechercher un joueur par nom, poste, club...\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t";
        // line 22
        yield "\t\t<section class=\"py-5\">
\t\t\t<div class=\"container px-3\">
\t\t\t\t<h2 class=\"text-center mb-5\">Nos Sportifs</h2>
\t\t\t\t<div class=\"d-flex flex-nowrap overflow-auto gap-3 pb-3\" style=\"scrollbar-width: thin;\">

\t\t\t\t\t<div class=\"player-card flex-shrink-0\" style=\"width: 280px;\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/player1.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Joueur 1\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 1</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text small\">Poste : Défenseur</p>
\t\t\t\t\t\t\t\t<p class=\"card-text small text-muted\">Catégorie : Football</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary w-100\">Voir le profil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"player-card flex-shrink-0\" style=\"width: 280px;\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/player2.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Joueur 2\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 2</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text small\">Poste : Milieu</p>
\t\t\t\t\t\t\t\t<p class=\"card-text small text-muted\">Catégorie : Handball</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary w-100\">Voir le profil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"player-card flex-shrink-0\" style=\"width: 280px;\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/player3.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Joueur 3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 3</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text small\">Poste : Attaquant</p>
\t\t\t\t\t\t\t\t<p class=\"card-text small text-muted\">Catégorie : Football</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary w-100\">Voir le profil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"player-card flex-shrink-0\" style=\"width: 280px;\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/player4.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Joueur 4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 4</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text small\">Poste : Gardien</p>
\t\t\t\t\t\t\t\t<p class=\"card-text small text-muted\">Catégorie : Handball</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary w-100\">Voir le profil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t";
        // line 80
        yield "\t\t<section class=\"py-5 bg-light\">
\t\t\t<div class=\"container px-3\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row g-5\">

\t\t\t\t\t";
        // line 86
        yield "\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/player_detail.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Photo Joueur\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Joueur 1</h4>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t<strong>Poste :</strong>
\t\t\t\t\t\t\t\t\t\tDéfenseur</li>
\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t<strong>Catégorie :</strong>
\t\t\t\t\t\t\t\t\t\tFootball</li>
\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t<strong>Age :</strong>
\t\t\t\t\t\t\t\t\t\t25 ans</li>
\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t<strong>Taille :</strong>
\t\t\t\t\t\t\t\t\t\t1m80</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 110
        yield "\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title mb-4\">Demande de contact</h4>
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Votre nom\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"4\" placeholder=\"Votre message\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">Envoyer</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t";
        // line 138
        yield "\t\t<section class=\"bg-dark text-white py-5\">
\t\t\t<div class=\"container px-3\">
\t\t\t\t<h2 class=\"text-center mb-5\">Galerie du joueur</h2>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Photo 1\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Photo 2\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Photo 3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Photo 4\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Photo 5\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sportif/index.html.twig";
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
        return array (  293 => 164,  285 => 159,  277 => 154,  269 => 149,  261 => 144,  253 => 138,  224 => 110,  200 => 88,  196 => 86,  189 => 80,  172 => 65,  157 => 53,  142 => 41,  127 => 29,  118 => 22,  107 => 12,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Sportifs — Haiti Sport Network
{% endblock %}

{% block body %}

\t<div
\t\tclass=\"container-fluid\">

\t\t{# Barre de recherche full width #}
\t\t<section class=\"bg-dark text-white py-5 text-center\">
\t\t\t<div class=\"container px-3\">
\t\t\t\t<h2 class=\"mb-4\">Référencez et découvrez les joueurs haïtiens de différents clubs</h2>
\t\t\t\t<div class=\"col-lg-6 mx-auto\">
\t\t\t\t\t<input type=\"text\" id=\"joueurSearch\" class=\"form-control form-control-lg\" placeholder=\"Rechercher un joueur par nom, poste, club...\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t{# Slider des joueurs (scroll horizontal responsive) #}
\t\t<section class=\"py-5\">
\t\t\t<div class=\"container px-3\">
\t\t\t\t<h2 class=\"text-center mb-5\">Nos Sportifs</h2>
\t\t\t\t<div class=\"d-flex flex-nowrap overflow-auto gap-3 pb-3\" style=\"scrollbar-width: thin;\">

\t\t\t\t\t<div class=\"player-card flex-shrink-0\" style=\"width: 280px;\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/player1.jpg') }}\" class=\"card-img-top\" alt=\"Joueur 1\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 1</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text small\">Poste : Défenseur</p>
\t\t\t\t\t\t\t\t<p class=\"card-text small text-muted\">Catégorie : Football</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary w-100\">Voir le profil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"player-card flex-shrink-0\" style=\"width: 280px;\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/player2.jpg') }}\" class=\"card-img-top\" alt=\"Joueur 2\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 2</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text small\">Poste : Milieu</p>
\t\t\t\t\t\t\t\t<p class=\"card-text small text-muted\">Catégorie : Handball</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary w-100\">Voir le profil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"player-card flex-shrink-0\" style=\"width: 280px;\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/player3.jpg') }}\" class=\"card-img-top\" alt=\"Joueur 3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 3</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text small\">Poste : Attaquant</p>
\t\t\t\t\t\t\t\t<p class=\"card-text small text-muted\">Catégorie : Football</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary w-100\">Voir le profil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"player-card flex-shrink-0\" style=\"width: 280px;\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/player4.jpg') }}\" class=\"card-img-top\" alt=\"Joueur 4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Joueur 4</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text small\">Poste : Gardien</p>
\t\t\t\t\t\t\t\t<p class=\"card-text small text-muted\">Catégorie : Handball</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary w-100\">Voir le profil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t{# Fiche joueur + formulaire contact #}
\t\t<section class=\"py-5 bg-light\">
\t\t\t<div class=\"container px-3\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row g-5\">

\t\t\t\t\t{# Fiche joueur #}
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/player_detail.jpg') }}\" class=\"card-img-top\" alt=\"Photo Joueur\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Joueur 1</h4>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t<strong>Poste :</strong>
\t\t\t\t\t\t\t\t\t\tDéfenseur</li>
\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t<strong>Catégorie :</strong>
\t\t\t\t\t\t\t\t\t\tFootball</li>
\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t<strong>Age :</strong>
\t\t\t\t\t\t\t\t\t\t25 ans</li>
\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t<strong>Taille :</strong>
\t\t\t\t\t\t\t\t\t\t1m80</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{# Formulaire contact #}
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title mb-4\">Demande de contact</h4>
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Votre nom\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"4\" placeholder=\"Votre message\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">Envoyer</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t{# Galerie photos #}
\t\t<section class=\"bg-dark text-white py-5\">
\t\t\t<div class=\"container px-3\">
\t\t\t\t<h2 class=\"text-center mb-5\">Galerie du joueur</h2>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/gallery1.jpg') }}\" class=\"img-fluid rounded\" alt=\"Photo 1\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/gallery2.jpg') }}\" class=\"img-fluid rounded\" alt=\"Photo 2\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/gallery3.jpg') }}\" class=\"img-fluid rounded\" alt=\"Photo 3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/gallery4.jpg') }}\" class=\"img-fluid rounded\" alt=\"Photo 4\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"gallery-img\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/gallery5.jpg') }}\" class=\"img-fluid rounded\" alt=\"Photo 5\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>

{% endblock %}
", "sportif/index.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\sportif\\index.html.twig");
    }
}
