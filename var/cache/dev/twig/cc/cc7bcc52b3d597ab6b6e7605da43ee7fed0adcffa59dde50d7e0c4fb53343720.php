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

/* lift/_leaderboard.html.twig */
class __TwigTemplate_cf37011ec9e7c7486fcddd97fff482598dfba5b583af2f5edebc4601e2f8ae92 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lift/_leaderboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lift/_leaderboard.html.twig"));

        // line 1
        echo "<table class=\"table leaderboard-table-striped leaderboard-table-hover leaderboard-table\">
    <thead>
    <tr>
        <th class=\"text-center\">Username</th>
        <th class=\"text-center\">Weight Lifted</th>
        <th class=\"text-center\">Cat Equivalent</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaderboard"]) || array_key_exists("leaderboard", $context) ? $context["leaderboard"] : (function () { throw new RuntimeError('Variable "leaderboard" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
            // line 11
            echo "        <tr>
            <td class=\"text-center\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "username", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
            <td class=\"text-center\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "weight", [], "any", false, false, false, 13), "html", null, true);
            echo "lbs</td>
            <td class=\"text-center\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "in_cats", [], "any", false, false, false, 14), "html", null, true);
            echo " fat cats</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lift/_leaderboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  67 => 14,  63 => 13,  59 => 12,  56 => 11,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table leaderboard-table-striped leaderboard-table-hover leaderboard-table\">
    <thead>
    <tr>
        <th class=\"text-center\">Username</th>
        <th class=\"text-center\">Weight Lifted</th>
        <th class=\"text-center\">Cat Equivalent</th>
    </tr>
    </thead>
    <tbody>
    {% for leader in leaderboard %}
        <tr>
            <td class=\"text-center\">{{ leader.username }}</td>
            <td class=\"text-center\">{{ leader.weight }}lbs</td>
            <td class=\"text-center\">{{ leader.in_cats }} fat cats</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "lift/_leaderboard.html.twig", "/var/www/react_playground/templates/lift/_leaderboard.html.twig");
    }
}
