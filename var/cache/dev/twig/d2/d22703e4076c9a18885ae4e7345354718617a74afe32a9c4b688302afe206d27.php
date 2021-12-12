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

/* admin/slider/index.html.twig */
class __TwigTemplate_a20a71a0e2b9647ec4f29a709f2d6d0001aa3062ac1d187c7a312555307fe204 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/slider/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/slider/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/slider/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration des Sliders";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Gestion des Sliders</h1>

<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_slider_add");
        echo "\" class=\"btn btn-primary mt-3\">Ajouter un slider</a>

<table class=\"table table-bordered table-hover mt-3\">
    <thead class=\"bg-primary text-white\">
        <tr>
            <td scope=\"col\">ID</td>
            <td scope=\"col\">Titre</td>
            <td scope=\"col\">Active</td>
            <td scope=\"col\">Modifier</td>
            <td scope=\"col\">Supprimer</td>
        </tr>
    </thead>
    <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) || array_key_exists("sliders", $context) ? $context["sliders"] : (function () { throw new RuntimeError('Variable "sliders" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 23
            echo "            <tr>
                <td scope=\"row\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>

                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input slider-active\" ";
            // line 29
            echo ((twig_get_attribute($this->env, $this->source, $context["slider"], "active", [], "any", false, false, false, 29)) ? ("checked") : (""));
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" id=\"switch-activate-slider\">
                        <label class=\"custom-control-label\" for=\"switch-activate-slider\"></label>
                    </div>
                    
                </td>
                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_slider_update", ["id" => twig_get_attribute($this->env, $this->source, $context["slider"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                        Modifier    
                    </a>
                </td>
                 <td>
                   \t<a href=\"#\" class=\"btn btn-danger modal-trigger-slider\" data-toggle=\"modal\" data-target=\"#modal-delete\" data-id=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "\">Supprimer</a>
                </td>
            </tr>            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </tbody>
</table>


<div class=\"modal fade\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer un slider</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"button\" class=\"btn btn-danger\"><a href=\"\">Supprimer le slider</a></button> 
      </div>
    </div>
  </div>
</div>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "
";
        // line 73
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/admin/back.js"), "html", null, true);
        echo "\"></script> 

    
          
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/slider/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 75,  207 => 73,  204 => 72,  194 => 71,  159 => 44,  147 => 40,  139 => 35,  128 => 29,  121 => 25,  117 => 24,  114 => 23,  110 => 22,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Administration des Sliders{% endblock %}

{% block body %}

<h1>Gestion des Sliders</h1>

<a href=\"{{path(\"admin_slider_add\")}}\" class=\"btn btn-primary mt-3\">Ajouter un slider</a>

<table class=\"table table-bordered table-hover mt-3\">
    <thead class=\"bg-primary text-white\">
        <tr>
            <td scope=\"col\">ID</td>
            <td scope=\"col\">Titre</td>
            <td scope=\"col\">Active</td>
            <td scope=\"col\">Modifier</td>
            <td scope=\"col\">Supprimer</td>
        </tr>
    </thead>
    <tbody>
        {% for slider in sliders %}
            <tr>
                <td scope=\"row\">{{slider.id}}</td>
                <td>{{slider.title}}</td>
                <td>

                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input slider-active\" {{ (slider.active) ? 'checked' : ''}} data-id=\"{{slider.id}}\" id=\"switch-activate-slider\">
                        <label class=\"custom-control-label\" for=\"switch-activate-slider\"></label>
                    </div>
                    
                </td>
                <td>
                    <a href=\"{{ path(\"admin_slider_update\", {id:slider.id}) }}\" class=\"btn btn-success\">
                        Modifier    
                    </a>
                </td>
                 <td>
                   \t<a href=\"#\" class=\"btn btn-danger modal-trigger-slider\" data-toggle=\"modal\" data-target=\"#modal-delete\" data-id=\"{{slider.id}}\" data-title=\"{{slider.title}}\">Supprimer</a>
                </td>
            </tr>            
        {% endfor %}
    </tbody>
</table>


<div class=\"modal fade\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer un slider</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"button\" class=\"btn btn-danger\"><a href=\"\">Supprimer le slider</a></button> 
      </div>
    </div>
  </div>
</div>

    
{% endblock %}

{% block javascripts %}

{{ parent() }}

    <script type=\"text/javascript\" src=\"{{ asset('assets/js/admin/back.js') }}\"></script> 

    
          
{% endblock %}
", "admin/slider/index.html.twig", "C:\\wamp64\\www\\teddy_project\\templates\\admin\\slider\\index.html.twig");
    }
}
