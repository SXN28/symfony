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

/* artist/results.html.twig */
class __TwigTemplate_f43a69a4287733da8b4baea32b1f4288 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/results.html.twig"));

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
        min-width: 90vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card {
        background-color: #333;
        color: white;
        height: 100%;
        border-radius: 10px;
    }

    .card h5, .card p {
        text-align: center;
        color: white;
    }

    .card-img-top {
        width: 100%;
        height: auto;
        aspect-ratio: 1;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .text-center {
        color: white;
    }

    .favorite-form {
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: center;
    }

    .favorite-form button {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    .favorite-form i {
        font-size: 1.5em;
        transition: color 0.3s;
    }

    .favorite-form button:hover i {
        color: red;
    }

    .favorite-form i.fa-heart {
        color: red;
    }

    .favorite-form i.far.fa-heart {
        color: red;
    }
</style>

<div class=\"container\">
    ";
        // line 73
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 73, $this->source); })()))) {
            // line 74
            yield "        <h2 class=\"my-4 text-center\">Artistes trouvés pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["artist_query"]) || array_key_exists("artist_query", $context) ? $context["artist_query"] : (function () { throw new RuntimeError('Variable "artist_query" does not exist.', 74, $this->source); })()), "html", null, true);
            yield "\"</h2>
        <div class=\"row\">
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 77
                yield "                <div class=\"col-md-6 col-lg-4 mb-4\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">
                                <a href=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                yield "\" class=\"text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 81), "html", null, true);
                yield "</a>
                            </h5>

                            ";
                // line 84
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) {
                    // line 85
                    yield "                                <div class=\"favorite-form\">
                                    ";
                    // line 86
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "hasArtist", [CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 86)], "method", false, false, false, 86)) {
                        // line 87
                        yield "                                        <form action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_favorites_artist", ["artistId" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                        yield "\" method=\"post\">
                                            <button type=\"submit\" title=\"Retirer des favoris\">
                                                <i class=\"fas fa-heart\"></i> <!-- Cœur rempli -->
                                            </button>
                                        </form>
                                    ";
                    } else {
                        // line 93
                        yield "                                        <form action=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_favorites_artist");
                        yield "\" method=\"post\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                        // line 94
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 94), "html", null, true);
                        yield "\">
                                            <button type=\"submit\" title=\"Ajouter aux favoris\">
                                                <i class=\"far fa-heart\"></i> <!-- Cœur vide -->
                                            </button>
                                        </form>
                                    ";
                    }
                    // line 100
                    yield "                                </div>
                            ";
                }
                // line 102
                yield "
                            ";
                // line 103
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "images", [], "any", false, false, false, 103))) {
                    // line 104
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "images", [], "any", false, false, false, 104), 0, [], "array", false, false, false, 104), "url", [], "any", false, false, false, 104), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Image de l'artiste\">
                            ";
                }
                // line 106
                yield "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['artist'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "        </div>
    ";
        } else {
            // line 112
            yield "        <h2 class=\"my-4 text-center\">Aucun artiste trouvé pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["artist_query"]) || array_key_exists("artist_query", $context) ? $context["artist_query"] : (function () { throw new RuntimeError('Variable "artist_query" does not exist.', 112, $this->source); })()), "html", null, true);
            yield "\"</h2>
    ";
        }
        // line 114
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
        return "artist/results.html.twig";
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
        return array (  213 => 114,  207 => 112,  203 => 110,  194 => 106,  188 => 104,  186 => 103,  183 => 102,  179 => 100,  170 => 94,  165 => 93,  155 => 87,  153 => 86,  150 => 85,  148 => 84,  140 => 81,  134 => 77,  130 => 76,  124 => 74,  122 => 73,  48 => 1,);
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
        min-width: 90vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card {
        background-color: #333;
        color: white;
        height: 100%;
        border-radius: 10px;
    }

    .card h5, .card p {
        text-align: center;
        color: white;
    }

    .card-img-top {
        width: 100%;
        height: auto;
        aspect-ratio: 1;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .text-center {
        color: white;
    }

    .favorite-form {
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: center;
    }

    .favorite-form button {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    .favorite-form i {
        font-size: 1.5em;
        transition: color 0.3s;
    }

    .favorite-form button:hover i {
        color: red;
    }

    .favorite-form i.fa-heart {
        color: red;
    }

    .favorite-form i.far.fa-heart {
        color: red;
    }
</style>

<div class=\"container\">
    {% if artists is not empty %}
        <h2 class=\"my-4 text-center\">Artistes trouvés pour \"{{ artist_query }}\"</h2>
        <div class=\"row\">
            {% for artist in artists %}
                <div class=\"col-md-6 col-lg-4 mb-4\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">
                                <a href=\"{{ path('artist_details', { 'id': artist.id }) }}\" class=\"text-white\">{{ artist.name }}</a>
                            </h5>

                            {% if app.user %}
                                <div class=\"favorite-form\">
                                    {% if app.user.hasArtist(artist.id) %}
                                        <form action=\"{{ path('app_remove_favorites_artist', { 'artistId': artist.id }) }}\" method=\"post\">
                                            <button type=\"submit\" title=\"Retirer des favoris\">
                                                <i class=\"fas fa-heart\"></i> <!-- Cœur rempli -->
                                            </button>
                                        </form>
                                    {% else %}
                                        <form action=\"{{ path('app_add_favorites_artist') }}\" method=\"post\">
                                            <input type=\"hidden\" name=\"id\" value=\"{{ artist.id }}\">
                                            <button type=\"submit\" title=\"Ajouter aux favoris\">
                                                <i class=\"far fa-heart\"></i> <!-- Cœur vide -->
                                            </button>
                                        </form>
                                    {% endif %}
                                </div>
                            {% endif %}

                            {% if artist.images is not empty %}
                                <img src=\"{{ artist.images[0].url }}\" class=\"card-img-top\" alt=\"Image de l'artiste\">
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <h2 class=\"my-4 text-center\">Aucun artiste trouvé pour \"{{ artist_query }}\"</h2>
    {% endif %}
</div>
", "artist/results.html.twig", "C:\\Users\\Clément\\Desktop\\symfony\\templates\\artist\\results.html.twig");
    }
}
