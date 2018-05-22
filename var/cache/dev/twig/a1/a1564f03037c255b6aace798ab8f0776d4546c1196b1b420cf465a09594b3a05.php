<?php

/* /bezoeker/index.html.twig */
class __TwigTemplate_2ca5d9931b0776eaea51922d23a68e9a4c9d29abcb4b016fd1683e78e3656f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "/bezoeker/index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bezoeker/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/bezoeker/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"text-center\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images.jpeg"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\">
        <h1>Trainingfactory</h1>
    </div>
    <nav class=\"navbar navbar-default\">
        <a class=\"col-md-2\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
        <a class=\"col-md-2\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gedrag");
        echo "\">Gedragsregels</a>
        <a class=\"col-md-2\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aanbod");
        echo "\">Les aanbod</a>
        <a class=\"col-md-2\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a>
        <a class=\"col-md-2\">Inloggen</a>
    </nav>
    <h2 class=\"text-center\">Welkom bij Trainings Centrum Den Haag</h2>

    <p class=\"text-center\">Den Haag Traing Center is een sportschool waar onder professionele begeleiding in een veilige omgeving verschillende soorten martial arts-,
        <br>indoor bootcamp, personal- en small group trainingen worden aangeboden. Hier kan je je inschrijven op een les of uitschrijven op een les.</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/bezoeker/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  67 => 12,  63 => 11,  59 => 10,  52 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/bezoeker/index.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"text-center\">
        <img src=\"{{ asset('images.jpeg') }}\" width=\"100px\" height=\"100px\">
        <h1>Trainingfactory</h1>
    </div>
    <nav class=\"navbar navbar-default\">
        <a class=\"col-md-2\" href=\"{{ path('home') }}\">Home</a>
        <a class=\"col-md-2\" href=\"{{ path('gedrag') }}\">Gedragsregels</a>
        <a class=\"col-md-2\" href=\"{{ path('aanbod') }}\">Les aanbod</a>
        <a class=\"col-md-2\" href=\"{{ path('contact') }}\">Contact</a>
        <a class=\"col-md-2\">Inloggen</a>
    </nav>
    <h2 class=\"text-center\">Welkom bij Trainings Centrum Den Haag</h2>

    <p class=\"text-center\">Den Haag Traing Center is een sportschool waar onder professionele begeleiding in een veilige omgeving verschillende soorten martial arts-,
        <br>indoor bootcamp, personal- en small group trainingen worden aangeboden. Hier kan je je inschrijven op een les of uitschrijven op een les.</p>
{% endblock %}", "/bezoeker/index.html.twig", "C:\\MAMP\\htdocs\\trainingfactory\\app\\Resources\\views\\bezoeker\\index.html.twig");
    }
}
