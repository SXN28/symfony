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

/* track/details.html.twig */
class __TwigTemplate_21e0c19e208fc57b3a6a75d523bd67ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "track/details.html.twig", 1);
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
        yield "<style>
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: black;
        color: white;
    }

    .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-bottom: 50px;
    }

    .track-title {
        font-size: 2.5rem;
        margin: 20px 0;
        text-align: center;
    }

    .album-info {
        text-align: center;
        margin-bottom: 20px;
    }

    .album-info img {
        max-width: 300px;
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    }

    .track-info {
        background-color: #333;
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        max-width: 800px;
        color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    }

    .track-info h4 {
        margin-bottom: 10px;
    }

    .track-info a {
        color: red;
        text-decoration: none;
    }

    .track-info a:hover {
        text-decoration: underline;
    }

    .track-details {
        margin-bottom: 10px;
    }

    iframe {
        width: 100%;
    }

    .recommendations-section {
        margin-top: 40px;
    }

    .recommendations-section h2 {
        margin-top: 50px;
        margin-bottom: 20px;
        text-align: center;
    }

    .recommendation-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .recommendation-card {
        background-color: #222;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.8);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .recommendation-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(255, 255, 255, 0.3);
    }

    .recommendation-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .recommendation-card:hover img {
        transform: scale(1.05);
    }

    .recommendation-card h5 {
        font-size: 1.1rem;
        margin-bottom: 5px;
        color: #fff;
        font-weight: 500;
    }

    .recommendation-card .artist-name {
        font-size: 0.9rem;
        color: #ccc;
        margin-bottom: 10px;
    }

    .recommendation-card p a {
        color: red;
    }

    .recommendation-card h5 a {
        color: white;
    }

</style>

<div class=\"container\">
    <div class=\"album-info\">
        <img src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 141, $this->source); })()), "album", [], "any", false, false, false, 141), "images", [], "any", false, false, false, 141), 0, [], "array", false, false, false, 141), "url", [], "any", false, false, false, 141), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 141, $this->source); })()), "album", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141), "html", null, true);
        yield "\" class=\"img-fluid\">
    </div>

    <h1 class=\"track-title\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 144, $this->source); })()), "name", [], "any", false, false, false, 144), "html", null, true);
        yield "</h1>

    <div class=\"track-info\">
        <h4>Artiste(s): 
            ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 148, $this->source); })()), "artists", [], "any", false, false, false, 148));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 149
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\" >";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 149), "html", null, true);
            yield "</a>";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 149)) {
                yield ", ";
            }
            // line 150
            yield "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "        </h4>
        <div class=\"track-details\">
            <p><strong>Album :</strong> <a href=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 153, $this->source); })()), "album", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153)]), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 153, $this->source); })()), "album", [], "any", false, false, false, 153), "name", [], "any", false, false, false, 153), "html", null, true);
        yield "</a></p>
            <p><strong>Date de sortie :</strong> ";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 154, $this->source); })()), "album", [], "any", false, false, false, 154), "release_date", [], "any", false, false, false, 154), "html", null, true);
        yield "</p>
            <p><strong>Popularité :</strong> ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 155, $this->source); })()), "popularity", [], "any", false, false, false, 155), "html", null, true);
        yield "%</p>
            <p><strong>URL :</strong> <a href=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 156, $this->source); })()), "external_urls", [], "any", false, false, false, 156), "spotify", [], "any", false, false, false, 156), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 156, $this->source); })()), "external_urls", [], "any", false, false, false, 156), "spotify", [], "any", false, false, false, 156), "html", null, true);
        yield "</a></p>
        </div>
        
        <iframe src=\"https://open.spotify.com/embed/track/";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159), "html", null, true);
        yield "\" width=\"300\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
    </div>

    <div class=\"recommendations-section\">
        <h2>Chansons recommandées</h2>
        <div class=\"recommendation-row\">
            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 165, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recommendation"]) {
            // line 166
            yield "                <div class=\"recommendation-card\">
                    <img src=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "album", [], "any", false, false, false, 167), "images", [], "any", false, false, false, 167), 0, [], "array", false, false, false, 167), "url", [], "any", false, false, false, 167), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "name", [], "any", false, false, false, 167), "html", null, true);
            yield "\">
                    <h5><a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "name", [], "any", false, false, false, 168), "html", null, true);
            yield "</a></h5> <!-- Lien vers la chanson -->
                    <p class=\"artist-name\"><a href=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "artists", [], "any", false, false, false, 169), 0, [], "array", false, false, false, 169), "id", [], "any", false, false, false, 169)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "artists", [], "any", false, false, false, 169), 0, [], "array", false, false, false, 169), "name", [], "any", false, false, false, 169), "html", null, true);
            yield "</a></p> <!-- Lien vers l'artiste -->
                    <iframe src=\"https://open.spotify.com/embed/track/";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "id", [], "any", false, false, false, 170), "html", null, true);
            yield "\" width=\"90%\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recommendation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "        </div>
    </div>
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
        return "track/details.html.twig";
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
        return array (  339 => 173,  330 => 170,  324 => 169,  318 => 168,  312 => 167,  309 => 166,  305 => 165,  296 => 159,  288 => 156,  284 => 155,  280 => 154,  274 => 153,  270 => 151,  256 => 150,  247 => 149,  230 => 148,  223 => 144,  215 => 141,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: black;
        color: white;
    }

    .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-bottom: 50px;
    }

    .track-title {
        font-size: 2.5rem;
        margin: 20px 0;
        text-align: center;
    }

    .album-info {
        text-align: center;
        margin-bottom: 20px;
    }

    .album-info img {
        max-width: 300px;
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    }

    .track-info {
        background-color: #333;
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        max-width: 800px;
        color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    }

    .track-info h4 {
        margin-bottom: 10px;
    }

    .track-info a {
        color: red;
        text-decoration: none;
    }

    .track-info a:hover {
        text-decoration: underline;
    }

    .track-details {
        margin-bottom: 10px;
    }

    iframe {
        width: 100%;
    }

    .recommendations-section {
        margin-top: 40px;
    }

    .recommendations-section h2 {
        margin-top: 50px;
        margin-bottom: 20px;
        text-align: center;
    }

    .recommendation-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .recommendation-card {
        background-color: #222;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.8);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .recommendation-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(255, 255, 255, 0.3);
    }

    .recommendation-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .recommendation-card:hover img {
        transform: scale(1.05);
    }

    .recommendation-card h5 {
        font-size: 1.1rem;
        margin-bottom: 5px;
        color: #fff;
        font-weight: 500;
    }

    .recommendation-card .artist-name {
        font-size: 0.9rem;
        color: #ccc;
        margin-bottom: 10px;
    }

    .recommendation-card p a {
        color: red;
    }

    .recommendation-card h5 a {
        color: white;
    }

