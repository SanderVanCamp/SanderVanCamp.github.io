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

/* themes/custom/mrshndr/templates/layout/page.html.twig */
class __TwigTemplate_41f07628f9a9d4e9d1f813a1fa7515f756517703a4e3a5effb7bae0557ecac4e extends \Twig\Template
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
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("block" => 4, "if" => 58);
        $filters = array("t" => 3, "escape" => 60);
        $functions = array("attach_library" => 134);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                ['attach_library']
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"page-wrapper\" class=\"bg-light\">
  <div id=\"page\" class=\"pt-5\">
    <header id=\"header\" class=\"header container\" role=\"banner\" aria-label=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 57
        echo "    </header>
    ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 58)) {
            // line 59
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 60, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 65
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 65)) {
            // line 66
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 73
            echo "    ";
        }
        // line 74
        echo "    <div class=\"layout-main-wrapper clearfix pt-3\" id=\"main-wrapper\">
      ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "    </div>
    ";
        // line 103
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 103) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 103)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 103))) {
            // line 104
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 105, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
          ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
          ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 112
        echo "    <footer class=\"site-footer\">
      ";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
        // line 130
        echo "    </footer>
  </div>
</div>

";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mrshndr/page"), "html", null, true);
        echo "
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
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
              ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
              ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 12)) {
                // line 13
                echo "                <div class=\"form-inline navbar-form float-right\">
                  ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 17
            echo "              ";
            if (($context["container_navbar"] ?? null)) {
                // line 18
                echo "            </div>
            ";
            }
            // line 20
            echo "          </nav>
        ";
        }
        // line 22
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => "py-4"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">
          ";
        // line 23
        if (($context["container_navbar"] ?? null)) {
            // line 24
            echo "          <div class=\"container\">
            ";
        }
        // line 26
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
            ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 27) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 27))) {
            // line 28
            echo "              <button aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"
                      class=\"navbar-toggler navbar-toggler-right border-0 navbar-toggler collapsed\"
                      data-target=\"#CollapsingNavbar\" data-toggle=\"collapse\" type=\"button\">
                <div id=\"nav-icon\">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </button>
              <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
                ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
                ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 40)) {
                // line 41
                echo "                  <div class=\"form-inline navbar-form float-right\">
                    ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 45
            echo "              </div>
            ";
        }
        // line 47
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 48
            echo "              <button aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"
                      class=\"navbar-toggler navbar-toggler-left\" data-target=\"#CollapsingLeft\" data-toggle=\"collapse\"
                      type=\"button\"></button>
            ";
        }
        // line 52
        echo "            ";
        if (($context["container_navbar"] ?? null)) {
            // line 53
            echo "          </div>
          ";
        }
        // line 55
        echo "        </nav>
      ";
    }

    // line 66
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 68, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 76, $this->source), "html", null, true);
        echo "\">
          ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            <main";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 79, $this->source), "html", null, true);
        echo ">
              <section class=\"section bg-white\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
              </section>
            </main>
            ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 85)) {
            // line 86
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 86, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 92
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92)) {
            // line 93
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 93, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 99
        echo "          </div>
        </div>
      ";
    }

    // line 113
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 114, $this->source), "html", null, true);
        echo "\">
          ";
        // line 115
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 115) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 115)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 115)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 115))) {
            // line 116
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
              ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
              ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
              ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 123
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 123)) {
            // line 124
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 128
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mrshndr/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 128,  393 => 125,  390 => 124,  387 => 123,  381 => 120,  377 => 119,  373 => 118,  369 => 117,  366 => 116,  364 => 115,  359 => 114,  355 => 113,  349 => 99,  342 => 95,  336 => 93,  333 => 92,  326 => 88,  320 => 86,  318 => 85,  312 => 82,  306 => 79,  301 => 77,  296 => 76,  292 => 75,  284 => 69,  280 => 68,  277 => 67,  273 => 66,  268 => 55,  264 => 53,  261 => 52,  255 => 48,  252 => 47,  248 => 45,  242 => 42,  239 => 41,  237 => 40,  233 => 39,  220 => 28,  218 => 27,  213 => 26,  209 => 24,  207 => 23,  202 => 22,  198 => 20,  194 => 18,  191 => 17,  185 => 14,  182 => 13,  180 => 12,  176 => 11,  171 => 10,  167 => 8,  165 => 7,  160 => 6,  157 => 5,  153 => 4,  147 => 134,  141 => 130,  139 => 113,  136 => 112,  129 => 108,  125 => 107,  121 => 106,  117 => 105,  114 => 104,  112 => 103,  109 => 102,  107 => 75,  104 => 74,  101 => 73,  98 => 66,  95 => 65,  88 => 61,  84 => 60,  81 => 59,  79 => 58,  76 => 57,  74 => 4,  70 => 3,  66 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mrshndr/templates/layout/page.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/layout/page.html.twig");
    }
}
