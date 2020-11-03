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

/* themes/custom/mrshndr/templates/form/form-element.html.twig */
class __TwigTemplate_346ccf7a08d0b59943a32001bf82c8f0f1b71bd523c0e61bb3cfc9767b244bdd extends \Twig\Template
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
        $tags = array("set" => 47, "if" => 62);
        $filters = array("clean_class" => 50, "escape" => 61);
        $functions = array("attach_library" => 92);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        // line 47
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 50
($context["type"] ?? null), 50, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
($context["name"] ?? null), 51, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["name"] ?? null), 52, $this->source))), 5 => ((!twig_in_filter(        // line 53
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 54
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 55
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 57
        $context["description_classes"] = [0 => "description", 1 => (((        // line 59
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 61
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 61), 61, $this->source), "html", null, true);
        echo ">
  ";
        // line 62
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 63
            echo "    <b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 63, $this->source), "html", null, true);
            echo "</b>
  ";
        }
        // line 65
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 66
            echo "    <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 66, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 68
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 68))) {
            // line 69
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo ">
      ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 73
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 73, $this->source), "html", null, true);
        echo "
  ";
        // line 74
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 75
            echo "    <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 75, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 77
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 78
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 78, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 80
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 81
            echo "    <div class=\"form-item--error-message\">
      ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 82, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 85
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 85))) {
            // line 86
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 86), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 86), 86, $this->source), "html", null, true);
            echo ">
      ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 90
        echo "</div>

";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mrshndr/form-element"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mrshndr/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 92,  157 => 90,  151 => 87,  146 => 86,  143 => 85,  137 => 82,  134 => 81,  131 => 80,  125 => 78,  122 => 77,  116 => 75,  114 => 74,  109 => 73,  103 => 70,  98 => 69,  95 => 68,  89 => 66,  86 => 65,  80 => 63,  78 => 62,  73 => 61,  71 => 59,  70 => 57,  68 => 55,  67 => 54,  66 => 53,  65 => 52,  64 => 51,  63 => 50,  62 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mrshndr/templates/form/form-element.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/form/form-element.html.twig");
    }
}
