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

/* artist/index.html.twig */
class __TwigTemplate_e4d3b626f990887c9b034f133aef7bc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artist/index.html.twig", 1);
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
        background-color: black;
        color: white;
    }

    .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        padding: 20px;
    }

    .form-container {
        display: flex; 
        width: 100%;
        max-width: 1200px;
        justify-content: center;
        margin-bottom: 20px;
    }

    .form-section {
        width: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .results-container {
        width: 100%;
        margin-top: 20px;
        padding: 0 20px;
    }

    .form-group {
        margin-right: 10px;
    }

    .card {
        background-color: #333;
        color: white;
    }

    .card h5, .card p {
        color: white;
    }

    .card-img-top {
        max-height: 200px;
        object-fit: cover;
    }

    .text-center {
        color: white;
    }

    .btn-red {
        background-color: #cc0000;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-red:hover {
        background-color: #ff1a1a;
    }

    .btn-red:focus {
        outline: none;
    }

</style>

<div class=\"container my-4\">
    <h1 class=\"my-4 text-center\">Recherche d'Artiste</h1>

    <div class=\"form-container\">
        <div class=\"form-section\">
            <form id=\"searchForm\" class=\"form-inline justify-content-center mb-4\">
                <div class=\"form-group\">
                    <label for=\"query2\" class=\"sr-only\">Rechercher</label>
                    <input type=\"text\" id=\"query2\" name=\"artist_query\" class=\"form-control\" placeholder=\"Entrez un artiste\" required>
                </div>
                <button type=\"submit\" class=\"btn btn-red\">Rechercher</button>
            </form>
        </div>
    </div>

    <div class=\"results-container\">
        <div id=\"results2\" class=\"row\"></div>
    </div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const query2 = document.getElementById('query2').value;
        console.log('Recherche pour artiste:', query2);

        document.getElementById('results2').innerHTML = '<p>Chargement des résultats...</p>';

        fetch(`";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_index");
        yield "?artist_query=\${encodeURIComponent(query2)}`, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur dans la réponse du serveur.');
            }
            return response.text();
        })
        .then(html => {
            document.getElementById('results2').innerHTML = html;
            document.getElementById('query2').value = '';
        })
        .catch(error => {
            console.error('Erreur:', error);
            document.getElementById('results2').innerHTML = '<p>Erreur lors de la récupération des résultats.</p>';
        });
    });
});

</script>
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
        return "artist/index.html.twig";
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
        return array (  191 => 117,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<style>
    body, html {
        margin: 0;
        padding: 0;
        background-color: black;
        color: white;
    }

    .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        padding: 20px;
    }

    .form-container {
        display: flex; 
        width: 100%;
        max-width: 1200px;
        justify-content: center;
        margin-bottom: 20px;
    }

    .form-section {
        width: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .results-container {
        width: 100%;
        margin-top: 20px;
        padding: 0 20px;
    }

    .form-group {
        margin-right: 10px;
    }

    .card {
        background-color: #333;
        color: white;
    }

    .card h5, .card p {
        color: white;
    }

    .card-img-top {
        max-height: 200px;
        object-fit: cover;
    }

    .text-center {
        color: white;
    }

    .btn-red {
        background-color: #cc0000;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-red:hover {
        background-color: #ff1a1a;
    }

    .btn-red:focus {
        outline: none;
    }

</style>

<div class=\"container my-4\">
    <h1 class=\"my-4 text-center\">Recherche d'Artiste</h1>

    <div class=\"form-container\">
        <div class=\"form-section\">
            <form id=\"searchForm\" class=\"form-inline justify-content-center mb-4\">
                <div class=\"form-group\">
                    <label for=\"query2\" class=\"sr-only\">Rechercher</label>
                    <input type=\"text\" id=\"query2\" name=\"artist_query\" class=\"form-control\" placeholder=\"Entrez un artiste\" required>
                </div>
                <button type=\"submit\" class=\"btn btn-red\">Rechercher</button>
            </form>
        </div>
    </div>

    <div class=\"results-container\">
        <div id=\"results2\" class=\"row\"></div>
    </div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const query2 = document.getElementById('query2').value;
        console.log('Recherche pour artiste:', query2);

        document.getElementById('results2').innerHTML = '<p>Chargement des résultats...</p>';

        fetch(`{{ path('app_artist_index') }}?artist_query=\${encodeURIComponent(query2)}`, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur dans la réponse du serveur.');
            }
            return response.text();
        })
        .then(html => {
            document.getElementById('results2').innerHTML = html;
            document.getElementById('query2').value = '';
        })
        .catch(error => {
            console.error('Erreur:', error);
            document.getElementById('results2').innerHTML = '<p>Erreur lors de la récupération des résultats.</p>';
        });
    });
});

</script>
{% endblock %}
", "artist/index.html.twig", "C:\\Users\\Clément\\symfony\\templates\\artist\\index.html.twig");
    }
}
