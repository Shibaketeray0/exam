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

/* themes/contrib/exam/templates/page.html.twig */
class __TwigTemplate_cd85d12f232dbbaba3cc293f90e407d344c05144623c7eeda6bf98532e4eaf75 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
            'nav_sidebar' => [$this, 'block_nav_sidebar'],
            'main' => [$this, 'block_main'],
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
        echo "
";
        // line 2
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 2), "fluid_container", [], "any", false, false, true, 2)) ? ("container-fluid") : ("container"));
        // line 3
        echo "
<div class=\"wrapper2\">
<div class=\"header_wrapper\">
  <header id=\"navbar\" class=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 6, $this->source), "html", null, true);
        echo "\" role=\"banner\">
    ";
        // line 7
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 7)) {
            // line 8
            echo "    <div class=\"header__inner\">
        ";
        }
        // line 10
        echo "        <div class=\"logo\">
          ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_logo", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 13
        $this->displayBlock('navigation', $context, $blocks);
        // line 18
        echo "

        ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 20)) {
            // line 21
            echo "
        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_sidebar", [], "any", false, false, true, 22)) {
                // line 23
                echo "
          ";
                // line 24
                $this->displayBlock('nav_sidebar', $context, $blocks);
                // line 29
                echo "        ";
            }
            // line 30
            echo "    </div>
    ";
        }
        // line 32
        echo "  </header>
</div>

";
        // line 36
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 50)) {
            // line 51
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 59
        echo "

";
    }

    // line 13
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <div class=\"navigation\">
          ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
        </div>
        ";
    }

    // line 24
    public function block_nav_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            <div  class=\"sidebar\">
              ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_sidebar", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
            </div>
          ";
    }

    // line 36
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <div role=\"main\" class=\"main-container js-quickedit-main-content\">
      <div class=\"row\">
        <section";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
          ";
        // line 41
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "        </section>
      </div>
    </div>
  </div>
";
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 51
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <div class=\"footer\">
      <footer  class=\"footer_inner ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 53, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
        ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
      </footer>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/exam/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 54,  188 => 53,  185 => 52,  181 => 51,  174 => 42,  170 => 41,  162 => 44,  159 => 41,  155 => 39,  151 => 37,  147 => 36,  140 => 26,  137 => 25,  133 => 24,  126 => 15,  123 => 14,  119 => 13,  113 => 59,  109 => 51,  107 => 50,  104 => 49,  102 => 36,  97 => 32,  93 => 30,  90 => 29,  88 => 24,  85 => 23,  83 => 22,  80 => 21,  78 => 20,  74 => 18,  72 => 13,  67 => 11,  64 => 10,  60 => 8,  58 => 7,  54 => 6,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/exam/templates/page.html.twig", "/var/www/drupal9/web/themes/contrib/exam/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 7, "block" => 13);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
