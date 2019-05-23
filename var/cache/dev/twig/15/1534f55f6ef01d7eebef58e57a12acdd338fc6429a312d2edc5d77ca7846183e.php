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

/* bundles/FOSUserBundle/Security/login.html.twig */
class __TwigTemplate_f52b32a50a56a8b3721fb112fb101203e1872279061e60fb8e3c2c8a371fcc2b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Security/login.html.twig"));

        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "bundles/FOSUserBundle/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/login.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "    <div class=\"container\">
        <div class=\"wrapper\">
            <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                <h3><img class=\"dumbbell\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/static/dumbbell.png"), "html", null, true);
        echo "\">Login! Start Lifting!</h3>
                <div class=\"js-recommended-login\">
                    <a href=\"#\" class=\"js-show-login\">Don't know the login?</a>
                    <div class=\"js-recommended-login-details\" style=\"display: none;\">
                        Sir or madam, might I recommend that you try the following login details:
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Username</th>
                                    <td>cindy_clawford</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>pumpup</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class=\"colorgraph\" />

                <br/>

                ";
        // line 44
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "                    <div class=\"alert alert-block alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", [], "any", false, false, false, 45), [], "FOSUserBundle"), "html", null, true);
            echo "</div>
                ";
        }
        // line 47
        echo "
                <input type=\"text\"
                       class=\"form-control js-login-field-username\"
                       name=\"_username\"
                       value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\"
                       required=\"required\"
                       placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "\"
                />
                <input type=\"password\"
                       class=\"form-control\"
                       name=\"_password\"
                       required=\"required\"
                       placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\"
                />

                <input type=\"checkbox\" name=\"_remember_me\" checked style=\"display: none;\" />

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">
                    Login
                </button>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bundles/FOSUserBundle/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 64,  183 => 59,  174 => 53,  169 => 51,  163 => 47,  157 => 45,  155 => 44,  129 => 21,  125 => 20,  121 => 18,  112 => 17,  100 => 14,  94 => 12,  85 => 11,  73 => 8,  67 => 6,  58 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@FOSUser/layout.html.twig' %}

{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('build/login.css') }}\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('build/login.js') }}\"></script>
{% endblock %}

{% block fos_user_content %}
    <div class=\"container\">
        <div class=\"wrapper\">
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
                <h3><img class=\"dumbbell\" src=\"{{ asset('build/static/dumbbell.png') }}\">Login! Start Lifting!</h3>
                <div class=\"js-recommended-login\">
                    <a href=\"#\" class=\"js-show-login\">Don't know the login?</a>
                    <div class=\"js-recommended-login-details\" style=\"display: none;\">
                        Sir or madam, might I recommend that you try the following login details:
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Username</th>
                                    <td>cindy_clawford</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>pumpup</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class=\"colorgraph\" />

                <br/>

                {% if error %}
                    <div class=\"alert alert-block alert-danger\">{{ error.messageKey|trans }}</div>
                {% endif %}

                <input type=\"text\"
                       class=\"form-control js-login-field-username\"
                       name=\"_username\"
                       value=\"{{ last_username }}\"
                       required=\"required\"
                       placeholder=\"{{ 'security.login.username'|trans }}\"
                />
                <input type=\"password\"
                       class=\"form-control\"
                       name=\"_password\"
                       required=\"required\"
                       placeholder=\"{{ 'security.login.password'|trans }}\"
                />

                <input type=\"checkbox\" name=\"_remember_me\" checked style=\"display: none;\" />

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">
                    Login
                </button>
            </form>
        </div>
    </div>
{% endblock fos_user_content %}
", "bundles/FOSUserBundle/Security/login.html.twig", "/var/www/react_playground/templates/bundles/FOSUserBundle/Security/login.html.twig");
    }
}
