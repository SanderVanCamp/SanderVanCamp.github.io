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

/* themes/custom/mrshndr/templates/node/node--full.html.twig */
class __TwigTemplate_4751df5df43971bf879b98d9590cfccad6a7aec410adf78927ccc54c208d9c94 extends \Twig\Template
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
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 7, $this->source)))) : (""))];
        // line 9
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 9) == "article")) ? (" itemscope itemtype=\"https://schema.org/Article\"") : ("")));
        echo ">
  ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 10, $this->source), "html", null, true);
        echo "

  <h1";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 12, $this->source), "html", null, true);
        echo " itemprop=\"name\">
    ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 13, $this->source), "html", null, true);
        echo "
  </h1>
  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 15, $this->source), "html", null, true);
        echo "

  ";
        // line 17
        if (($context["display_submitted"] ?? null)) {
            // line 18
            echo "    <footer class=\"node__meta\">
      <div";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
            echo ">
        ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 20, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 24
        echo "
  <div";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
    <strong itemprop=\"description\" class=\"node__summary\">
      ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
    </strong>
    ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
    ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 30, $this->source), "body", "field_media_image"), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mrshndr/templates/node/node--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  101 => 29,  96 => 27,  91 => 25,  88 => 24,  81 => 20,  77 => 19,  74 => 18,  72 => 17,  67 => 15,  62 => 13,  58 => 12,  53 => 10,  46 => 9,  44 => 7,  43 => 6,  42 => 5,  41 => 4,  40 => 3,  39 => 1,);
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
] %}
<article{{ attributes.addClass(classes) }} {{ node.bundle == 'article' ? ' itemscope itemtype=\"https://schema.org/Article\"' : '' }}>
  {{ title_prefix }}

  <h1{{ title_attributes }} itemprop=\"name\">
    {{ label }}
  </h1>
  {{ title_suffix }}

  {% if display_submitted %}
    <footer class=\"node__meta\">
      <div{{ author_attributes.addClass('node__submitted') }}>
        {{ date }}
      </div>
    </footer>
  {% endif %}

  <div{{ content_attributes.addClass('node__content') }}>
    <strong itemprop=\"description\" class=\"node__summary\">
      {{ content.body }}
    </strong>
    {{ content.field_media_image }}
    {{ content | without('body','field_media_image') }}
  </div>
</article>
", "themes/custom/mrshndr/templates/node/node--full.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/node/node--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 17);
        static $filters = array("clean_class" => 3, "escape" => 9, "without" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'without'],
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
