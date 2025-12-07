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
class __TwigTemplate_f27afd6b5c584899ced96131dd767d6f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sportif/index.html.twig"));

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

        yield "Sportifs — Haiti Sport Network
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
\t<div
\t\tclass=\"container-fluid\">

\t\t<!-- Barre de recherche full width avec titre -->
\t\t<section class=\"row search_joueur_nvk_section py-5 bg-dark text-center text-white\">
\t\t\t<div class=\"container-fluid px-3\">
\t\t\t\t<h2 class=\"mb-3\">Référencez et découvrez les joueurs haïtiens de différents clubs</h2>
\t\t\t\t<input type=\"text\" id=\"joueurSearch\" class=\"form-control w-100\" placeholder=\"Rechercher un joueur par nom, poste, club...\">
\t\t\t</div>
\t\t</section>

\t\t<!-- Slider des joueurs -->
\t\t<section class=\"row joueur_nvk_slider_section py-5\">
\t\t\t<div class=\"container-fluid px-3\">
\t\t\t\t<h2 class=\"section-title text-center mb-4\">Nos Sportifs</h2>
\t\t\t\t<div class=\"joueur_nvk_slider d-flex overflow-auto gap-3\">

\t\t\t\t\t<div class=\"joueur_nvk_card\">
\t\t\t\t\t\t<img src=\"\" alt=\"Joueur 1\">
\t\t\t\t\t\t<div class=\"joueur_nvk_info\">
\t\t\t\t\t\t\t<h5>Joueur 1</h5>
\t\t\t\t\t\t\t<p>Poste : Défenseur</p>
\t\t\t\t\t\t\t<p>Catégorie : Football</p>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"joueur_nvk_card\">
\t\t\t\t\t\t<img src=\"\" alt=\"Joueur 2\">
\t\t\t\t\t\t<div class=\"joueur_nvk_info\">
\t\t\t\t\t\t\t<h5>Joueur 2</h5>
\t\t\t\t\t\t\t<p>Poste : Milieu</p>
\t\t\t\t\t\t\t<p>Catégorie : Handball</p>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"joueur_nvk_card\">
\t\t\t\t\t\t<img src=\"\" alt=\"Joueur 3\">
\t\t\t\t\t\t<div class=\"joueur_nvk_info\">
\t\t\t\t\t\t\t<h5>Joueur 3</h5>
\t\t\t\t\t\t\t<p>Poste : Attaquant</p>
\t\t\t\t\t\t\t<p>Catégorie : Football</p>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"joueur_nvk_card\">
\t\t\t\t\t\t<img src=\"\" alt=\"Joueur 4\">
\t\t\t\t\t\t<div class=\"joueur_nvk_info\">
\t\t\t\t\t\t\t<h5>Joueur 4</h5>
\t\t\t\t\t\t\t<p>Poste : Gardien</p>
\t\t\t\t\t\t\t<p>Catégorie : Handball</p>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Ligne avec 2 colonnes : fiche joueur + contact -->
\t\t<section class=\"row joueur_nvk_detail_contact py-5\">
\t\t\t<div class=\"container-fluid px-3\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row g-4\">

\t\t\t\t\t<!-- Col gauche : fiche joueur -->
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"joueur_nvk_detail_card p-3\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Photo Joueur\" class=\"img-fluid mb-3\">
\t\t\t\t\t\t\t<h4>Joueur 1</h4>
\t\t\t\t\t\t\t<p>Poste : Défenseur</p>
\t\t\t\t\t\t\t<p>Catégorie : Football</p>
\t\t\t\t\t\t\t<p>Age : 25 ans</p>
\t\t\t\t\t\t\t<p>Taille : 1m80</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Col droite : formulaire contact -->
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"contact_form_card p-3\">
\t\t\t\t\t\t\t<h4>Demande de contact</h4>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Nom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Votre nom\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Message</label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"4\" placeholder=\"Votre message\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">Envoyer</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Mini galerie full width -->
\t\t<section class=\"row joueur_nvk_gallery py-5 bg-dark\">
\t\t\t<div class=\"container-fluid px-3\">
\t\t\t\t<h2 class=\"section-title text-center text-white mb-4\">Galerie du joueur</h2>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center gap-3\">

\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 1\"></div>
\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 2\"></div>
\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 3\"></div>
\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 4\"></div>
\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 5\"></div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Sportifs — Haiti Sport Network
{% endblock %}

