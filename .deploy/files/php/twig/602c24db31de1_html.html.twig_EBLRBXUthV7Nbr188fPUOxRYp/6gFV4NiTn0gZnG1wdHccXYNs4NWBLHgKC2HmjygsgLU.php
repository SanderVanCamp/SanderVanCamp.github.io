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

/* themes/custom/mrshndr/templates/layout/html.html.twig */
class __TwigTemplate_8201818735627769376629b14b35c4d12269651d5e66662611753003bf03f52d extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 2, $this->source), "html", null, true);
        echo ">
<head>
  <head-placeholder token=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 4, $this->source));
        echo "\">
    <title>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 5, $this->source), " | "));
        echo "</title>

    <link rel=\"preconnect\"
          href=\"https://fonts.gstatic.com\"
          crossorigin/>

    <link rel=\"preload\"
          as=\"style\"
          href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@300;400;700&display=swap\"/>

    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@300;400;700&display=swap\"
          media=\"print\" onload=\"this.media='all'\"/>


    <css-placeholder token=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 20, $this->source));
        echo "\">
      <js-placeholder token=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 21, $this->source));
        echo "\">


        <script type=\"application/ld+json\">
          {
            \"@context\": \"http://schema.org\",
            \"@type\": \"WebSite\",
            \"name\": \"Sander Van Camp\",
            \"url\": \"https://sandervancamp.be/\"
          }
        </script>
        </head>
<body";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source), "html", null, true);
        echo " itemscope itemtype=\"https://schema.org/WebPage\">
";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 38, $this->source), "html", null, true);
        echo "
";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 39, $this->source), "html", null, true);
        echo "
";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 40, $this->source), "html", null, true);
        echo "
<js-bottom-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source));
        echo "\">
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/mrshndr/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  100 => 40,  96 => 39,  92 => 38,  88 => 33,  73 => 21,  69 => 20,  51 => 5,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html{{ html_attributes }}>
<head>
  <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>

    <link rel=\"preconnect\"
          href=\"https://fonts.gstatic.com\"
          crossorigin/>

    <link rel=\"preload\"
          as=\"style\"
          href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@300;400;700&display=swap\"/>

    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@300;400;700&display=swap\"
          media=\"print\" onload=\"this.media='all'\"/>


    <css-placeholder token=\"{{ placeholder_token|raw }}\">
      <js-placeholder token=\"{{ placeholder_token|raw }}\">


        <script type=\"application/ld+json\">
          {
            \"@context\": \"http://schema.org\",
            \"@type\": \"WebSite\",
            \"name\": \"Sander Van Camp\",
            \"url\": \"https://sandervancamp.be/\"
          }
        </script>
        </head>
<body{{ attributes }} itemscope itemtype=\"https://schema.org/WebPage\">
{#
  Keyboard navigation/accessibility link to main content section in
  page.html.twig.
#}
{{ page_top }}
{{ page }}
{{ page_bottom }}
<js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
</body>
</html>

", "themes/custom/mrshndr/templates/layout/html.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2, "raw" => 4, "safe_join" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 'safe_join'],
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
