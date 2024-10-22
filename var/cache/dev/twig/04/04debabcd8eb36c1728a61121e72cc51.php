<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* track/favorites.html.twig */
class __TwigTemplate_d2b362a0720729afd0ca6fbf7da79b94 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/favorites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/favorites.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "track/favorites.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mes Favoris";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<style>
    h1 {
        text-align: center;
        margin-bottom: 40px;
    }

    .favorites-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .card {
        background-color: #333;
        color: white;
        width: 250px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .card-body {
        padding: 15px;
        text-align: center;
    }

    .card h2 {
        font-size: 1.2em;
        margin: 10px 0;
    }

    .btn {
        background-color: #cc0000;
        color: white;
        padding: 10px 20px;
        border: none;
        font-size: 14px;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .btn:hover {
        background-color: #ff1a1a;
    }

    p {
        margin-top: 20px;
        text-align: center;
        font-size: 1.1em;
    }
</style>

<h1>Mes Favoris</h1>

<div class=\"favorites-container\">
    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteTracks"]) || array_key_exists("favoriteTracks", $context) ? $context["favoriteTracks"] : (function () { throw new RuntimeError('Variable "favoriteTracks" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 76
            yield "        <div class=\"card\">
            ";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, $context["track"], "pictureLink", [], "any", false, false, false, 77)) {
                // line 78
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "pictureLink", [], "any", false, false, false, 78), "html", null, true);
                yield "\" alt=\"Image de la musique\">
            ";
            } else {
                // line 80
                yield "                <img src=\"/path/to/default-image.jpg\" alt=\"Image par défaut\">
            ";
            }
            // line 82
            yield "
            <div class=\"card-body\">
                <h2>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "name", [], "any", false, false, false, 84), "html", null, true);
            yield "</h2>
                <form action=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_favorites", ["trackId" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\" method=\"post\">
                    <button type=\"submit\" class=\"btn\">Supprimer des favoris</button>
                </form>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            yield "        <p>Aucun morceau dans vos favoris.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['track'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "track/favorites.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  217 => 93,  210 => 91,  199 => 85,  195 => 84,  191 => 82,  187 => 80,  181 => 78,  179 => 77,  176 => 76,  171 => 75,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Favoris{% endblock %}

{% block body %}

<style>
    h1 {
        text-align: center;
        margin-bottom: 40px;
    }

    .favorites-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .card {
        background-color: #333;
        color: white;
        width: 250px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .card-body {
        padding: 15px;
        text-align: center;
    }

    .card h2 {
        font-size: 1.2em;
        margin: 10px 0;
    }

    .btn {
        background-color: #cc0000;
        color: white;
        padding: 10px 20px;
        border: none;
        font-size: 14px;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .btn:hover {
        background-color: #ff1a1a;
    }

    p {
        margin-top: 20px;
        text-align: center;
        font-size: 1.1em;
    }
</style>

<h1>Mes Favoris</h1>

<div class=\"favorites-container\">
    {% for track in favoriteTracks %}
        <div class=\"card\">
            {% if track.pictureLink %}
                <img src=\"{{ track.pictureLink }}\" alt=\"Image de la musique\">
            {% else %}
                <img src=\"/path/to/default-image.jpg\" alt=\"Image par défaut\">
            {% endif %}

            <div class=\"card-body\">
                <h2>{{ track.name }}</h2>
                <form action=\"{{ path('app_remove_favorites', {'trackId': track.id}) }}\" method=\"post\">
                    <button type=\"submit\" class=\"btn\">Supprimer des favoris</button>
                </form>
            </div>
        </div>
    {% else %}
        <p>Aucun morceau dans vos favoris.</p>
    {% endfor %}
</div>

{% endblock %}
", "track/favorites.html.twig", "C:\\Users\\Clément\\Desktop\\symfony\\templates\\track\\favorites.html.twig");
    }
}
