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

/* partials/base.html.twig */
class __TwigTemplate_cd3086338e2715eb3191f8227ae2f464e8961a0d80a4f507d51bc8231855ec64 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'head_meta' => [$this, 'block_head_meta'],
            'head_title' => [$this, 'block_head_title'],
            'head_css' => [$this, 'block_head_css'],
            'head_css_extra' => [$this, 'block_head_css_extra'],
            'head_js' => [$this, 'block_head_js'],
            'body' => [$this, 'block_body'],
            'body_header' => [$this, 'block_body_header'],
            'body_menu' => [$this, 'block_body_menu'],
            'topmenu_navigation' => [$this, 'block_topmenu_navigation'],
            'body_content' => [$this, 'block_body_content'],
            'page_content' => [$this, 'block_page_content'],
            'body_footer' => [$this, 'block_body_footer'],
            'body_js' => [$this, 'block_body_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 40
        echo "  </head>

  ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hideProfile", [])) {
            // line 44
            echo "    ";
            $this->displayBlock('body_header', $context, $blocks);
            // line 47
            echo "    ";
        }
        // line 48
        echo "    
    
    ";
        // line 50
        $this->displayBlock('body_menu', $context, $blocks);
        // line 82
        echo "
    ";
        // line 83
        $this->displayBlock('body_content', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->displayBlock('body_footer', $context, $blocks);
        // line 109
        echo "
    <div class=\"mobile-container\">
      <div class=\"overlay\" id=\"overlay\">
        <nav class=\"overlay-menu\">
          ";
        // line 113
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 113)->display(twig_array_merge($context, ["tree" => true]));
        // line 114
        echo "        </nav>
      </div>
    </div>

    ";
        // line 118
        $this->displayBlock('body_js', $context, $blocks);
        // line 122
        echo "  </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "      ";
        $this->displayBlock('head_meta', $context, $blocks);
        // line 15
        echo "
      ";
        // line 16
        $this->displayBlock('head_title', $context, $blocks);
        // line 19
        echo "
      <link rel=\"canonical\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
        echo "\" />
      <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/images/favicon.ico\" />

      ";
        // line 23
        $this->displayBlock('head_css', $context, $blocks);
        // line 28
        echo "
      ";
        // line 29
        $this->displayBlock('head_css_extra', $context, $blocks);
        // line 30
        echo "
      ";
        // line 31
        $this->displayBlock('head_js', $context, $blocks);
        // line 39
        echo "    ";
    }

    // line 6
    public function block_head_meta($context, array $blocks = [])
    {
        // line 7
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 10
            echo "          <meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "name", []), "html", null, true);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "http_equiv", []), "html", null, true);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "charset", []), "html", null, true);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "property", []), "html", null, true);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "content", []), "html", null, true);
                echo "\" ";
            }
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []), "html", null, true);
        echo "\" />
      ";
    }

    // line 16
    public function block_head_title($context, array $blocks = [])
    {
        // line 17
        echo "        <title>";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []) && (($this->getAttribute(($context["page"] ?? null), "url", []) != ($context["base_url"] ?? null)) || ("error" == $this->getAttribute(($context["page"] ?? null), "template", []))))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
      ";
    }

    // line 23
    public function block_head_css($context, array $blocks = [])
    {
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/plugins/fork-awesome-subset/css/fork-awesome.min.css", 1 => 105], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/main.min.css", 1 => 102], "method");
        // line 26
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
      ";
    }

    // line 29
    public function block_head_css_extra($context, array $blocks = [])
    {
    }

    // line 31
    public function block_head_js($context, array $blocks = [])
    {
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 35
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"], "method");
            // line 36
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"], "method");
            // line 37
            echo "        ";
        }
        // line 38
        echo "      ";
    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        echo "<body id=\"page-top\" class=\"index\">";
    }

    // line 44
    public function block_body_header($context, array $blocks = [])
    {
        // line 45
        echo "      ";
        $this->loadTemplate("partials/profile.html.twig", "partials/base.html.twig", 45)->display($context);
        // line 46
        echo "    ";
    }

    // line 50
    public function block_body_menu($context, array $blocks = [])
    {
        // line 51
        echo "      <div class=\"topmenu\" id=\"topMenu\">
      <div class=\"container\">
        ";
        // line 53
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hideProfile", [])) {
            // line 54
            echo "        <section class=\"logo hidden\" id=\"navLogo\">
        ";
        } else {
            // line 56
            echo "        <section class=\"logo\">
        ";
        }
        // line 58
        echo "          ";
        $context["profile_image"] = (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", []), "avatar_url", [])) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", []), "avatar_url", [])) : ((("//gravatar.com/avatar/" . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "email", []))) . "?s=180")));
        // line 59
        echo "          <a href=\"";
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\">
            <img class=\"profile-image img-responsive pull-left drop\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(($context["profile_image"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "profile", [], "any", false, true), "name", []), $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))) : ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))), "html", null, true);
        echo "\" height=\"40\" width=\"40\" />
          </a>
        </section>
        <section class=\"desktop-menu\">
          <nav class=\"navbar\">
            <nav class=\"dropmenu animated\">
              ";
        // line 66
        $this->displayBlock('topmenu_navigation', $context, $blocks);
        // line 69
        echo "            </nav>
          </nav>
        </section>
        <div class=\"mobile-menu\">
          <div class=\"button_container\" id=\"toggle\">
            <span class=\"hamburger top\"></span>
            <span class=\"hamburger middle\"></span>
            <span class=\"hamburger bottom\"></span>
          </div>
        </div>
      </div>
      </div>
    ";
    }

    // line 66
    public function block_topmenu_navigation($context, array $blocks = [])
    {
        // line 67
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "              ";
    }

    // line 83
    public function block_body_content($context, array $blocks = [])
    {
        // line 84
        echo "      <div class=\"container sections-wrapper\">
        <div class=\"row\">
          <div class=\"primary col-md-12 col-sm-12 col-xs-12\">
            <section class=\"";
        // line 87
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "section_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "section_class", []), $this->getAttribute(($context["page"] ?? null), "slug", []))) : ($this->getAttribute(($context["page"] ?? null), "slug", []))), "html", null, true);
        echo " section\">
              <div class=\"section-inner\">
                ";
        // line 89
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hideProfile", [])) {
            // line 90
            echo "                  ";
            $this->loadTemplate("partials/lang.html.twig", "partials/base.html.twig", 90)->display($context);
            // line 91
            echo "                ";
        }
        // line 92
        echo "                <h2 class=\"heading\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h2>
                ";
        // line 93
        $this->displayBlock('page_content', $context, $blocks);
        // line 95
        echo "              </div>
            </section>
          </div>
        </div>
      </div>
    ";
    }

    // line 93
    public function block_page_content($context, array $blocks = [])
    {
        // line 94
        echo "                ";
    }

    // line 102
    public function block_body_footer($context, array $blocks = [])
    {
        // line 103
        echo "      <footer class=\"footer\">
        <div class=\"container text-center\">
          <small class=\"copyright\">Copyright &copy; ";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "NOW", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo " | Grav Theme: <a href=\"//git.moqueur.chat/etienne/grav-theme-personal\">Personal</a></small>
        </div>
      </footer>
    ";
    }

    // line 118
    public function block_body_js($context, array $blocks = [])
    {
        // line 119
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/main.min.js", 1 => 100], "method");
        // line 120
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 120,  400 => 119,  397 => 118,  387 => 105,  383 => 103,  380 => 102,  376 => 94,  373 => 93,  364 => 95,  362 => 93,  357 => 92,  354 => 91,  351 => 90,  349 => 89,  344 => 87,  339 => 84,  336 => 83,  332 => 68,  329 => 67,  326 => 66,  310 => 69,  308 => 66,  297 => 60,  292 => 59,  289 => 58,  285 => 56,  281 => 54,  279 => 53,  275 => 51,  272 => 50,  268 => 46,  265 => 45,  262 => 44,  256 => 42,  252 => 38,  249 => 37,  246 => 36,  243 => 35,  240 => 34,  238 => 33,  236 => 32,  233 => 31,  228 => 29,  221 => 26,  218 => 25,  215 => 24,  212 => 23,  201 => 17,  198 => 16,  192 => 13,  189 => 12,  156 => 10,  152 => 9,  148 => 7,  145 => 6,  141 => 39,  139 => 31,  136 => 30,  134 => 29,  131 => 28,  129 => 23,  124 => 21,  120 => 20,  117 => 19,  115 => 16,  112 => 15,  109 => 6,  106 => 5,  100 => 122,  98 => 118,  92 => 114,  90 => 113,  84 => 109,  82 => 102,  79 => 101,  77 => 83,  74 => 82,  72 => 50,  68 => 48,  65 => 47,  62 => 44,  59 => 43,  57 => 42,  53 => 40,  51 => 5,  46 => 2,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    {% block head %}
      {% block head_meta %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        {% for meta in page.metadata %}
          <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
        {% endfor %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"{{ site.metadata.description }}\" />
      {% endblock %}

      {% block head_title %}
        <title>{% if page.header.title and (page.url != base_url or 'error' == page.template) %}{{ page.header.title }} | {% endif %}{{ site.title }}</title>
      {% endblock %}

      <link rel=\"canonical\" href=\"{{ page.url(true) }}\" />
      <link rel=\"shortcut icon\" href=\"{{ theme_url }}/assets/images/favicon.ico\" />

      {% block head_css %}
        {% do assets.add('theme://assets/plugins/fork-awesome-subset/css/fork-awesome.min.css', 105) %}
        {% do assets.add('theme://assets/css/main.min.css', 102) %}
        {{ assets.css()|raw }}
      {% endblock %}

      {% block head_css_extra %}{% endblock %}

      {% block head_js %}
        {# HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries #}
        {# WARNING: Respond.js doesn't work if you view the page via file:// #}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
          {% do assets.addJs('//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}
          {% do assets.addJs('//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}
        {% endif %}
      {% endblock %}
    {% endblock %}
  </head>

  {% block body %}<body id=\"page-top\" class=\"index\">{% endblock %}
    {% if not page.header.hideProfile %}
    {% block body_header %}
      {% include 'partials/profile.html.twig' %}
    {% endblock %}
    {% endif %}
    
    
    {% block body_menu %}
      <div class=\"topmenu\" id=\"topMenu\">
      <div class=\"container\">
        {% if not page.header.hideProfile %}
        <section class=\"logo hidden\" id=\"navLogo\">
        {% else %}
        <section class=\"logo\">
        {%endif %}
          {% set profile_image = (theme_config.profile.avatar_url) ?: '//gravatar.com/avatar/' ~ site.author.email | md5 ~ '?s=180' %}
          <a href=\"{{ home_url }}\">
            <img class=\"profile-image img-responsive pull-left drop\" src=\"{{ url(profile_image) }}\" alt=\"{{ theme_config.profile.name | default(site.author.name) }}\" height=\"40\" width=\"40\" />
          </a>
        </section>
        <section class=\"desktop-menu\">
          <nav class=\"navbar\">
            <nav class=\"dropmenu animated\">
              {% block topmenu_navigation %}
                {% include 'partials/navigation.html.twig' %}
              {% endblock %}
            </nav>
          </nav>
        </section>
        <div class=\"mobile-menu\">
          <div class=\"button_container\" id=\"toggle\">
            <span class=\"hamburger top\"></span>
            <span class=\"hamburger middle\"></span>
            <span class=\"hamburger bottom\"></span>
          </div>
        </div>
      </div>
      </div>
    {% endblock %}

    {% block body_content %}
      <div class=\"container sections-wrapper\">
        <div class=\"row\">
          <div class=\"primary col-md-12 col-sm-12 col-xs-12\">
            <section class=\"{{ page.header.section_class | default(page.slug) }} section\">
              <div class=\"section-inner\">
                {% if page.header.hideProfile %}
                  {% include 'partials/lang.html.twig' %}
                {% endif %}
                <h2 class=\"heading\">{{ page.title }}</h2>
                {% block page_content %}
                {% endblock %}
              </div>
            </section>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block body_footer %}
      <footer class=\"footer\">
        <div class=\"container text-center\">
          <small class=\"copyright\">Copyright &copy; {{ 'NOW' | date('Y') }} {{ site.title }} | Grav Theme: <a href=\"//git.moqueur.chat/etienne/grav-theme-personal\">Personal</a></small>
        </div>
      </footer>
    {% endblock %}

    <div class=\"mobile-container\">
      <div class=\"overlay\" id=\"overlay\">
        <nav class=\"overlay-menu\">
          {% include 'partials/navigation.html.twig' with {tree: true} %}
        </nav>
      </div>
    </div>

    {% block body_js %}
      {% do assets.add('theme://assets/js/main.min.js', 100) %}
      {{ assets.js()|raw }}
    {% endblock %}
  </body>
</html>
", "partials/base.html.twig", "D:\\WEB-DEV\\www\\me.topidesta.my.id\\user\\themes\\personal\\templates\\partials\\base.html.twig");
    }
}
