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

/* footer.html.twig */
class __TwigTemplate_d15655807c1983057c2f5c2942fb800088a3c4d169237e1583ba07d74d1bb76f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-12 col-md-4\">
            <h4>Contact</h4>

            <ul class=\"footer-list\">
                <li>Formulaire de contact</li>
                <li>perissinotto.teddy@gmail.com</li>
            </ul>

        </div>

        <div class=\"col-12 col-md-4\">
            <h4>Informations</h4>

            <ul class=\"footer-list\">
                <li>Mentions Légales</li>
                <li>Conditions d'utilisation</li>
                <li>A propos</li>
            </ul>

        </div>

        <div class=\"col-12 col-md-4\">
            <h4>Autres</h4>

            <ul class=\"footer-list\">
                <li>Collection</li>
                <li>Séries/Films</li>
                <li>Jeux Vidéo</li>
            </ul>

        </div>

    </div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-12 col-md-4\">
            <h4>Contact</h4>

            <ul class=\"footer-list\">
                <li>Formulaire de contact</li>
                <li>perissinotto.teddy@gmail.com</li>
            </ul>

        </div>

        <div class=\"col-12 col-md-4\">
            <h4>Informations</h4>

            <ul class=\"footer-list\">
                <li>Mentions Légales</li>
                <li>Conditions d'utilisation</li>
                <li>A propos</li>
            </ul>

        </div>

        <div class=\"col-12 col-md-4\">
            <h4>Autres</h4>

            <ul class=\"footer-list\">
                <li>Collection</li>
                <li>Séries/Films</li>
                <li>Jeux Vidéo</li>
            </ul>

        </div>

    </div>

</div>
", "footer.html.twig", "C:\\wamp64\\www\\teddy_project\\templates\\footer.html.twig");
    }
}
