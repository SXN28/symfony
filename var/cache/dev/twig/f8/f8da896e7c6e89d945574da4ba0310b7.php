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

/* artist/details.html.twig */
class __TwigTemplate_f6d19160212510da4917eaffc8f992a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artist/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "
<style>
    body, html {
        margin: 0;
        padding: 0;
        background-color: #121212; /* Couleur de fond sombre */
        color: white; /* Couleur du texte */
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; /* Typographie similaire à Spotify */
    }

    .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px; /* Ajout de padding pour un meilleur espacement */
    }

    h1 {
        font-size: 2.5rem; /* Titre plus grand */
        margin-bottom: 20px; /* Espacement inférieur */
    }

    img {
        border-radius: 10px; /* Coins arrondis pour les images */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6); /* Ombre pour un effet de profondeur */
        max-width: 300px; /* Limite la largeur de l'image */
        margin-bottom: 20px; /* Espacement inférieur pour l'image */
    }

    .info {
        background-color: #1db954; /* Couleur d'accent pour les sections d'information */
        padding: 15px; /* Espacement à l'intérieur des sections */
        border-radius: 8px; /* Coins arrondis */
        margin-bottom: 15px; /* Espacement entre les sections */
        width: 100%;
        max-width: 600px; /* Limite la largeur des sections d'information */
        text-align: center; /* Centre le texte à l'intérieur des sections */
    }

    .genres {
        font-style: italic; /* Style italique pour les genres */
        color: #b3b3b3; /* Couleur grise pour un contraste subtil */
    }

    .albums, .top-tracks {
        margin-top: 20px;
        width: 100%;
        max-width: 600px; /* Limite la largeur des listes */
    }

    .album, .track {
        background-color: #333; /* Couleur de fond pour les albums et les morceaux */
        padding: 10px; /* Espacement interne */
        border-radius: 5px; /* Coins arrondis */
        margin-bottom: 10px; /* Espacement entre les éléments */
        color: white; /* Couleur du texte */
    }

    .track-title {
        font-weight: bold; /* Met en gras les titres des morceaux */
    }
</style>



<div class=\"container\">
    <h1>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
        yield "</h1>
    ";
        // line 73
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 73, $this->source); })()), "images", [], "any", false, false, false, 73))) {
            // line 74
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 74, $this->source); })()), "images", [], "any", false, false, false, 74), 0, [], "array", false, false, false, 74), "url", [], "any", false, false, false, 74), "html", null, true);
            yield "\" alt=\"Artist image\" class=\"img-fluid\">
    ";
        }
        // line 76
        yield "    <div class=\"info\">
        <p><strong>Popularité:</strong> ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 77, $this->source); })()), "popularity", [], "any", false, false, false, 77), "html", null, true);
        yield "</p>
        <p><strong>Genres:</strong> <span class=\"genres\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 78, $this->source); })()), "genres", [], "any", false, false, false, 78), ", "), "html", null, true);
        yield "</span></p>
        <p><strong>Nombre de Suiveurs:</strong> ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 79, $this->source); })()), "followers", [], "any", false, false, false, 79), "total", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
    </div>

    <!-- Albums -->
    <div class=\"albums\">
        <h2>Tous les Albums</h2>
        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 86
            yield "            <div class=\"album\">
                <p><strong>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "name", [], "any", false, false, false, 87), "html", null, true);
            yield "</strong> (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "release_date", [], "any", false, false, false, 87), "html", null, true);
            yield ")</p>
                <p><strong>Nombre de Chansons:</strong> ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "total_tracks", [], "any", false, false, false, 88), "html", null, true);
            yield "</p>
                ";
            // line 89
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "images", [], "any", false, false, false, 89))) {
                // line 90
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["album"], "images", [], "any", false, false, false, 90), 0, [], "array", false, false, false, 90), "url", [], "any", false, false, false, 90), "html", null, true);
                yield "\" alt=\"Album cover\" class=\"img-fluid\" style=\"max-width: 150px; border-radius: 8px;\">
                ";
            }
            // line 92
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['album'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "    </div>

    <!-- Top Tracks -->
    <div class=\"top-tracks\">
        <h2>5 Chansons les Plus Écoutées</h2>
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_tracks"]) || array_key_exists("top_tracks", $context) ? $context["top_tracks"] : (function () { throw new RuntimeError('Variable "top_tracks" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 100
            yield "            <div class=\"track\">
                <p class=\"track-title\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "name", [], "any", false, false, false, 101), "html", null, true);
            yield "</p>
                <p><strong>Popularité:</strong> ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "popularity", [], "any", false, false, false, 102), "html", null, true);
            yield "</p> <!-- Utilisez la propriété 'popularity' -->
                <p><strong>Durée:</strong> ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["track"], "duration_ms", [], "any", false, false, false, 103) / 60000), 2), "html", null, true);
            yield " min</p> <!-- Durée formatée -->
                ";
            // line 104
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 104), "images", [], "any", false, false, false, 104))) {
                // line 105
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 105), "images", [], "any", false, false, false, 105), 0, [], "array", false, false, false, 105), "url", [], "any", false, false, false, 105), "html", null, true);
                yield "\" alt=\"Album cover\" class=\"img-fluid\" style=\"max-width: 100px; border-radius: 8px;\">
                ";
            }
            // line 107
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['track'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "    </div>


</div>

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
        return "artist/details.html.twig";
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
        return array (  251 => 109,  244 => 107,  238 => 105,  236 => 104,  232 => 103,  228 => 102,  224 => 101,  221 => 100,  217 => 99,  210 => 94,  203 => 92,  197 => 90,  195 => 89,  191 => 88,  185 => 87,  182 => 86,  178 => 85,  169 => 79,  165 => 78,  161 => 77,  158 => 76,  152 => 74,  150 => 73,  146 => 72,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<style>
    body, html {
        margin: 0;
        padding: 0;
        background-color: #121212; /* Couleur de fond sombre */
        color: white; /* Couleur du texte */
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; /* Typographie similaire à Spotify */
    }

    .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px; /* Ajout de padding pour un meilleur espacement */
    }

    h1 {
        font-size: 2.5rem; /* Titre plus grand */
        margin-bottom: 20px; /* Espacement inférieur */
    }

    img {
        border-radius: 10px; /* Coins arrondis pour les images */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6); /* Ombre pour un effet de profondeur */
        max-width: 300px; /* Limite la largeur de l'image */
        margin-bottom: 20px; /* Espacement inférieur pour l'image */
    }

    .info {
        background-color: #1db954; /* Couleur d'accent pour les sections d'information */
        padding: 15px; /* Espacement à l'intérieur des sections */
        border-radius: 8px; /* Coins arrondis */
        margin-bottom: 15px; /* Espacement entre les sections */
        width: 100%;
        max-width: 600px; /* Limite la largeur des sections d'information */
        text-align: center; /* Centre le texte à l'intérieur des sections */
    }

    .genres {
        font-style: italic; /* Style italique pour les genres */
        color: #b3b3b3; /* Couleur grise pour un contraste subtil */
    }

    .albums, .top-tracks {
        margin-top: 20px;
        width: 100%;
        max-width: 600px; /* Limite la largeur des listes */
    }

    .album, .track {
        background-color: #333; /* Couleur de fond pour les albums et les morceaux */
        padding: 10px; /* Espacement interne */
        border-radius: 5px; /* Coins arrondis */
        margin-bottom: 10px; /* Espacement entre les éléments */
        color: white; /* Couleur du texte */
    }

    .track-title {
        font-weight: bold; /* Met en gras les titres des morceaux */
    }