{% block body %}

\t<div
\t\tclass=\"container-fluid\">

\t\t<!-- Barre de recherche full width avec titre -->
\t\t<section class=\"row search_joueur_nvk_section py-5 bg-dark text-center text-white\">
\t\t\t<div class=\"container-fluid px-3\">
\t\t\t\t<h2 class=\"mb-3\">Référencez et découvrez les joueurs haïtiens de différents clubs</h2>
\t\t\t\t<input type=\"text\" id=\"joueurSearch\" class=\"form-control w-100\" placeholder=\"Rechercher un joueur par nom, poste, club...\">
\t\t\t</div>
\t\t</section>

\t\t<!-- Slider des joueurs -->
\t\t<section class=\"row joueur_nvk_slider_section py-5\">
\t\t\t<div class=\"container-fluid px-3\">
\t\t\t\t<h2 class=\"section-title text-center mb-4\">Nos Sportifs</h2>
\t\t\t\t<div class=\"joueur_nvk_slider d-flex overflow-auto gap-3\">

\t\t\t\t\t<div class=\"joueur_nvk_card\">
\t\t\t\t\t\t<img src=\"\" alt=\"Joueur 1\">
\t\t\t\t\t\t<div class=\"joueur_nvk_info\">
\t\t\t\t\t\t\t<h5>Joueur 1</h5>
\t\t\t\t\t\t\t<p>Poste : Défenseur</p>
\t\t\t\t\t\t\t<p>Catégorie : Football</p>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"joueur_nvk_card\">
\t\t\t\t\t\t<img src=\"\" alt=\"Joueur 2\">
\t\t\t\t\t\t<div class=\"joueur_nvk_info\">
\t\t\t\t\t\t\t<h5>Joueur 2</h5>
\t\t\t\t\t\t\t<p>Poste : Milieu</p>
\t\t\t\t\t\t\t<p>Catégorie : Handball</p>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"joueur_nvk_card\">
\t\t\t\t\t\t<img src=\"\" alt=\"Joueur 3\">
\t\t\t\t\t\t<div class=\"joueur_nvk_info\">
\t\t\t\t\t\t\t<h5>Joueur 3</h5>
\t\t\t\t\t\t\t<p>Poste : Attaquant</p>
\t\t\t\t\t\t\t<p>Catégorie : Football</p>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"joueur_nvk_card\">
\t\t\t\t\t\t<img src=\"\" alt=\"Joueur 4\">
\t\t\t\t\t\t<div class=\"joueur_nvk_info\">
\t\t\t\t\t\t\t<h5>Joueur 4</h5>
\t\t\t\t\t\t\t<p>Poste : Gardien</p>
\t\t\t\t\t\t\t<p>Catégorie : Handball</p>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary mt-2\">Voir le profil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Ligne avec 2 colonnes : fiche joueur + contact -->
\t\t<section class=\"row joueur_nvk_detail_contact py-5\">
\t\t\t<div class=\"container-fluid px-3\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row g-4\">

\t\t\t\t\t<!-- Col gauche : fiche joueur -->
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"joueur_nvk_detail_card p-3\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Photo Joueur\" class=\"img-fluid mb-3\">
\t\t\t\t\t\t\t<h4>Joueur 1</h4>
\t\t\t\t\t\t\t<p>Poste : Défenseur</p>
\t\t\t\t\t\t\t<p>Catégorie : Football</p>
\t\t\t\t\t\t\t<p>Age : 25 ans</p>
\t\t\t\t\t\t\t<p>Taille : 1m80</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Col droite : formulaire contact -->
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"contact_form_card p-3\">
\t\t\t\t\t\t\t<h4>Demande de contact</h4>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Nom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Votre nom\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Message</label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"4\" placeholder=\"Votre message\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">Envoyer</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Mini galerie full width -->
\t\t<section class=\"row joueur_nvk_gallery py-5 bg-dark\">
\t\t\t<div class=\"container-fluid px-3\">
\t\t\t\t<h2 class=\"section-title text-center text-white mb-4\">Galerie du joueur</h2>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center gap-3\">

\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 1\"></div>
\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 2\"></div>
\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 3\"></div>
\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 4\"></div>
\t\t\t\t\t<div class=\"gallery_card\"><img src=\"\" alt=\"Photo 5\"></div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>


{% endblock %}
", "sportif/index.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\sportif\\index.html.twig");
    }
}
