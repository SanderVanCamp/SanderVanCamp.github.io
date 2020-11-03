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

/* themes/custom/mrshndr/templates/layouts/twocol_section/layout--twocol-section.html.twig */
class __TwigTemplate_b2e0ebc539313a6140333d0f502a0083b2bd5c267633ca35f306e95a21ee6761 extends \Twig\Template
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
        $tags = array("if" => 13);
        $filters = array("escape" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        if (($context["content"] ?? null)) {
            // line 14
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "layout_row"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo ">
    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 15)) {
                // line 16
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 16), "addClass", [0 => "layout__region", 1 => "layout__region--first"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                echo ">
        ";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 20
            echo "
    ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 21)) {
                // line 22
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 22), "addClass", [0 => "layout__region", 1 => "layout__region--second"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
                echo ">
        ";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 26
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/mrshndr/templates/layouts/twocol_section/layout--twocol-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  92 => 23,  87 => 22,  85 => 21,  82 => 20,  76 => 17,  71 => 16,  69 => 15,  64 => 14,  62 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mrshndr/templates/layouts/twocol_section/layout--twocol-section.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/layouts/twocol_section/layout--twocol-section.html.twig");
    }
}
