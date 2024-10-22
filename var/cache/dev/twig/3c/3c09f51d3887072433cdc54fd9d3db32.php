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

/* track/results.html.twig */
class __TwigTemplate_c2b0ac32954629dbea108c729136435f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/results.html.twig"));

        // line 1
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
        max-width: 1200px;
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

    iframe {
        border-radius: 10px;
    }

    .text-center {
        color: white;
    }
</style>

<div class=\"container\">
    ";
        // line 101
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 101, $this->source); })()))) {
            // line 102
            yield "        <div class=\"tracks-list\">
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 104
                yield "                <div class=\"track-row\">
                    ";
                // line 105
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 105), "images", [], "any", false, false, false, 105))) {
                    // line 106
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 106), "images", [], "any", false, false, false, 106), 0, [], "array", false, false, false, 106), "url", [], "any", false, false, false, 106), "html", null, true);
                    yield "\" alt=\"Album cover\">
                    ";
                } else {
                    // line 108
                    yield "                        <img src=\"default-album-cover.jpg\" alt=\"Default Album Cover\">
                    ";
                }
                // line 110
                yield "                    <div class=\"track-info\">
                        <div class=\"track-details\">
                            <h5 class=\"track-title\">
                                <a href=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "name", [], "any", false, false, false, 113), "html", null, true);
                yield "</a>
                            </h5>
                            <p class=\"track-artists\">
                                ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 116));
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
                    // line 117
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 117), "html", null, true);
                    yield "</a>";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 117)) {
                        yield ", ";
                    }
                    // line 118
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
                // line 119
                yield "                            </p>
                        </div>

                        ";
                // line 122
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122)) {
                    // line 123
                    yield "                            <div class=\"favorite-form\">
                                ";
                    // line 124
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "hasTrack", [CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 124)], "method", false, false, false, 124)) {
                        // line 125
                        yield "                                    <form action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_favorites", ["trackId" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                        yield "\" method=\"post\">
                                        <button type=\"submit\">
                                            <i class=\"fas fa-heart\" style=\"color: red;\"></i>
                                        </button>
                                    </form>
                                ";
                    } else {
                        // line 131
                        yield "                                    <form action=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_favorites");
                        yield "\" method=\"post\">
                                        <input type=\"hidden\" name=\"id\" value=\"";
                        // line 132
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 132), "html", null, true);
                        yield "\">
                                        <button type=\"submit\">
                                            <i class=\"far fa-heart\" style=\"color: red;\"></i>
                                        </button>
                                    </form>
                                ";
                    }
                    // line 138
                    yield "                            </div>
                        ";
                }
                // line 140
                yield "
                        <iframe src=\"https://open.spotify.com/embed/track/";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 141), "html", null, true);
                yield "\" width=\"300\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['track'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "        </div>
    ";
        } else {
            // line 147
            yield "        <h2 class=\"my-4 text-center\">Aucune piste trouvée pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 147, $this->source); })()), "html", null, true);
            yield "\"</h2>
    ";
        }
        // line 149
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "track/results.html.twig";
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
        return array (  290 => 149,  284 => 147,  280 => 145,  270 => 141,  267 => 140,  263 => 138,  254 => 132,  249 => 131,  239 => 125,  237 => 124,  234 => 123,  232 => 122,  227 => 119,  213 => 118,  204 => 117,  187 => 116,  179 => 113,  174 => 110,  170 => 108,  164 => 106,  162 => 105,  159 => 104,  155 => 103,  152 => 102,  150 => 101,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
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
        max-width: 1200px;
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

    iframe {
        border-radius: 10px;
    }

    .text-center {
        color: white;
    }
</style>

<div class=\"container\">
    {% if tracks is not empty %}
        <div class=\"tracks-list\">
            {% for track in tracks %}
                <div class=\"track-row\">
                    {% if track.album.images is not empty %}
                        <img src=\"{{ track.album.images[0].url }}\" alt=\"Album cover\">
                    {% else %}
                        <img src=\"default-album-cover.jpg\" alt=\"Default Album Cover\">
                    {% endif %}
                    <div class=\"track-info\">
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

                        {% if app.user %}
                            <div class=\"favorite-form\">
                                {% if app.user.hasTrack(track.id) %}
                                    <form action=\"{{ path('app_remove_favorites', { 'trackId': track.id }) }}\" method=\"post\">
                                        <button type=\"submit\">
                                            <i class=\"fas fa-heart\" style=\"color: red;\"></i>
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
                        {% endif %}

                        <iframe src=\"https://open.spotify.com/embed/track/{{ track.id }}\" width=\"300\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <h2 class=\"my-4 text-center\">Aucune piste trouvée pour \"{{ query }}\"</h2>
    {% endif %}
</div>
", "track/results.html.twig", "C:\\Users\\Clément\\symfony\\templates\\track\\results.html.twig");
    }
}
