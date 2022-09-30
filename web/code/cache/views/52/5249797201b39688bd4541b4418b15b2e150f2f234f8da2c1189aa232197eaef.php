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

/* framework/app/base.twig */
class __TwigTemplate_53860ea8bc822433151696868b54cf40614e775406c91f60bf7ac3336d42633f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Example</title>
        <meta name=\"description\" content=\"Example\">
        <link href=\"/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />

        <!-- Styles -->
        <link rel=\"stylesheet\" href=\"/vendor/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/main.css?v=";
        // line 11
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\">
        
        <!-- Scripts -->
        <script src=\"/vendor/jquery/js/jquery.js\"></script>
        <script src=\"/vendor/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/vendor/axios/js/axios.min.js\"></script>
        <script src=\"/vendor/lodash/js/lodash.min.js\"></script>
        <script src=\"/assets/js/framework/framework.js?v=";
        // line 18
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"/assets/js/app/app.js?v=";
        // line 19
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
    </head>

    <body id=\"body\">
        <main id=\"main\">
            ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "        </main>
    </body>
</html>";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "framework/app/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  74 => 25,  72 => 24,  64 => 19,  60 => 18,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Example</title>
        <meta name=\"description\" content=\"Example\">
        <link href=\"/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />

        <!-- Styles -->
        <link rel=\"stylesheet\" href=\"/vendor/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/main.css?v={{ version }}\">
        
        <!-- Scripts -->
        <script src=\"/vendor/jquery/js/jquery.js\"></script>
        <script src=\"/vendor/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/vendor/axios/js/axios.min.js\"></script>
        <script src=\"/vendor/lodash/js/lodash.min.js\"></script>
        <script src=\"/assets/js/framework/framework.js?v={{ version }}\"></script>
        <script src=\"/assets/js/app/app.js?v={{ version }}\"></script>
    </head>

    <body id=\"body\">
        <main id=\"main\">
            {% block content %}{% endblock %}
        </main>
    </body>
</html>", "framework/app/base.twig", "/code/views/framework/app/base.twig");
    }
}
