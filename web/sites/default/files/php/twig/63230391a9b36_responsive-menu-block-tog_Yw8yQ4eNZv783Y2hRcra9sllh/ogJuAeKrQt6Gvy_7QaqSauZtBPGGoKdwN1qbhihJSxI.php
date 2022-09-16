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

/* modules/contrib/responsive_menu/templates/responsive-menu-block-toggle.html.twig */
class __TwigTemplate_ed7e30f4a935e71e1c85fc5d4f80c1c0395661941d61f2e5e15a264bd34e0f74 extends \Twig\Template
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
        // line 7
        echo "<a id=\"toggle-icon\" class=\"toggle responsive-menu-toggle-icon\" title=\"Menu\" href=\"#off-canvas\">
  <span class=\"icon\"></span><span class=\"label\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        echo "</span>
</a>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/responsive_menu/templates/responsive-menu-block-toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/responsive_menu/templates/responsive-menu-block-toggle.html.twig", "/var/www/drupal9/web/modules/contrib/responsive_menu/templates/responsive-menu-block-toggle.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
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
