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
class __TwigTemplate_2cd3d548b6d52ab9703918cffd4c5691 extends Template
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
        min-height: 100vh; /* Prend toute la hauteur de la fenêtre */
        min-width: 90vh;
        display: flex;
        flex-direction: column;
        justify-content: center; /* Centrer verticalement */
    }

    .card {
        background-color: #333; /* Couleur de fond de la carte pour le contraste */
        color: white; /* Couleur du texte */
        height: 100%; /* Assure que la carte prend toute la hauteur disponible */
    }

    .card h5, .card p {
        color: white;
    }

    .card-img-top {
        width: 100%; /* Force la largeur à 100% */
        height: auto; /* La hauteur s'ajuste automatiquement */
        aspect-ratio: 1; /* Cela garantit un carré */
        object-fit: cover; /* Assure que l'image garde un bon ratio */
    }

    .text-center {
        color: white;
    }
</style>



<div class=\"container\">
    ";
        // line 43
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 43, $this->source); })()))) {
            // line 44
            yield "        <h2 class=\"my-4 text-center\">Résultats pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "\"</h2>
        <div class=\"row\">
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 47
                yield "                <div class=\"col-md-6 col-lg-4 mb-4\">
                    <div class=\"card shadow-sm\">
                        ";
                // line 49
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 49), "images", [], "any", false, false, false, 49))) {
                    // line 50
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "album", [], "any", false, false, false, 50), "images", [], "any", false, false, false, 50), 0, [], "array", false, false, false, 50), "url", [], "any", false, false, false, 50), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Album cover\">
                        ";
                }
                // line 52
                yield "                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "name", [], "any", false, false, false, 53), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\">
                                <strong>Artistes:</strong>
                                <ul class=\"list-unstyled\">
                                    ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "artists", [], "any", false, false, false, 57));
                foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                    // line 58
                    yield "                                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 58), "html", null, true);
                    yield "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['artist'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "                                </ul>
                            </p>
                            <!-- Lecteur Spotify -->
                            <iframe src=\"https://open.spotify.com/embed/track/";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 63), "html", null, true);
                yield "\" width=\"100%\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['track'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "        </div>
    ";
        }
        // line 70
        yield "
    ";
        // line 71
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 71, $this->source); })()))) {
            // line 72
            yield "        <h2 class=\"my-4 text-center\">Artistes trouvés pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["artist_query"]) || array_key_exists("artist_query", $context) ? $context["artist_query"] : (function () { throw new RuntimeError('Variable "artist_query" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "\"</h2>
        <div class=\"row\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 75
                yield "                <div class=\"col-md-6 col-lg-4 mb-4\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\"><a href=\"#\" class=\"text-white\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 78), "html", null, true);
                yield "</a></h5>
                            <h6 class=\"card-title\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 79), "html", null, true);
                yield "</h6>
                            ";
                // line 80
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "images", [], "any", false, false, false, 80))) {
                    // line 81
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "images", [], "any", false, false, false, 81), 0, [], "array", false, false, false, 81), "url", [], "any", false, false, false, 81), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Artist image\">
                            ";
                }
                // line 83
                yield "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['artist'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "        </div>
    ";
        }
        // line 89
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
        return array (  208 => 89,  204 => 87,  195 => 83,  189 => 81,  187 => 80,  183 => 79,  179 => 78,  174 => 75,  170 => 74,  164 => 72,  162 => 71,  159 => 70,  155 => 68,  144 => 63,  139 => 60,  130 => 58,  126 => 57,  119 => 53,  116 => 52,  110 => 50,  108 => 49,  104 => 47,  100 => 46,  94 => 44,  92 => 43,  48 => 1,);
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
        min-height: 100vh; /* Prend toute la hauteur de la fenêtre */
        min-width: 90vh;
        display: flex;
        flex-direction: column;
        justify-content: center; /* Centrer verticalement */
    }

    .card {
        background-color: #333; /* Couleur de fond de la carte pour le contraste */
        color: white; /* Couleur du texte */
        height: 100%; /* Assure que la carte prend toute la hauteur disponible */
    }

    .card h5, .card p {
        color: white;
    }

    .card-img-top {
        width: 100%; /* Force la largeur à 100% */
        height: auto; /* La hauteur s'ajuste automatiquement */
        aspect-ratio: 1; /* Cela garantit un carré */
        object-fit: cover; /* Assure que l'image garde un bon ratio */
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
                        {% endif %}
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">{{ track.name }}</h5>
                            <p class=\"card-text\">
                                <strong>Artistes:</strong>
                                <ul class=\"list-unstyled\">
                                    {% for artist in track.artists %}
                                        <li>{{ artist.name }}</li>
                                    {% endfor %}
                                </ul>
                            </p>
                            <!-- Lecteur Spotify -->
                            <iframe src=\"https://open.spotify.com/embed/track/{{ track.id }}\" width=\"100%\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {% if artists is not empty %}
        <h2 class=\"my-4 text-center\">Artistes trouvés pour \"{{ artist_query }}\"</h2>
        <div class=\"row\">
            {% for artist in artists %}
                <div class=\"col-md-6 col-lg-4 mb-4\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\"><a href=\"#\" class=\"text-white\">{{ artist.name }}</a></h5>
                            <h6 class=\"card-title\">{{artist.id}}</h6>
                            {% if artist.images is not empty %}
                                <img src=\"{{ artist.images[0].url }}\" class=\"card-img-top\" alt=\"Artist image\">
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
", "track/results.html.twig", "/home/iutbgdin/Bureau/symfony/templates/track/results.html.twig");
    }
}