</style>



<div class=\"container\">
    <h1>{{ artist.name }}</h1>
    {% if artist.images is not empty %}
        <img src=\"{{ artist.images[0].url }}\" alt=\"Artist image\" class=\"img-fluid\">
    {% endif %}
    <div class=\"info\">
        <p><strong>Popularité:</strong> {{ artist.popularity }}</p>
        <p><strong>Genres:</strong> <span class=\"genres\">{{ artist.genres|join(', ') }}</span></p>
        <p><strong>Nombre de Suiveurs:</strong> {{ artist.followers.total }}</p>
    </div>

    <!-- Albums -->
    <div class=\"albums\">
        <h2>Tous les Albums</h2>
        {% for album in albums %}
            <div class=\"album\">
                <p><strong>{{ album.name }}</strong> ({{ album.release_date }})</p>
                <p><strong>Nombre de Chansons:</strong> {{ album.total_tracks }}</p>
                {% if album.images is not empty %}
                    <img src=\"{{ album.images[0].url }}\" alt=\"Album cover\" class=\"img-fluid\" style=\"max-width: 150px; border-radius: 8px;\">
                {% endif %}
            </div>
        {% endfor %}
    </div>

    <!-- Top Tracks -->
    <div class=\"top-tracks\">
        <h2>5 Chansons les Plus Écoutées</h2>
        {% for track in top_tracks %}
            <div class=\"track\">
                <p class=\"track-title\">{{ track.name }}</p>
                <p><strong>Popularité:</strong> {{ track.popularity }}</p> <!-- Utilisez la propriété 'popularity' -->
                <p><strong>Durée:</strong> {{ (track.duration_ms / 60000)|number_format(2) }} min</p> <!-- Durée formatée -->
                {% if track.album.images is not empty %}
                    <img src=\"{{ track.album.images[0].url }}\" alt=\"Album cover\" class=\"img-fluid\" style=\"max-width: 100px; border-radius: 8px;\">
                {% endif %}
            </div>
        {% endfor %}
    </div>


</div>

{% endblock %}
", "artist/details.html.twig", "C:\\Users\\Clément\\symfony\\templates\\artist\\details.html.twig");
    }
}
