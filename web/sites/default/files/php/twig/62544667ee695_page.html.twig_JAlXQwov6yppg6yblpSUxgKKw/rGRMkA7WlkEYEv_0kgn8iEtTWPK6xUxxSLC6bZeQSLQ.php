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

/* themes/custom/exam/templates/page.html.twig */
class __TwigTemplate_5635894c48455d1cb80692c7c1a5b1a2ae5415acbd1d4e1ce441a50d6ee6d3f0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 54
        echo "    </header>

    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "    </div>
    ";
        // line 71
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 71) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 71)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 71))) {
            // line 72
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 73, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 78
        echo "    <footer class=\"site-footer\">
      ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "    </footer>
  </div>
</div>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 5))) {
            // line 6
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 6, $this->source), "html", null, true);
            echo ">
            ";
            // line 7
            if (($context["container_navbar"] ?? null)) {
                // line 8
                echo "            <div class=\"container\">
              ";
            }
            // line 10
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
              ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 11)) {
                // line 12
                echo "                <div class=\"form-inline navbar-form ml-auto\">
                  ";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 16
            echo "              ";
            if (($context["container_navbar"] ?? null)) {
                // line 17
                echo "            </div>
            ";
            }
            // line 19
            echo "          </nav>
        ";
        }
        // line 21
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 21, $this->source), "html", null, true);
        echo ">
          ";
        // line 22
        if (($context["container_navbar"] ?? null)) {
            // line 23
            echo "          <div class=\"container\">
            ";
        }
        // line 25
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 26) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 26))) {
            // line 27
            echo "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 27, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_class"] ?? null), 28, $this->source), "html", null, true);
            echo "\" id=\"CollapsingNavbar\">
                ";
            // line 29
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 30
                echo "                <div class=\"offcanvas-header\">
                  <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                </div>
                <div class=\"offcanvas-body\">
                  ";
            }
            // line 35
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
                  ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 36)) {
                // line 37
                echo "                    <div class=\"form-inline navbar-form justify-content-end\">
                      ";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "
                    </div>
                  ";
            }
            // line 41
            echo "                  ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 42
                echo "                </div>
                ";
            }
            // line 44
            echo "              </div>
            ";
        }
        // line 46
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 47
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 49
        echo "            ";
        if (($context["container_navbar"] ?? null)) {
            // line 50
            echo "          </div>
          ";
        }
        // line 52
        echo "        </nav>
      ";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 58, $this->source), "html", null, true);
        echo "\">
          ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            <main";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 61, $this->source), "html", null, true);
        echo ">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
              </section>
            </main>
          </div>
        </div>
      ";
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 80, $this->source), "html", null, true);
        echo "\">
          ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 81)) {
            // line 82
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 86
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 86,  261 => 83,  258 => 82,  256 => 81,  251 => 80,  247 => 79,  237 => 64,  231 => 61,  226 => 59,  221 => 58,  217 => 57,  212 => 52,  208 => 50,  205 => 49,  201 => 47,  198 => 46,  194 => 44,  190 => 42,  187 => 41,  181 => 38,  178 => 37,  176 => 36,  171 => 35,  164 => 30,  162 => 29,  158 => 28,  153 => 27,  151 => 26,  146 => 25,  142 => 23,  140 => 22,  135 => 21,  131 => 19,  127 => 17,  124 => 16,  118 => 13,  115 => 12,  113 => 11,  108 => 10,  104 => 8,  102 => 7,  97 => 6,  94 => 5,  90 => 4,  83 => 88,  81 => 79,  78 => 78,  71 => 74,  67 => 73,  64 => 72,  62 => 71,  59 => 70,  57 => 57,  52 => 54,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/exam/templates/page.html.twig", "/var/www/exam/web/themes/custom/exam/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 4, "if" => 71);
        static $filters = array("t" => 3, "escape" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
