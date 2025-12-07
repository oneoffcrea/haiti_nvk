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

/* club/index.html.twig */
class __TwigTemplate_70099c57a30a1ebe69a7d1c368a50cd5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

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

        yield "Page Club — Haiti Sport Network
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
\t<div class=\"container-fluid my-5 club_page_nvk\">

\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- ====================== COLONNE 1 ====================== -->
\t\t\t<div
\t\t\t\tclass=\"col-lg-8 col-12 mb-4\">

\t\t\t\t<!-- === BANNIÈRE DU CLUB === -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"club_banner_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Bannière du club\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- === PROFIL DU CLUB === -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"club_profile_card_nvk p-4\">

\t\t\t\t\t\t\t<h3 class=\"mb-3\">Profil du Club</h3>

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Nom du club :</strong>
\t\t\t\t\t\t\t\t<!-- Club name -->
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Date de création :</strong>
\t\t\t\t\t\t\t\t<!-- Date -->
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Catégorie :</strong>
\t\t\t\t\t\t\t\t<!-- Football, Handball etc. -->
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Localisation :</strong>
\t\t\t\t\t\t\t\t<!-- Ville, Adresse -->
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Description :</strong>
\t\t\t\t\t\t\t\tLe club est reconnu pour son engagement dans le développement sportif en Haïti.</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- === PARTENARIATS === -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<h3 class=\"text-white mb-3\">Partenariats</h3>

\t\t\t\t\t<div class=\"col-md-4 col-6 mb-3\">
\t\t\t\t\t\t<div class=\"club_partner_card_nvk p-3 text-center\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Logo partenaire\" class=\"partner_img_nvk\">
\t\t\t\t\t\t\t<p class=\"mt-2\">Nom partenaire</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 col-6 mb-3\">
\t\t\t\t\t\t<div class=\"club_partner_card_nvk p-3 text-center\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Logo partenaire\" class=\"partner_img_nvk\">
\t\t\t\t\t\t\t<p class=\"mt-2\">Nom partenaire</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 col-6 mb-3\">
\t\t\t\t\t\t<div class=\"club_partner_card_nvk p-3 text-center\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Logo partenaire\" class=\"partner_img_nvk\">
\t\t\t\t\t\t\t<p class=\"mt-2\">Nom partenaire</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- === FIN PARTENARIATS === -->

\t\t\t\t<!-- === GALERIE PHOTO === -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h3 class=\"text-white mb-3\">Galerie du Club</h3>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- === FIN GALERIE PHOTO === -->

\t\t\t</div>

\t\t\t<!-- ====================== COLONNE 2 ====================== -->
\t\t\t<div
\t\t\t\tclass=\"col-lg-4 col-12\">

\t\t\t\t<!-- === FORMULAIRE DE CONTACT === -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"club_contact_card_nvk p-4\">

\t\t\t\t\t\t\t<h3 class=\"mb-3\">Contactez le club</h3>

\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<label class=\"form-label\">Nom</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Prénom</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Téléphone</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Adresse email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Type de demande</label>
\t\t\t\t\t\t\t\t<select class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t<option>Demande informations générales</option>
\t\t\t\t\t\t\t\t\t<option>Recrutement</option>
\t\t\t\t\t\t\t\t\t<option>Emploi</option>
\t\t\t\t\t\t\t\t\t<option>Partenariats</option>
\t\t\t\t\t\t\t\t\t<option>Don</option>
\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t<label class=\"form-label\">Objet de la demande</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Votre message</label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control mb-3\" rows=\"4\"></textarea>

\t\t\t\t\t\t\t\t<label class=\"form-label\">Pièces jointes</label>
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-danger w-100\">Envoyer</button>

\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>

\t\t</div>

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
        return "club/index.html.twig";
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
        return array (  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page Club — Haiti Sport Network
{% endblock %}

{% block body %}

\t<div class=\"container-fluid my-5 club_page_nvk\">

\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- ====================== COLONNE 1 ====================== -->
\t\t\t<div
\t\t\t\tclass=\"col-lg-8 col-12 mb-4\">

\t\t\t\t<!-- === BANNIÈRE DU CLUB === -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"club_banner_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Bannière du club\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- === PROFIL DU CLUB === -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"club_profile_card_nvk p-4\">

\t\t\t\t\t\t\t<h3 class=\"mb-3\">Profil du Club</h3>

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Nom du club :</strong>
\t\t\t\t\t\t\t\t<!-- Club name -->
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Date de création :</strong>
\t\t\t\t\t\t\t\t<!-- Date -->
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Catégorie :</strong>
\t\t\t\t\t\t\t\t<!-- Football, Handball etc. -->
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Localisation :</strong>
\t\t\t\t\t\t\t\t<!-- Ville, Adresse -->
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Description :</strong>
\t\t\t\t\t\t\t\tLe club est reconnu pour son engagement dans le développement sportif en Haïti.</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- === PARTENARIATS === -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<h3 class=\"text-white mb-3\">Partenariats</h3>

\t\t\t\t\t<div class=\"col-md-4 col-6 mb-3\">
\t\t\t\t\t\t<div class=\"club_partner_card_nvk p-3 text-center\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Logo partenaire\" class=\"partner_img_nvk\">
\t\t\t\t\t\t\t<p class=\"mt-2\">Nom partenaire</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 col-6 mb-3\">
\t\t\t\t\t\t<div class=\"club_partner_card_nvk p-3 text-center\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Logo partenaire\" class=\"partner_img_nvk\">
\t\t\t\t\t\t\t<p class=\"mt-2\">Nom partenaire</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 col-6 mb-3\">
\t\t\t\t\t\t<div class=\"club_partner_card_nvk p-3 text-center\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"Logo partenaire\" class=\"partner_img_nvk\">
\t\t\t\t\t\t\t<p class=\"mt-2\">Nom partenaire</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- === FIN PARTENARIATS === -->

\t\t\t\t<!-- === GALERIE PHOTO === -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h3 class=\"text-white mb-3\">Galerie du Club</h3>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 mb-3\">
\t\t\t\t\t\t<div class=\"club_gallery_card_nvk\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- === FIN GALERIE PHOTO === -->

\t\t\t</div>

\t\t\t<!-- ====================== COLONNE 2 ====================== -->
\t\t\t<div
\t\t\t\tclass=\"col-lg-4 col-12\">

\t\t\t\t<!-- === FORMULAIRE DE CONTACT === -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"club_contact_card_nvk p-4\">

\t\t\t\t\t\t\t<h3 class=\"mb-3\">Contactez le club</h3>

\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<label class=\"form-label\">Nom</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Prénom</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Téléphone</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Adresse email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Type de demande</label>
\t\t\t\t\t\t\t\t<select class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t<option>Demande informations générales</option>
\t\t\t\t\t\t\t\t\t<option>Recrutement</option>
\t\t\t\t\t\t\t\t\t<option>Emploi</option>
\t\t\t\t\t\t\t\t\t<option>Partenariats</option>
\t\t\t\t\t\t\t\t\t<option>Don</option>
\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t<label class=\"form-label\">Objet de la demande</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<label class=\"form-label\">Votre message</label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control mb-3\" rows=\"4\"></textarea>

\t\t\t\t\t\t\t\t<label class=\"form-label\">Pièces jointes</label>
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control mb-3\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-danger w-100\">Envoyer</button>

\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>

\t\t</div>

\t</div>

{% endblock %}
", "club/index.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\club\\index.html.twig");
    }
}
