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

/* themes/custom/exam/templates/menu--main.html.twig */
class __TwigTemplate_253898754e3c3dde1abd85e59c007c7537f9a0f4b2256472844740850aecdffc extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "
";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 45, $this->source))), 2 => "nav"])), ((($context["dropdown_classes"] ?? null)) ? (($context["dropdown_classes"] ?? null)) : ([0 => "dropdown-menu"]))], 45, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 1
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, $__dropdown_classes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "dropdown_classes" => $__dropdown_classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 3
                echo "    <ul";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => (((($context["menu_level"] ?? null) == 0)) ? (($context["classes"] ?? null)) : (($context["dropdown_classes"] ?? null)))], "method", false, false, true, 3), 3, $this->source), "html", null, true);
                echo ">
      ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 5
                    echo "        ";
                    // line 6
                    $context["item_classes"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 6), "getOption", [0 => "container_attributes"], "method", false, false, true, 6), "class", [], "any", false, false, true, 6), 6, $this->source), " ");
                    // line 8
                    echo "        ";
                    // line 9
                    $context["item_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,                     // line 10
$context["item"], "is_expanded", [], "any", false, false, true, 10) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 10))) ? ("expanded dropdown") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 11
$context["item"], "in_active_trail", [], "any", false, false, true, 11)) ? ("active active-trail") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 12
$context["loop"], "first", [], "any", false, false, true, 12)) ? ("first") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 13
$context["loop"], "last", [], "any", false, false, true, 13)) ? ("last") : (""))];
                    // line 16
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 16), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 17
                    $context["link_title"] = twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17);
                    // line 18
                    echo "          ";
                    $context["link_attributes"] = twig_get_attribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", false, false, true, 18);
                    // line 19
                    echo "          ";
                    if ((((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 19)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 19))) {
                        // line 20
                        echo "            ";
                        ob_start(function () { return ''; });
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 20, $this->source), "html", null, true);
                        echo " <span class=\"caret\"></span>";
                        $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 21
                        echo "            ";
                        $context["link_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => "dropdown-toggle"], "method", false, false, true, 21), "setAttribute", [0 => "data-toggle", 1 => "dropdown"], "method", false, false, true, 21);
                        // line 22
                        echo "          ";
                    }
                    // line 23
                    echo "          ";
                    // line 24
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 24) == "Home")) {
                        // line 25
                        echo "            ";
                        $context["link_title"] = ('' === $tmp = "              <i class=\"fas fa-home\"></i>
            ") ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 28
                        echo "          ";
                    }
                    // line 29
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 29), 29, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => ((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 29)) ? ("active-trail") : (""))], "method", false, false, true, 29), 29, $this->source)), "html", null, true);
                    echo "
          ";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 30)) {
                        // line 31
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 31), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), (($context["menu_level"] ?? null) + 1), ($context["classes"] ?? null), ($context["dropdown_classes"] ?? null)], 31, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 33
                    echo "
        </li>
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 36,  153 => 33,  147 => 31,  145 => 30,  140 => 29,  137 => 28,  133 => 25,  130 => 24,  128 => 23,  125 => 22,  122 => 21,  116 => 20,  113 => 19,  110 => 18,  108 => 17,  103 => 16,  101 => 13,  100 => 12,  99 => 11,  98 => 10,  97 => 9,  95 => 8,  93 => 6,  91 => 5,  74 => 4,  69 => 3,  66 => 2,  49 => 1,  43 => 45,  40 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/exam/templates/menu--main.html.twig", "/var/www/exam/web/themes/custom/exam/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 1, "if" => 2, "for" => 4, "set" => 6);
        static $filters = array("clean_class" => 45, "escape" => 3, "split" => 6);
        static $functions = array("link" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'for', 'set', 'import'],
                ['clean_class', 'escape', 'split'],
                ['link']
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
