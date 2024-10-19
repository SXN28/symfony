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
        yield "<div class=\"container\">
    <h1 class=\"my-4 text-center\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1>

    <div class=\"track-info\">
        <h4>Artiste(s): 
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 9, $this->source); })()), "artists", [], "any", false, false, false, 9));
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
            // line 10
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "external_urls", [], "any", false, false, false, 10), "spotify", [], "any", false, false, false, 10), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 10), "html", null, true);
            yield "</a>";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) {
                yield ", ";
            }
            // line 11
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
        // line 12
        yield "        </h4>
        <p><strong>Album:</strong> <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 13, $this->source); })()), "album", [], "any", false, false, false, 13), "external_urls", [], "any", false, false, false, 13), "spotify", [], "any", false, false, false, 13), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 13, $this->source); })()), "album", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "</a></p>
        <p><strong>Popularité:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 14, $this->source); })()), "popularity", [], "any", false, false, false, 14), "html", null, true);
        yield "%</p>
        <p><strong>Numéro de piste:</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 15, $this->source); })()), "track_number", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
        <p><strong>Disc numéro:</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 16, $this->source); })()), "disc_number", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
        <p><strong>Est explicite:</strong> ";
        // line 17
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 17, $this->source); })()), "explicit", [], "any", false, false, false, 17)) ? ("Oui") : ("Non"));
        yield "</p>
        <p><strong>ID de piste:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
        <p><strong>URI:</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 19, $this->source); })()), "uri", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
        <p><strong>URL externe:</strong> <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 20, $this->source); })()), "external_urls", [], "any", false, false, false, 20), "spotify", [], "any", false, false, false, 20), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 20, $this->source); })()), "external_urls", [], "any", false, false, false, 20), "spotify", [], "any", false, false, false, 20), "html", null, true);
        yield "</a></p>
        <p><strong>Disponible sur les marchés:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 21, $this->source); })()), "available_markets", [], "any", false, false, false, 21), ", "), "html", null, true);
        yield "</p>
        <p><strong>Est local:</strong> ";
        // line 22
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 22, $this->source); })()), "is_local", [], "any", false, false, false, 22)) ? ("Oui") : ("Non"));
        yield "</p>
    </div>

    <div class=\"album-info\">
        <h3>Informations sur l'album</h3>
        <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 27, $this->source); })()), "album", [], "any", false, false, false, 27), "images", [], "any", false, false, false, 27), 0, [], "array", false, false, false, 27), "url", [], "any", false, false, false, 27), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 27, $this->source); })()), "album", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        yield "\" class=\"img-fluid\" style=\"max-width: 300px;\">
        <p><strong>Date de sortie:</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["track"]) || array_key_exists("track", $context) ? $context["track"] : (function () { throw new RuntimeError('Variable "track" does not exist.', 28, $this->source); })()), "album", [], "any", false, false, false, 28), "release_date", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
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
        return array (  183 => 28,  177 => 27,  169 => 22,  165 => 21,  159 => 20,  155 => 19,  151 => 18,  147 => 17,  143 => 16,  139 => 15,  135 => 14,  129 => 13,  126 => 12,  112 => 11,  103 => 10,  86 => 9,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-4 text-center\">{{ track.name }}</h1>

    <div class=\"track-info\">
        <h4>Artiste(s): 
            {% for artist in track.artists %}
                <a href=\"{{ artist.external_urls.spotify }}\" target=\"_blank\">{{ artist.name }}</a>{% if not loop.last %}, {% endif %}
            {% endfor %}
        </h4>
        <p><strong>Album:</strong> <a href=\"{{ track.album.external_urls.spotify }}\" target=\"_blank\">{{ track.album.name }}</a></p>
        <p><strong>Popularité:</strong> {{ track.popularity }}%</p>
        <p><strong>Numéro de piste:</strong> {{ track.track_number }}</p>
        <p><strong>Disc numéro:</strong> {{ track.disc_number }}</p>
        <p><strong>Est explicite:</strong> {{ track.explicit ? 'Oui' : 'Non' }}</p>
        <p><strong>ID de piste:</strong> {{ track.id }}</p>
        <p><strong>URI:</strong> {{ track.uri }}</p>
        <p><strong>URL externe:</strong> <a href=\"{{ track.external_urls.spotify }}\" target=\"_blank\">{{ track.external_urls.spotify }}</a></p>
        <p><strong>Disponible sur les marchés:</strong> {{ track.available_markets | join(', ') }}</p>
        <p><strong>Est local:</strong> {{ track.is_local ? 'Oui' : 'Non' }}</p>
    </div>

    <div class=\"album-info\">
        <h3>Informations sur l'album</h3>
        <img src=\"{{ track.album.images[0].url }}\" alt=\"{{ track.album.name }}\" class=\"img-fluid\" style=\"max-width: 300px;\">
        <p><strong>Date de sortie:</strong> {{ track.album.release_date }}</p>
    </div>
</div>
{% endblock %}
", "track/details.html.twig", "C:\\Users\\Clément\\symfony\\templates\\track\\details.html.twig");
    }
}
