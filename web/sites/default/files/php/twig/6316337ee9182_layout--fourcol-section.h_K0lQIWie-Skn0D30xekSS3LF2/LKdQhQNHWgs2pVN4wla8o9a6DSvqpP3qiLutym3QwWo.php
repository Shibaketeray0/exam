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

/* themes/contrib/exam/layouts/header/layout--fourcol-section.html.twig */
class __TwigTemplate_cfeb12e93e27df1679ba9664cac5ce12b51c948454bac6d9aeb793fd16244706 extends \Twig\Template
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
        // line 13
        echo "
";
        // line 14
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 14), "fluid_container", [], "any", false, false, true, 14)) ? ("container-fluid") : ("container"));
        // line 15
        echo "
";
        // line 17
        $context["classes"] = [0 => "layout", 1 => "layout--fourcol-section"];
        // line 22
        if (($context["content"] ?? null)) {
            // line 23
            echo "<div class=\"wrapper\">
  <div class=\"header four_col layout--fourcol-section ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 24, $this->source), "html", null, true);
            echo "\">
    <div class=\"header_background\">
    ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 26)) {
                // line 27
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 27), "addClass", [0 => "layout__region", 1 => "layout__region--first", 2 => "header_logo"], "method", false, false, true, 27), 27, $this->source), "html", null, true);
                echo ">
        ";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 31
            echo "
    ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 32)) {
                // line 33
                echo "
      <div ";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 34), "addClass", [0 => "layout__region", 1 => "layout__region--second", 2 => "main_nav"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                echo ">
        ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 38
            echo "
    ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 39)) {
                // line 40
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "third", [], "any", false, false, true, 40), "addClass", [0 => "layout__region", 1 => "layout__region--third", 2 => "sidebar"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
                echo ">
        ";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 44
            echo "    </div>

    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 46)) {
                // line 47
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "fourth", [], "any", false, false, true, 47), "addClass", [0 => "layout__region", 1 => "layout__region--fourth", 2 => "header_text"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                echo ">
        ";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 51
            echo "
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/exam/layouts/header/layout--fourcol-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 51,  117 => 48,  112 => 47,  110 => 46,  106 => 44,  100 => 41,  95 => 40,  93 => 39,  90 => 38,  84 => 35,  80 => 34,  77 => 33,  75 => 32,  72 => 31,  66 => 28,  61 => 27,  59 => 26,  54 => 24,  51 => 23,  49 => 22,  47 => 17,  44 => 15,  42 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/exam/layouts/header/layout--fourcol-section.html.twig", "/var/www/drupal9/web/themes/contrib/exam/layouts/header/layout--fourcol-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 22);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
