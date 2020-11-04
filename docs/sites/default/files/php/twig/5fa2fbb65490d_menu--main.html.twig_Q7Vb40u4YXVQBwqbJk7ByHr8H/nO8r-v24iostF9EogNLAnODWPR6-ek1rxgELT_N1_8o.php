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
class __TwigTemplate_9ef1f07343572b7dfa268c85f6e8839669c782418e9fc3f677ff92cacb47ca25 extends \Twig\Template
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
        $tags = array("for" => 6, "set" => 7);
        $filters = array("escape" => 13);
        $functions = array("link" => 14, "attach_library" => 31);

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar\" id=\"site-nav\">
  <a class=\"logo\" href=\"/\">Sander Van Camp</a>
  <div class=\"wrapper overlay\" >
    <!-- Button to close the overlay navigation -->
    <ul class=\"menu overlay-content\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        ";
            $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,             // line 9
$context["item"], "is_expanded", [], "any", false, false, true, 9)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,             // line 10
$context["item"], "is_collapsed", [], "any", false, false, true, 10)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,             // line 11
$context["item"], "in_active_trail", [], "any", false, false, true, 11)) ? ("menu-item--active-trail") : (""))];
            // line 13
            echo "        <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 13), "addClass", [0 => ($context["classes"] ?? null), 1 => "menu-item"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
            echo ">
          ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 14), 14, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
            echo "
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
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
        // line 31
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
        return array (  109 => 31,  93 => 17,  84 => 14,  79 => 13,  77 => 11,  76 => 10,  75 => 9,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mrshndr/templates/navigation/menu--main.html.twig", "/var/www/sandervancamp.be/web/themes/custom/mrshndr/templates/navigation/menu--main.html.twig");
    }
}
