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

/* artist/favorites.html.twig */
class __TwigTemplate_7587dcd752fde16a4af27bf810e22bcb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/favorites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/favorites.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artist/favorites.html.twig", 1);
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

        yield "Artistes Favoris";
        
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
        yield "<style>
    h1 {
        text-align: center;
        margin-bottom: 40px;
        color: white;
        font-size: 2em;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }

    .card {
        background-color: #444;
        color: white;
        width: 250px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s, box-shadow 0.2s;
        overflow: hidden;
    }


    .card h3 {
        font-size: 1.5em;
        margin: 15px 0;
        text-align: center;
    }

    .card h3 a {
        color: white;
    }

    .btn-fav {
        background-color: transparent;
        border: none;
        cursor: pointer;
        padding: 10px;
        transition: transform 0.2s;
    }


    .btn-fav i {
        font-size: 1.5em;
    }

    p {
        text-align: center;
        font-size: 1.1em;
        color: #666;
    }
</style>

<h1>Mes Artistes Favoris</h1>

";
        // line 65
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["favoriteArtists"]) || array_key_exists("favoriteArtists", $context) ? $context["favoriteArtists"] : (function () { throw new RuntimeError('Variable "favoriteArtists" does not exist.', 65, $this->source); })()))) {
            // line 66
            yield "    <p>Aucun artiste favori trouvé.</p>
";
        } else {
            // line 68
            yield "    <div class=\"card-container\">
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteArtists"]) || array_key_exists("favoriteArtists", $context) ? $context["favoriteArtists"] : (function () { throw new RuntimeError('Variable "favoriteArtists" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 70
                yield "            <div class=\"card\">
                <h3>
                    <a href=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 72), "html", null, true);
                yield "</a>
                </h3>
                <div class=\"favorite-form\">
                    <form action=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_favorites_artist", ["artistId" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                yield "\" method=\"post\">
                        <button type=\"submit\" title=\"Retirer des favoris\" class=\"btn-fav\">
                            <i class=\"fas fa-heart\" style=\"color: red;\"></i>
                        </button>
                    </form>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['artist'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "    </div>
";
        }
        // line 85
        yield "
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
        return "artist/favorites.html.twig";
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
        return array (  204 => 85,  200 => 83,  186 => 75,  178 => 72,  174 => 70,  170 => 69,  167 => 68,  163 => 66,  161 => 65,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Artistes Favoris{% endblock %}

{% block body %}
<style>
    h1 {
        text-align: center;
        margin-bottom: 40px;
        color: white;
        font-size: 2em;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }

    .card {
        background-color: #444;
        color: white;
        width: 250px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s, box-shadow 0.2s;
        overflow: hidden;
    }


    .card h3 {
        font-size: 1.5em;
        margin: 15px 0;
        text-align: center;
    }

    .card h3 a {
        color: white;
    }

    .btn-fav {
        background-color: transparent;
        border: none;
        cursor: pointer;
        padding: 10px;
        transition: transform 0.2s;
    }


    .btn-fav i {
        font-size: 1.5em;
    }

    p {
        text-align: center;
        font-size: 1.1em;
        color: #666;
    }
</style>

<h1>Mes Artistes Favoris</h1>

{% if favoriteArtists is empty %}
    <p>Aucun artiste favori trouvé.</p>
{% else %}
    <div class=\"card-container\">
        {% for artist in favoriteArtists %}
            <div class=\"card\">
                <h3>
                    <a href=\"{{ path('artist_details', { 'id': artist.id }) }}\">{{ artist.name }}</a>
                </h3>
                <div class=\"favorite-form\">
                    <form action=\"{{ path('app_remove_favorites_artist', { 'artistId': artist.id }) }}\" method=\"post\">
                        <button type=\"submit\" title=\"Retirer des favoris\" class=\"btn-fav\">
                            <i class=\"fas fa-heart\" style=\"color: red;\"></i>
                        </button>
                    </form>
                </div>
            </div>
        {% endfor %}
    </div>
{% endif %}

{% endblock %}
", "artist/favorites.html.twig", "C:\\Users\\Clément\\Desktop\\symfony\\templates\\artist\\favorites.html.twig");
    }
}
