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

    .card {
        background-color: #333;
        color: white;
    }

    .card h5, .card p {
        color: white;
    }

    .card h5.card-title {
        color: red;
    }

    .card-img-top {
        width: 100%;
        height: auto;
        aspect-ratio: 1;
        object-fit: cover;
    }

    .text-center {
        color: white;
    }
</style>

<div class=\"container\">
    ";
        // line 44
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 44, $this->source); })()))) {
            // line 45
            yield "        <h2 class=\"my-4 text-center\">Résultats pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "\"</h2>
        <div class=\"row\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 48
                yield "                <div class=\"col-md-6 col-lg-4 mb-4\">
                    <div class=\"card shadow-sm\">
                        ";
                // line 50
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 50), "images", [], "any", false, false, false, 50))) {
                    // line 51
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 51), "images", [], "any", false, false, false, 51), 0, [], "array", false, false, false, 51), "url", [], "any", false, false, false, 51), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Album cover\">
                        ";
                } else {
                    // line 53
                    yield "                            <img src=\"default-album-cover.jpg\" class=\"card-img-top\" alt=\"Default Album Cover\">
                        ";
                }
                // line 55
                yield "                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title track-title\">
                                <a href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "name", [], "any", false, false, false, 57), "html", null, true);
                yield "</a>
                            </h5>
                            <p class=\"card-text\">
                                <strong>Artistes:</strong>
                                <ul class=\"list-unstyled\">
                                    ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                    // line 63
                    yield "                                        <li>
                                            <a href=\"";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                    yield "\" class=\"text-white\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 64), "html", null, true);
                    yield "</a>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['artist'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                yield "                                </ul>
                            </p>
                            <!-- Spotify Player -->
                            <iframe src=\"https://open.spotify.com/embed/track/";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 70), "html", null, true);
                yield "\" width=\"100%\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['track'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "        </div>
    ";
        } else {
            // line 77
            yield "        <h2 class=\"my-4 text-center\">Aucune piste trouvée pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 77, $this->source); })()), "html", null, true);
            yield "\"</h2> <!-- Message if no tracks are found -->
    ";
        }
        // line 79
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
        return array (  179 => 79,  173 => 77,  169 => 75,  158 => 70,  153 => 67,  142 => 64,  139 => 63,  135 => 62,  125 => 57,  121 => 55,  117 => 53,  111 => 51,  109 => 50,  105 => 48,  101 => 47,  95 => 45,  93 => 44,  48 => 1,);
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

    .card {
        background-color: #333;
        color: white;
    }

    .card h5, .card p {
        color: white;
    }

    .card h5.card-title {
        color: red;
    }

    .card-img-top {
        width: 100%;
        height: auto;
        aspect-ratio: 1;
        object-fit: cover;
    }

    .text-center {
        color: white;
    }
</style>

<div class=\"container\">
    {% if tracks is not empty %}
        <h2 class=\"my-4 text-center\">Résultats pour \"{{ query }}\"</h2>
        <div class=\"row\">
            {% for track in tracks %}
                <div class=\"col-md-6 col-lg-4 mb-4\">
                    <div class=\"card shadow-sm\">
                        {% if track.album.images is not empty %}
                            <img src=\"{{ track.album.images[0].url }}\" class=\"card-img-top\" alt=\"Album cover\">
                        {% else %}
                            <img src=\"default-album-cover.jpg\" class=\"card-img-top\" alt=\"Default Album Cover\">
                        {% endif %}
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title track-title\">
                                <a href=\"{{ path('track_details', {'id': track.id}) }}\">{{ track.name }}</a>
                            </h5>
                            <p class=\"card-text\">
                                <strong>Artistes:</strong>
                                <ul class=\"list-unstyled\">
                                    {% for artist in track.artists %}
                                        <li>
                                            <a href=\"{{ path('artist_details', { 'id': artist.id }) }}\" class=\"text-white\">{{ artist.name }}</a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </p>
                            <!-- Spotify Player -->
                            <iframe src=\"https://open.spotify.com/embed/track/{{ track.id }}\" width=\"100%\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <h2 class=\"my-4 text-center\">Aucune piste trouvée pour \"{{ query }}\"</h2> <!-- Message if no tracks are found -->
    {% endif %}
</div>
", "track/results.html.twig", "C:\\Users\\Clément\\symfony\\templates\\track\\results.html.twig");
    }
}
