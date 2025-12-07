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

/* _include/infos_header.php */
class __TwigTemplate_64b5eb868625b6d3e2c6c05d98596134 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_include/infos_header.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_include/infos_header.php"));

        // line 1
        yield "<div class=\"infos_header_nvk container-fluid py-2\">
    <div class=\"row align-items-center text-center text-md-start\">

        <!-- Réseaux sociaux -->
        <div class=\"col-12 col-md-4 d-flex justify-content-center justify-content-md-start gap-3 mb-2 mb-md-0\">
            <a href=\"#\" class=\"social-link\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\" class=\"social-link\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\" class=\"social-link\"><i class=\"bi bi-youtube\"></i></a>
            <a href=\"#\" class=\"social-link\"><i class=\"bi bi-twitter-x\"></i></a>
        </div>

        <!-- Slogan -->
        <div class=\"col-12 col-md-4 slogan_nvk\">
            <span>Haiti Sport Network – Le sport, notre passion 🇭🇹🔥</span>
        </div>

        <!-- Contact -->
        <div class=\"col-12 col-md-4 d-flex justify-content-center justify-content-md-end flex-column flex-md-row gap-3\">
            <div><i class=\"bi bi-telephone\"></i> +509 45 67 89 10</div>
            <div><i class=\"bi bi-envelope\"></i> contact@haitisportnetwork.com</div>
        </div>

    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_include/infos_header.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"infos_header_nvk container-fluid py-2\">
    <div class=\"row align-items-center text-center text-md-start\">

        <!-- Réseaux sociaux -->
        <div class=\"col-12 col-md-4 d-flex justify-content-center justify-content-md-start gap-3 mb-2 mb-md-0\">
            <a href=\"#\" class=\"social-link\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\" class=\"social-link\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\" class=\"social-link\"><i class=\"bi bi-youtube\"></i></a>
            <a href=\"#\" class=\"social-link\"><i class=\"bi bi-twitter-x\"></i></a>
        </div>

        <!-- Slogan -->
        <div class=\"col-12 col-md-4 slogan_nvk\">
            <span>Haiti Sport Network – Le sport, notre passion 🇭🇹🔥</span>
        </div>

        <!-- Contact -->
        <div class=\"col-12 col-md-4 d-flex justify-content-center justify-content-md-end flex-column flex-md-row gap-3\">
            <div><i class=\"bi bi-telephone\"></i> +509 45 67 89 10</div>
            <div><i class=\"bi bi-envelope\"></i> contact@haitisportnetwork.com</div>
        </div>

    </div>
</div>", "_include/infos_header.php", "C:\\Users\\user\\Documents\\haiti_nvk\\templates\\_include\\infos_header.php");
    }
}
