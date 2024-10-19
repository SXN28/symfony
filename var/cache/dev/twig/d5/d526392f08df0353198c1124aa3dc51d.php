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
        // line 41
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 41, $this->source); })()))) {
            // line 42
            yield "        <h2 class=\"my-4 text-center\">Artistes trouvés pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["artist_query"]) || array_key_exists("artist_query", $context) ? $context["artist_query"] : (function () { throw new RuntimeError('Variable "artist_query" does not exist.', 42, $this->source); })()), "html", null, true);
            yield "\"</h2>
        <div class=\"row\">
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 45
                yield "                <div class=\"col-md-6 col-lg-4 mb-4\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">
                                <a href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 49), "html", null, true);
                yield "</a>
                            </h5>
                            ";
                // line 51
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "images", [], "any", false, false, false, 51))) {
                    // line 52
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "images", [], "any", false, false, false, 52), 0, [], "array", false, false, false, 52), "url", [], "any", false, false, false, 52), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Artist image\">
                            ";
                }
                // line 54
                yield "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['artist'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "        </div>
    ";
        }
        // line 60
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
        return array (  136 => 60,  132 => 58,  123 => 54,  117 => 52,  115 => 51,  108 => 49,  102 => 45,  98 => 44,  92 => 42,  90 => 41,  48 => 1,);
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
", "artist/results.html.twig", "C:\\Users\\Clément\\symfony\\templates\\artist\\results.html.twig");
    }
}
