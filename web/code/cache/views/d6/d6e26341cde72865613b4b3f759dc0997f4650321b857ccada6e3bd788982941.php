<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* app/home/home.twig */
class __TwigTemplate_fda6fea5ee1da1c2ff3ef91acf5fe15088dfabf7e458ae976b3846d8708cd3ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "framework/app/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("framework/app/base.twig", "app/home/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"container main\">
\t\t<div class=\"text-center\">
\t\t\t<h2>Example</h2>
\t\t\t<p>This is an example single-page application.</p>
\t\t</div>

\t\t";
        // line 10
        $this->loadTemplate("app/example/form.twig", "app/home/home.twig", 10)->display($context);
        // line 11
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "app/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'framework/app/base.twig' %}

{% block content %}
\t<div class=\"container main\">
\t\t<div class=\"text-center\">
\t\t\t<h2>Example</h2>
\t\t\t<p>This is an example single-page application.</p>
\t\t</div>

\t\t{% include 'app/example/form.twig' %}
\t</div>
{% endblock %}", "app/home/home.twig", "/code/views/app/home/home.twig");
    }
}
