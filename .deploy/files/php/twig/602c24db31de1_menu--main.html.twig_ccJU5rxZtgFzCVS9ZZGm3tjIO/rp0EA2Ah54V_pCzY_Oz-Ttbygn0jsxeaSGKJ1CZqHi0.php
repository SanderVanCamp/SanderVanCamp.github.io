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

/* themes/custom/mrshndr/templates/navigation/menu--main.html.twig */
class __TwigTemplate_03fce9a691b226de7aed9133dc379943a0060fef5204b8adc51dbe3da0cffc04 extends \Twig\Template
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
        echo "<nav class=\"navbar\" id=\"site-nav\">
  <a class=\"logo\" href=\"/\" title=\"home\" rel=\"home\" hreflang=\"en\">Sander Van Camp</a>
  <div class=\"wrapper overlay\">
    <ul class=\"menu overlay-content\" itemscope itemtype=\"http://www.schema.org/SiteNavigationElement\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        ";
            $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,             // line 8
$context["item"], "is_expanded", [], "any", false, false, true, 8)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,             // line 9
$context["item"], "is_collapsed", [], "any", false, false, true, 9)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,             // line 10
$context["item"], "in_active_trail", [], "any", false, false, true, 10)) ? ("menu-item--active-trail") : (""))];
            // line 12
            echo "        <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 12), "addClass", [0 => ($context["classes"] ?? null), 1 => "menu-item"], "method", false, false, true, 12), 12, $this->source), "html", null, true);
            echo " itemprop=\"name\">
          ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 13), 13, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 13), 13, $this->source), ["itemprop" => [0 => "url"]]), "html", null, true);
            echo "
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
  </div>
  <label for=\"nav\" class=\"nav-toggle\" onclick=\"toggleNav()\">
  </label>
</nav>


<script>
    function toggleNav() {
        document.getElementById('site-nav').classList.toggle('expanded');
    }
</script>


";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mrshndr/menu--main"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mrshndr/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  69 => 16,  60 => 13,  55 => 12,  53 => 10,  52 => 9,  51 => 8,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar\" id=\"site-nav\">
  <a class=\"logo\" href=\"/\" title=\"home\" rel=\"home\" hreflang=\"en\">Sander Van Camp</a>
  <div class=\"wrapper overlay\">
    <ul class=\"menu overlay-content\" itemscope itemtype=\"http://www.schema.org/SiteNavigationElement\">
      {% for item in items %}
        {% set classes = [
          'menu-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
        ] %}
        <li{{ item.attributes.addClass(classes, 'menu-item') }} itemprop=\"name\">
          {{ link(item.title, item.url, { 'itemprop':['url'] }) }}
        </li>
      {% endfor %}
    </ul>
  </div>
  <label for=\"nav\" class=\"nav-toggle\" onclick=\"toggleNav()\">
  </label>
</nav>


<script>
    function toggleNav() {
        document.getElementById('site-nav').classList.toggle('expanded');
    }
</script>


{{ attach_library('mrshndr/menu--main') }}
", "themes/custom/mrshndr/templates/navigation/menu--main.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "set" => 6);
        static $filters = array("escape" => 12);
        static $functions = array("link" => 13, "attach_library" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape'],
                ['link', 'attach_library']
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
