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

/* login/index.html.twig */
class __TwigTemplate_ed598b3ea45d4f039735e267ce8d5c1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "
\t<div class=\"container mt-5\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-8 text-center\">

\t\t\t\t<div class=\"jumbotron jumbotron-fluid\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1 class=\"display-4\">Connexion Administrateur</h1>
\t\t\t\t\t\t<p class=\"lead\">Vous devez vous connecter pour administrer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-4 bg-secondary rounded p-3\">

\t\t\t\t";
        // line 23
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageKey", [], "any", false, false, false, 25), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageData", [], "any", false, false, false, 25), "security"), "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 28
        yield "
\t\t\t\t<form action=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"username\" class=\"form-label\">Email :</label>
\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"password\" class=\"form-label\">Password :</label>
\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark w-25\">Connexion</button>
\t\t\t\t</form>

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
        return "login/index.html.twig";
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
        return array (  118 => 33,  111 => 29,  108 => 28,  102 => 25,  99 => 24,  97 => 23,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div class=\"container mt-5\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-8 text-center\">

\t\t\t\t<div class=\"jumbotron jumbotron-fluid\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1 class=\"display-4\">Connexion Administrateur</h1>
\t\t\t\t\t\t<p class=\"lead\">Vous devez vous connecter pour administrer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-4 bg-secondary rounded p-3\">

\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t{{ error.messageKey|trans(error.messageData, 'security') }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t<form action=\"{{ path('app_login') }}\" method=\"post\">

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"username\" class=\"form-label\">Email :</label>
\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"password\" class=\"form-label\">Password :</label>
\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark w-25\">Connexion</button>
\t\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "login/index.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\login\\index.html.twig");
    }
}