</style>

<div class=\"container\">
    <div class=\"album-info\">
        <img src=\"{{ track.album.images[0].url }}\" alt=\"{{ track.album.name }}\" class=\"img-fluid\">
    </div>

    <h1 class=\"track-title\">{{ track.name }}</h1>

    <div class=\"track-info\">
        <h4>Artiste(s): 
            {% for artist in track.artists %}
                <a href=\"{{ path('artist_details', {'id': artist.id}) }}\" >{{ artist.name }}</a>{% if not loop.last %}, {% endif %}
            {% endfor %}
        </h4>
        <div class=\"track-details\">
            <p><strong>Album :</strong> <a href=\"{{ path('track_details', {'id': track.album.id}) }}\" target=\"_blank\">{{ track.album.name }}</a></p>
            <p><strong>Date de sortie :</strong> {{ track.album.release_date }}</p>
            <p><strong>Popularité :</strong> {{ track.popularity }}%</p>
            <p><strong>URL :</strong> <a href=\"{{ track.external_urls.spotify }}\" target=\"_blank\">{{ track.external_urls.spotify }}</a></p>
        </div>
        
        <iframe src=\"https://open.spotify.com/embed/track/{{ track.id }}\" width=\"300\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
    </div>

    <div class=\"recommendations-section\">
        <h2>Chansons recommandées</h2>
        <div class=\"recommendation-row\">
            {% for recommendation in recommendations %}
                <div class=\"recommendation-card\">
                    <img src=\"{{ recommendation.album.images[0].url }}\" alt=\"{{ recommendation.name }}\">
                    <h5><a href=\"{{ path('track_details', {'id': recommendation.id}) }}\">{{ recommendation.name }}</a></h5> <!-- Lien vers la chanson -->
                    <p class=\"artist-name\"><a href=\"{{ path('artist_details', {'id': recommendation.artists[0].id}) }}\">{{ recommendation.artists[0].name }}</a></p> <!-- Lien vers l'artiste -->
                    <iframe src=\"https://open.spotify.com/embed/track/{{ recommendation.id }}\" width=\"90%\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "track/details.html.twig", "C:\\Users\\Clément\\symfony\\templates\\track\\details.html.twig");
    }
}
