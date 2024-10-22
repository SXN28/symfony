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
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header img {
        border-radius: 10px;
        max-width: 250px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    }

    .header h1 {
        font-size: 2.5rem;
        margin: 10px 0;
    }

    h2 {
        margin-top: 50px;
        margin-bottom: 20px;
        text-align: center;
    }

    .info {
        background-color: red;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        width: 100%;
        max-width: 600px;
        text-align: center;
    }

    .genres {
        font-style: italic;
        color: #b3b3b3;
    }

    .albums, .top-tracks {
        width: 100%;
        max-width: 1200px;
        margin-top: 20px;
    }

    /* Styles pour les cartes d'albums */
    .album-card {
        background-color: #333;
        padding: 15px;
        border-radius: 8px;
        margin: 10px;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 45%;
        height: auto;
        transition: transform 0.2s;
    }

    .album-card:hover {
        transform: scale(1.05);
    }

    .album-card img {
        max-width: 150px;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .track-row {
        display: flex;
        flex-direction: row;
        align-items: center;
        background-color: #333;
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 10px;
        width: 100%;
    }

    .track-row img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
        border-radius: 5px;
    }

    .track-info {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .track-details {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
        flex-grow: 1;
    }

    .track-title {
        font-size: 1.2em;
        margin: 0 0 5px 0;
    }

    .track-title a {
        color: white;
    }

    .track-artists {
        font-size: 1em;
        color: white;
        margin: 0;
    }

    .track-artists a {
        text-decoration: none;
        color: red;
    }

    .track-artists a:hover {
        text-decoration: underline;
    }

    .favorite-form {
        margin-right: 20px;
    }

    .favorite-form button {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    .favorite-form i {
        font-size: 1.5em;
    }
</style>

<div class=\"container\">
    <div class=\"header\">
        ";
        // line 166
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 166, $this->source); })()), "images", [], "any", false, false, false, 166))) {
            // line 167
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 167, $this->source); })()), "images", [], "any", false, false, false, 167), 0, [], "array", false, false, false, 167), "url", [], "any", false, false, false, 167), "html", null, true);
            yield "\" alt=\"Artist image\" class=\"img-fluid\">
        ";
        }
        // line 169
        yield "        <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 169, $this->source); })()), "name", [], "any", false, false, false, 169), "html", null, true);
        yield "</h1>
    </div>

    <div class=\"info\">
        <p><strong>Popularité:</strong> ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 173, $this->source); })()), "popularity", [], "any", false, false, false, 173), "html", null, true);
        yield "</p>
        <p><strong>Genres:</strong> <span class=\"genres\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 174, $this->source); })()), "genres", [], "any", false, false, false, 174), ", "), "html", null, true);
        yield "</span></p>
        <p><strong>Nombre de Suiveurs:</strong> ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 175, $this->source); })()), "followers", [], "any", false, false, false, 175), "total", [], "any", false, false, false, 175), "html", null, true);
        yield "</p>
    </div>

    <div class=\"albums\">
        <h2>Tous les Albums</h2>
        <div class=\"albums-container\" style=\"display: flex; flex-wrap: wrap; justify-content: center;\">
            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 181, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 182
            yield "                <div class=\"album-card\">
                    ";
            // line 183
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "images", [], "any", false, false, false, 183))) {
                // line 184
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["album"], "images", [], "any", false, false, false, 184), 0, [], "array", false, false, false, 184), "url", [], "any", false, false, false, 184), "html", null, true);
                yield "\" alt=\"Album cover\" class=\"img-fluid\">
                    ";
            }
            // line 186
            yield "                    <p><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "name", [], "any", false, false, false, 186), "html", null, true);
            yield "</strong></p>
                    <p><strong>Nombre de Chansons:</strong> ";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "total_tracks", [], "any", false, false, false, 187), "html", null, true);
            yield "</p>
                    <p><strong>Date de sortie:</strong> ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["album"], "release_date", [], "any", false, false, false, 188), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['album'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "        </div>
    </div>

    <div class=\"top-tracks\">
        <h2>10 Chansons les Plus Écoutées</h2>
        <div class=\"tracks-list\">
            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_tracks"]) || array_key_exists("top_tracks", $context) ? $context["top_tracks"] : (function () { throw new RuntimeError('Variable "top_tracks" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 198
            yield "                <div class=\"track-row\">
                    <!-- Album cover image -->
                    ";
            // line 200
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 200), "images", [], "any", false, false, false, 200))) {
                // line 201
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 201), "images", [], "any", false, false, false, 201), 0, [], "array", false, false, false, 201), "url", [], "any", false, false, false, 201), "html", null, true);
                yield "\" alt=\"Album cover\">
                    ";
            } else {
                // line 203
                yield "                        <img src=\"default-album-cover.jpg\" alt=\"Default Album Cover\">
                    ";
            }
            // line 205
            yield "
                    <div class=\"track-info\">
                        <!-- Track details (name and artists) -->
                        <div class=\"track-details\">
                            <h5 class=\"track-title\">
                                <a href=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 210)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "name", [], "any", false, false, false, 210), "html", null, true);
            yield "</a>
                            </h5>
                            <p class=\"track-artists\">
                                ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 213));
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
                // line 214
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 214)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 214), "html", null, true);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 214)) {
                    yield ", ";
                }
                // line 215
                yield "                                ";
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
            // line 216
            yield "                            </p>
                        </div>

                        <div class=\"favorite-form\">
                            ";
            // line 220
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "hasTrack", [CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 220)], "method", false, false, false, 220)) {
                // line 221
                yield "                                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_favorites", ["trackId" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 221)]), "html", null, true);
                yield "\" method=\"post\">
                                    <button type=\"submit\">
                                        <i class=\"fas fa-heart\" style=\"color: red;\"></i> <!-- Filled heart icon -->
                                    </button>
                                </form>
                            ";
            } else {
                // line 227
                yield "                                <form action=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_favorites");
                yield "\" method=\"post\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 228), "html", null, true);
                yield "\">
                                    <button type=\"submit\">
                                        <i class=\"far fa-heart\" style=\"color: red;\"></i>
                                    </button>
                                </form>
                            ";
            }
            // line 234
            yield "                        </div>

                        <iframe src=\"https://open.spotify.com/embed/track/";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 236), "html", null, true);
            yield "\" width=\"300\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['track'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
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
        return array (  435 => 240,  425 => 236,  421 => 234,  412 => 228,  407 => 227,  397 => 221,  395 => 220,  389 => 216,  375 => 215,  366 => 214,  349 => 213,  341 => 210,  334 => 205,  330 => 203,  324 => 201,  322 => 200,  318 => 198,  314 => 197,  306 => 191,  297 => 188,  293 => 187,  288 => 186,  282 => 184,  280 => 183,  277 => 182,  273 => 181,  264 => 175,  260 => 174,  256 => 173,  248 => 169,  242 => 167,  240 => 166,  76 => 4,  63 => 3,  40 => 1,);
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
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header img {
        border-radius: 10px;
        max-width: 250px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    }

    .header h1 {
        font-size: 2.5rem;
        margin: 10px 0;
    }

    h2 {
        margin-top: 50px;
        margin-bottom: 20px;
        text-align: center;
    }

    .info {
        background-color: red;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        width: 100%;
        max-width: 600px;
        text-align: center;
    }

    .genres {
        font-style: italic;
        color: #b3b3b3;
    }

    .albums, .top-tracks {
        width: 100%;
        max-width: 1200px;
        margin-top: 20px;
    }

    /* Styles pour les cartes d'albums */
    .album-card {
        background-color: #333;
        padding: 15px;
        border-radius: 8px;
        margin: 10px;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 45%;
        height: auto;
        transition: transform 0.2s;
    }

    .album-card:hover {
        transform: scale(1.05);
    }

    .album-card img {
        max-width: 150px;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .track-row {
        display: flex;
        flex-direction: row;
        align-items: center;
        background-color: #333;
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 10px;
        width: 100%;
    }

    .track-row img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
        border-radius: 5px;
    }

    .track-info {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .track-details {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
        flex-grow: 1;
    }

    .track-title {
        font-size: 1.2em;
        margin: 0 0 5px 0;
    }

    .track-title a {
        color: white;
    }

    .track-artists {
        font-size: 1em;
        color: white;
        margin: 0;
    }

    .track-artists a {
        text-decoration: none;
        color: red;
    }

    .track-artists a:hover {
        text-decoration: underline;
    }

    .favorite-form {
        margin-right: 20px;
    }

    .favorite-form button {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    .favorite-form i {
        font-size: 1.5em;
    }
</style>

<div class=\"container\">
    <div class=\"header\">
        {% if artist.images is not empty %}
            <img src=\"{{ artist.images[0].url }}\" alt=\"Artist image\" class=\"img-fluid\">
        {% endif %}
        <h1>{{ artist.name }}</h1>
    </div>

    <div class=\"info\">
        <p><strong>Popularité:</strong> {{ artist.popularity }}</p>
        <p><strong>Genres:</strong> <span class=\"genres\">{{ artist.genres|join(', ') }}</span></p>
        <p><strong>Nombre de Suiveurs:</strong> {{ artist.followers.total }}</p>
    </div>

    <div class=\"albums\">
        <h2>Tous les Albums</h2>
        <div class=\"albums-container\" style=\"display: flex; flex-wrap: wrap; justify-content: center;\">
            {% for album in albums %}
                <div class=\"album-card\">
                    {% if album.images is not empty %}
                        <img src=\"{{ album.images[0].url }}\" alt=\"Album cover\" class=\"img-fluid\">
                    {% endif %}
                    <p><strong>{{ album.name }}</strong></p>
                    <p><strong>Nombre de Chansons:</strong> {{ album.total_tracks }}</p>
                    <p><strong>Date de sortie:</strong> {{ album.release_date }}</p>
                </div>
            {% endfor %}
        </div>
    </div>

    <div class=\"top-tracks\">
        <h2>10 Chansons les Plus Écoutées</h2>
        <div class=\"tracks-list\">
            {% for track in top_tracks %}
                <div class=\"track-row\">
                    <!-- Album cover image -->
                    {% if track.album.images is not empty %}
                        <img src=\"{{ track.album.images[0].url }}\" alt=\"Album cover\">
                    {% else %}
                        <img src=\"default-album-cover.jpg\" alt=\"Default Album Cover\">
                    {% endif %}

                    <div class=\"track-info\">
                        <!-- Track details (name and artists) -->
                        <div class=\"track-details\">
                            <h5 class=\"track-title\">
                                <a href=\"{{ path('track_details', {'id': track.id}) }}\">{{ track.name }}</a>
                            </h5>
                            <p class=\"track-artists\">
                                {% for artist in track.artists %}
                                    <a href=\"{{ path('artist_details', { 'id': artist.id }) }}\">{{ artist.name }}</a>{% if not loop.last %}, {% endif %}
                                {% endfor %}
                            </p>
                        </div>

                        <div class=\"favorite-form\">
                            {% if app.user.hasTrack(track.id) %}
                                <form action=\"{{ path('app_remove_favorites', { 'trackId': track.id }) }}\" method=\"post\">
                                    <button type=\"submit\">
                                        <i class=\"fas fa-heart\" style=\"color: red;\"></i> <!-- Filled heart icon -->
                                    </button>
                                </form>
                            {% else %}
                                <form action=\"{{ path('app_add_favorites') }}\" method=\"post\">
                                    <input type=\"hidden\" name=\"id\" value=\"{{ track.id }}\">
                                    <button type=\"submit\">
                                        <i class=\"far fa-heart\" style=\"color: red;\"></i>
                                    </button>
                                </form>
                            {% endif %}
                        </div>

                        <iframe src=\"https://open.spotify.com/embed/track/{{ track.id }}\" width=\"300\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>

{% endblock %}
", "artist/details.html.twig", "C:\\Users\\Clément\\symfony\\templates\\artist\\details.html.twig");
    }
}
