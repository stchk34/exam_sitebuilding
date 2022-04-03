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

/* themes/custom/exam/templates/container.html.twig */
class __TwigTemplate_dd90f0ba2482b1338e74c667b7eb76387a71cab09ac4b6e5d1d7e9e91a77f030 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
";
        // line 22
        $context["classes"] = [0 => (( !twig_get_attribute($this->env, $this->source,         // line 23
($context["attributes"] ?? null), "hasClass", [0 => "toolbar-menu-administration"], "method", false, false, true, 23)) ? ("form-group") : ("")), 1 => ((        // line 24
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 2 => ((        // line 25
($context["has_parent"] ?? null)) ? ("form-wrapper") : (""))];
        // line 27
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 27, $this->source), "html", null, true);
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 27,  45 => 25,  44 => 24,  43 => 23,  42 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/exam/templates/container.html.twig", "/var/www/exam/web/themes/custom/exam/templates/container.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
