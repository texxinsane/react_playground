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

/* lift/_form.html.twig */
class __TwigTemplate_f6792b63fc901055401036caf394242106e77957d595f52cd083bd37f3e44cd1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lift/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lift/_form.html.twig"));

        // line 1
        echo "<form class=\"form-inline js-new-rep-log-form\" novalidate data-url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rep_log_new");
        echo "\">
    <div class=\"form-group\">
        <label class=\"sr-only control-label required\" for=\"rep_log_item\">
            What did you lift?
        </label>
        <select id=\"rep_log_item\"
                name=\"item\"
                required=\"required\"
                class=\"form-control\">
            <option value=\"\" selected=\"selected\">What did you lift?</option>
            <option value=\"cat\">Cat</option>
            <option value=\"fat_cat\">Big Fat Cat</option>
            <option value=\"laptop\">My Laptop</option>
            <option value=\"coffee_cup\">Coffee Cup</option>
        </select>
    </div>

    <div class=\"form-group\">
        <label class=\"sr-only control-label required\" for=\"rep_log_reps\">
            How many times?
        </label>
        <input type=\"number\" id=\"rep_log_reps\"
               name=\"reps\" required=\"required\"
               placeholder=\"How many times?\"
               class=\"form-control\"/>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">I Lifted it!</button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lift/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"form-inline js-new-rep-log-form\" novalidate data-url=\"{{ path('rep_log_new') }}\">
    <div class=\"form-group\">
        <label class=\"sr-only control-label required\" for=\"rep_log_item\">
            What did you lift?
        </label>
        <select id=\"rep_log_item\"
                name=\"item\"
                required=\"required\"
                class=\"form-control\">
            <option value=\"\" selected=\"selected\">What did you lift?</option>
            <option value=\"cat\">Cat</option>
            <option value=\"fat_cat\">Big Fat Cat</option>
            <option value=\"laptop\">My Laptop</option>
            <option value=\"coffee_cup\">Coffee Cup</option>
        </select>
    </div>

    <div class=\"form-group\">
        <label class=\"sr-only control-label required\" for=\"rep_log_reps\">
            How many times?
        </label>
        <input type=\"number\" id=\"rep_log_reps\"
               name=\"reps\" required=\"required\"
               placeholder=\"How many times?\"
               class=\"form-control\"/>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">I Lifted it!</button>
</form>
", "lift/_form.html.twig", "/var/www/react_playground/templates/lift/_form.html.twig");
    }
}
