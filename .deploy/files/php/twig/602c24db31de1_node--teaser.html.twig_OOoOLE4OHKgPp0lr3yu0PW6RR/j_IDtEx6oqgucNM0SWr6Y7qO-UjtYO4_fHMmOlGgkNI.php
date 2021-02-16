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

/* themes/custom/mrshndr/templates/node/node--teaser.html.twig */
class __TwigTemplate_6545fce84b255f8ad05b0da71e1cb374eba78c0458bb9b9515d6df662484ebbf extends \Twig\Template
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
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 3
($context["node"] ?? null), "bundle", [], "any", false, false, true, 3), 3, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 4)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 5)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 6)) ? ("node--unpublished") : ("")), 5 => ((        // line 7
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 7, $this->source)))) : ("")), 6 => "clearfix"];
        // line 10
        echo "<a class=\"node__teaser__link\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 10, $this->source), "html", null, true);
        echo "\">
  <article";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
    <header>
      ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 13, $this->source), "html", null, true);
        echo "
      <h2";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        echo ">
        ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 15, $this->source), "html", null, true);
        echo "
      </h2>
      ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 17, $this->source), "html", null, true);
        echo "
      ";
        // line 18
        if (($context["display_submitted"] ?? null)) {
            // line 19
            echo "        <div class=\"node__meta\">
          ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 20, $this->source), "html", null, true);
            echo "
          <span";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 21, $this->source), "html", null, true);
            echo ">
         ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 22, $this->source), "html", null, true);
            echo "
        </span>
          ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 24, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 27
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        echo ">
        ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
      </div>
    </header>
  </article>
</a>


";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mrshndr/node--teaser"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mrshndr/templates/node/node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  102 => 28,  97 => 27,  91 => 24,  86 => 22,  82 => 21,  78 => 20,  75 => 19,  73 => 18,  69 => 17,  64 => 15,  60 => 14,  56 => 13,  51 => 11,  46 => 10,  44 => 7,  43 => 6,  42 => 5,  41 => 4,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = [
  'node',
  'node--type-' ~ node.bundle|clean_class,
  node.isPromoted() ? 'node--promoted',
  node.isSticky() ? 'node--sticky',
  not node.isPublished() ? 'node--unpublished',
  view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  'clearfix',
] %}
<a class=\"node__teaser__link\" href=\"{{ url }}\">
  <article{{ attributes.addClass(classes) }}>
    <header>
      {{ title_prefix }}
      <h2{{ title_attributes.addClass('node__title') }}>
        {{ label }}
      </h2>
      {{ title_suffix }}
      {% if display_submitted %}
        <div class=\"node__meta\">
          {{ author_picture }}
          <span{{ author_attributes }}>
         {{ date }}
        </span>
          {{ metadata }}
        </div>
      {% endif %}
      <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
        {{ content.body }}
      </div>
    </header>
  </article>
</a>


{{ attach_library('mrshndr/node--teaser') }}
", "themes/custom/mrshndr/templates/node/node--teaser.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 18);
        static $filters = array("clean_class" => 3, "escape" => 10);
        static $functions = array("attach_library" => 35);

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
}
