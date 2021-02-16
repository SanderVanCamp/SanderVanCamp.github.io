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
class __TwigTemplate_e0759f4132689739e8bb617a33fc88ddf0cce1e9f3c2ab9408bffebfc8819518 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
  ";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 5
        echo "</header>
";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 6)) {
            // line 7
            echo "  <div class=\"highlighted\">
    <aside class=\"\" role=\"complementary\">
      ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
    </aside>
  </div>
";
        }
        // line 13
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "<footer class=\"footer\">
  ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "</footer>

";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mrshndr/page"), "html", null, true);
        echo "
";
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
    <main";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 15, $this->source), "html", null, true);
        echo ">
      ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
    </main>
  ";
    }

    // line 20
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <div class=\"footer__social-links\">
      <a href=\"https://www.linkedin.com/in/sandervancamp/\" title=\"LinkedIn Sander Van Camp\" target=\"_blank\"
         rel=\"external\" hreflang=\"en\">
        <img src=\"/";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 24, $this->source), "html", null, true);
        echo "/img/iconmonstr-linkedin-4.svg\" height=\"20\" width=\"20\"/>
      </a>
      <a href=\"https://github.com/SanderVanCamp\" title=\"GitHub Sander Van Camp\" target=\"_blank\"
         rel=\"external\" hreflang=\"en\">
        <img src=\"/";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 28, $this->source), "html", null, true);
        echo "/img/iconmonstr-github-1.svg\" height=\"20\" width=\"20\"/>
      </a>
    </div>
    <div class=\"footer__copyright\">
      <small>
        © Sander Van Camp - ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
      </small>
    </div>
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
        return array (  138 => 33,  130 => 28,  123 => 24,  118 => 21,  114 => 20,  107 => 16,  103 => 15,  98 => 14,  94 => 13,  87 => 3,  83 => 2,  77 => 39,  73 => 37,  71 => 20,  68 => 19,  65 => 13,  58 => 9,  54 => 7,  52 => 6,  49 => 5,  47 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t }}\">
  {% block head %}
    {{ page.header }}
  {% endblock %}
</header>
{% if page.highlighted %}
  <div class=\"highlighted\">
    <aside class=\"\" role=\"complementary\">
      {{ page.highlighted }}
    </aside>
  </div>
{% endif %}
  {% block content %}
    {{ page.pre_content }}
    <main{{ content_attributes }}>
      {{ page.content }}
    </main>
  {% endblock %}
<footer class=\"footer\">
  {% block footer %}
    <div class=\"footer__social-links\">
      <a href=\"https://www.linkedin.com/in/sandervancamp/\" title=\"LinkedIn Sander Van Camp\" target=\"_blank\"
         rel=\"external\" hreflang=\"en\">
        <img src=\"/{{ directory }}/img/iconmonstr-linkedin-4.svg\" height=\"20\" width=\"20\"/>
      </a>
      <a href=\"https://github.com/SanderVanCamp\" title=\"GitHub Sander Van Camp\" target=\"_blank\"
         rel=\"external\" hreflang=\"en\">
        <img src=\"/{{ directory }}/img/iconmonstr-github-1.svg\" height=\"20\" width=\"20\"/>
      </a>
    </div>
    <div class=\"footer__copyright\">
      <small>
        © Sander Van Camp - {{ 'now'|date('Y') }}
      </small>
    </div>
  {% endblock %}
</footer>

{{ attach_library('mrshndr/page') }}
", "themes/custom/mrshndr/templates/layout/page.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 2, "if" => 6);
        static $filters = array("t" => 1, "escape" => 9, "date" => 33);
        static $functions = array("attach_library" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape', 'date'],
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
