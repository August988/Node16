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

/* server/sub_page_header.twig */
class __TwigTemplate_fb9e0a4c6310573da957c93a011fc9b2 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["header"] = ["privileges" => ["image" => "b_usrlist", "text" => _gettext("Privileges")]];
        // line 8
        echo "<h2>
    ";
        // line 9
        if (((array_key_exists("is_image", $context)) ? (_twig_default_filter(($context["is_image"] ?? null), true)) : (true))) {
            // line 10
            echo "        ";
            echo PhpMyAdmin\Html\Generator::getImage((($__internal_compile_0 = (($__internal_compile_1 = ($context["header"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["type"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["image"] ?? null) : null));
            echo "
    ";
        } else {
            // line 12
            echo "        ";
            echo PhpMyAdmin\Html\Generator::getIcon((($__internal_compile_2 = (($__internal_compile_3 = ($context["header"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["type"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["image"] ?? null) : null));
            echo "
    ";
        }
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, (($__internal_compile_4 = (($__internal_compile_5 = ($context["header"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["type"] ?? null)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["text"] ?? null) : null), "html", null, true);
        echo "
    ";
        // line 15
        echo ((array_key_exists("link", $context)) ? (PhpMyAdmin\Html\MySQLDocumentation::show(($context["link"] ?? null))) : (""));
        echo "
</h2>
";
    }

    public function getTemplateName()
    {
        return "server/sub_page_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  56 => 14,  50 => 12,  44 => 10,  42 => 9,  39 => 8,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/sub_page_header.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/server/sub_page_header.twig");
    }
}
