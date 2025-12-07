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

/* register_admin/index.html.twig */
class __TwigTemplate_6064e83d1a05c535c390086a42262bf9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register_admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register_admin/index.html.twig"));

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
\t\t\t\t\t\t<h1 class=\"display-4\">Creation Compte</h1>
\t\t\t\t\t\t<p class=\"lead\">Création de compte administrateur</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t\t<div class=\"row justify-content-center mt-5\">
\t\t\t<div class=\"col-md-4\">

\t\t\t\t<div
\t\t\t\t\tclass=\"bg-secondary rounded p-4 shadow\">

\t\t\t\t\t";
        // line 27
        yield "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 28
            yield "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 29
                yield "\t\t\t\t\t\t\t<div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "
\t\t\t\t\t";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 36, $this->source); })()), 'form_start');
        yield "
\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 37, $this->source); })()), 'errors');
        yield "

\t\t\t\t\t";
        // line 40
        yield "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label text-white"]]);
        yield "
\t\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 47
        yield "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label text-white"]]);
        yield "
\t\t\t\t\t\t";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 54
        yield "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), "second", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label text-white"]]);
        yield "
\t\t\t\t\t\t";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), "second", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), "second", [], "any", false, false, false, 57), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 60, $this->source); })()), 'rest');
        yield "

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark w-100 mt-3\">Se connecter</button>

\t\t\t\t\t";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRender"]) || array_key_exists("formRender", $context) ? $context["formRender"] : (function () { throw new RuntimeError('Variable "formRender" does not exist.', 64, $this->source); })()), 'form_end');
        yield "


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
        return "register_admin/index.html.twig";
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
        return array (  201 => 64,  194 => 60,  188 => 57,  184 => 56,  180 => 55,  177 => 54,  171 => 50,  167 => 49,  163 => 48,  160 => 47,  154 => 43,  150 => 42,  146 => 41,  143 => 40,  138 => 37,  134 => 36,  131 => 35,  125 => 34,  115 => 30,  110 => 29,  105 => 28,  100 => 27,  76 => 4,  63 => 3,  40 => 1,);
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
\t\t\t\t\t\t<h1 class=\"display-4\">Creation Compte</h1>
\t\t\t\t\t\t<p class=\"lead\">Création de compte administrateur</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t\t<div class=\"row justify-content-center mt-5\">
\t\t\t<div class=\"col-md-4\">

\t\t\t\t<div
\t\t\t\t\tclass=\"bg-secondary rounded p-4 shadow\">

\t\t\t\t\t{# Flash messages Bootstrap #}
\t\t\t\t\t{% for label, messages in app.flashes %}
\t\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t\t<div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{{ form_start(formRender) }}
\t\t\t\t\t{{ form_errors(formRender) }}

\t\t\t\t\t{# EMAIL #}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_label(formRender.email, null, {'label_attr': {'class': 'form-label text-white'}}) }}
\t\t\t\t\t\t{{ form_widget(formRender.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(formRender.email) }}
\t\t\t\t\t</div>

\t\t\t\t\t{# PASSWORD FIRST #}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_label(formRender.password.first, null, {'label_attr': {'class': 'form-label text-white'}}) }}
\t\t\t\t\t\t{{ form_widget(formRender.password.first, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(formRender.password.first) }}
\t\t\t\t\t</div>

\t\t\t\t\t{# PASSWORD CONFIRMATION #}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_label(formRender.password.second, null, {'label_attr': {'class': 'form-label text-white'}}) }}
\t\t\t\t\t\t{{ form_widget(formRender.password.second, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(formRender.password.second) }}
\t\t\t\t\t</div>

\t\t\t\t\t{{ form_rest(formRender) }}

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark w-100 mt-3\">Se connecter</button>

\t\t\t\t\t{{ form_end(formRender) }}


\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>


{% endblock %}
", "register_admin/index.html.twig", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\register_admin\\index.html.twig");
    }
}
