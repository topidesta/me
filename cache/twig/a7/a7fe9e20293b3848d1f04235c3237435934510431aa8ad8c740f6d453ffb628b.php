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

/* partials/profile.html.twig */
class __TwigTemplate_26a417cac0a612d4e10e92c5306fc6dd6f161bb07071ed1e2c917c7217836ad1 extends \Twig\Template
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
        echo "<header class=\"header\">
  <div class=\"container\">
    ";
        // line 3
        $context["profile_image"] = (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", []), "avatar_url", [])) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", []), "avatar_url", [])) : ((("//gravatar.com/avatar/" . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "email", []))) . "?s=180")));
        // line 4
        echo "    ";
        $this->loadTemplate("partials/lang.html.twig", "partials/profile.html.twig", 4)->display($context);
        // line 5
        echo "    <img class=\"profile-image img-responsive pull-left rounded\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(($context["profile_image"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "name", []), $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))), "html", null, true);
        echo "\" height=\"180\" width=\"180\" />
    <div class=\"profile-content\">
      <h1 class=\"name\">";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "name", []), $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))), "html", null, true);
        echo "</h1>
      <h2 class=\"desc\">";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "desc", [], "any", false, true), $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []), [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "desc", [], "any", false, true), $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])), $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []))) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []))), "html", null, true);
        echo "</h2>
      ";
        // line 9
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "networks", []))) {
            // line 10
            echo "        <ul class=\"social\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "networks", []));
            foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
                // line 12
                echo "            <li class=\"";
                if (($context["network"] == twig_last($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "networks", [])))) {
                    echo "last-item";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["network"], "url", []), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["network"], "icon", []) == "fa-mastodon")) {
                    echo "rel=\"me\"";
                }
                echo "><i class=\"fa ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["network"], "icon", []), "html", null, true);
                echo "\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["network"], "title", []), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
      ";
        }
        // line 16
        echo "    </div>
    ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", []), "bio", [])) {
            // line 18
            echo "    <div class=\"profile-bio\">
      <p class=\"biography\">";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "bio", [], "any", false, true), $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []), [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "bio", [], "any", false, true), $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])), $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", []), "bio", []))) : ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", []), "bio", []))), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        // line 22
        echo "  </div>
</header>

";
    }

    public function getTemplateName()
    {
        return "partials/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  97 => 19,  94 => 18,  92 => 17,  89 => 16,  85 => 14,  64 => 12,  60 => 11,  57 => 10,  55 => 9,  51 => 8,  47 => 7,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
  <div class=\"container\">
    {% set profile_image = (theme_config.profile.avatar_url) ?: '//gravatar.com/avatar/' ~ site.author.email | md5 ~ '?s=180' %}
    {% include 'partials/lang.html.twig' %}
    <img class=\"profile-image img-responsive pull-left rounded\" src=\"{{ url(profile_image) }}\" alt=\"{{ theme_config.profile.name | default(site.author.name) }}\" height=\"180\" width=\"180\" />
    <div class=\"profile-content\">
      <h1 class=\"name\">{{ theme_config.profile.name | default(site.author.name) }}</h1>
      <h2 class=\"desc\">{{ attribute(theme_config.profile.desc,grav.language.getActive) | default(site.metadata.description) }}</h2>
      {% if theme_config.social.networks | length %}
        <ul class=\"social\">
          {% for network in theme_config.social.networks %}
            <li class=\"{% if network == theme_config.social.networks | last %}last-item{% endif %}\"><a href=\"{{ network.url }}\" {%if network.icon == \"fa-mastodon\" %}rel=\"me\"{% endif %}><i class=\"fa {{ network.icon }}\"></i>{{ network.title }}</a></li>
          {% endfor %}
        </ul>
      {% endif %}
    </div>
    {% if theme_config.profile.bio %}
    <div class=\"profile-bio\">
      <p class=\"biography\">{{ attribute(theme_config.profile.bio, grav.language.getActive) | default(theme_config.profile.bio) }}</p>
    </div>
    {% endif %}
  </div>
</header>

", "partials/profile.html.twig", "D:\\WEB-DEV\\www\\me.topidesta.my.id\\user\\themes\\personal\\templates\\partials\\profile.html.twig");
    }
}
