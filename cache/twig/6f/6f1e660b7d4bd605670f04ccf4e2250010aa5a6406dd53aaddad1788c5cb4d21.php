<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/lang.html.twig */
class __TwigTemplate_0945abde310623c8c6d8aa3e3d3f3dc7740fa5fce403f379076e4ec4056d1cff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"lang-dropdown\">
  <span class=\"current-lang\">&nbsp;";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []), "html", null, true);
        echo "&nbsp;</span> <i class=\"icon fa fa-angle-down\"></i>
  <div class=\"lang-dropdown-menu\">
    <ul>
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["system"] ?? null), "languages", []), "supported", []));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 6
            echo "        ";
            $context["lang_url"] = ((($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguageURLPrefix", [0 => $context["lang"]], "method")) . $this->getAttribute(($context["page"] ?? null), "route", []));
            // line 7
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["lang_url"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/lang.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  46 => 7,  43 => 6,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lang-dropdown\">
  <span class=\"current-lang\">&nbsp;{{ grav.language.getActive }}&nbsp;</span> <i class=\"icon fa fa-angle-down\"></i>
  <div class=\"lang-dropdown-menu\">
    <ul>
      {% for lang in system.languages.supported %}
        {% set lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(lang) ~ page.route %}
        <li><a href=\"{{ lang_url }}\">{{ lang }}</a></li>
      {% endfor %}
    </ul>
  </div>
</div>
", "partials/lang.html.twig", "D:\\WEB-DEV\\www\\me.topidesta.my.id\\user\\themes\\personal\\templates\\partials\\lang.html.twig");
    }
}
