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

/* themes/custom/mrshndr/templates/paragraph/paragraph--accordion-item.html.twig */
class __TwigTemplate_d028a404e11d94feaea37b2c625a00c0982686f3c2bb89c3b3278c6fdb91c598 extends \Twig\Template
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
        // line 1
        $context["classes"] = [0 => "panel", 1 => "border-bottom", 2 => "border-acccent"];
        // line 6
        echo "

<div class=\"tab\">
  <input type=\"checkbox\" id=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
  <label class=\"tab-label\" for=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</label>
  <div class=\"tab-content\">
    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mrshndr/templates/paragraph/paragraph--accordion-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  50 => 10,  46 => 9,  41 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = [
  'panel',
  'border-bottom',
  'border-acccent'
] %}


<div class=\"tab\">
  <input type=\"checkbox\" id=\"{{ paragraph.id() }}\">
  <label class=\"tab-label\" for=\"{{ paragraph.id() }}\">{{ content.field_title }}</label>
  <div class=\"tab-content\">
    {{ content.field_body }}
  </div>
</div>
", "themes/custom/mrshndr/templates/paragraph/paragraph--accordion-item.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/paragraph/paragraph--accordion-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 9);
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
