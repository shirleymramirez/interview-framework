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

/* app/example/detail.twig */
class __TwigTemplate_312ba549c8ce4258290c8c56cb3cd4f125cfd61f126f199982dd871c36579206 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<p>ID: <span class=\"bold\">";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "</span></p>
<p>Created On: <span class=\"bold\">";
        // line 2
        echo twig_escape_filter($this->env, ($context["created"] ?? null), "html", null, true);
        echo "</span></p>
<p>Code: <span class=\"bold\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
        echo "</span></p>
<p>Description: <span class=\"bold\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo " </span></p>

<p>Sum is:<span class=\"bold\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span> </p>
";
    }

    public function getTemplateName()
    {
        return "app/example/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>ID: <span class=\"bold\">{{ id }}</span></p>
<p>Created On: <span class=\"bold\">{{ created }}</span></p>
<p>Code: <span class=\"bold\">{{ code }}</span></p>
<p>Description: <span class=\"bold\">{{ description }} </span></p>

<p>Sum is:<span class=\"bold\">{{ total }}</span> </p>
", "app/example/detail.twig", "/code/views/app/example/detail.twig");
    }
}
