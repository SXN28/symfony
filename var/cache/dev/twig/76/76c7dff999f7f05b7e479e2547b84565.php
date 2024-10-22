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

/* base.html.twig */
class __TwigTemplate_95770bccb00a474daf73fa737f0e0bb0 extends Template
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
            'title_page' => [$this, 'block_title_page'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title_page', $context, $blocks);
        yield "</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
        <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/spotify-removebg-preview.png"), "html", null, true);
        yield "\" type=\"image/x-icon\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <style>
            body {
                display: flex;
                min-height: 100vh;
                margin: 0;
                background-color: black;
                color: white;
            }

            .sidebar {
                width: 250px;
                background-color: #111;
                padding: 20px;
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                color: white;
                z-index: 999;
            }

            .sidebar h3 {
                margin-top: 20px;
                margin-bottom: 20px;
                color: #ff1a1a;
            }

            .sidebar a {
                color: white;
                text-decoration: none;
                display: block;
                margin: 10px 0;
                font-size: 18px;
            }

            .sidebar a:hover {
                color: #ff1a1a;
            }

            .user-email {
                margin-top: 20px;
                color: #111;
                background-color: red;
                padding: 5px;
                margin-bottom: 20px;
                text-align: center;
                border-radius: 20px;
                font-weight: 800;
            }

            .main-wrapper {
                margin-left: 250px;
                width: calc(100% - 250px);
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            .navbar {
                width: 100%;
                background-color: #111;
                padding: 0 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                height: 80px;
                position: relative;
                z-index: 998;
            }

            .navbar h1 {
                color: #ff1a1a;
                font-size: 24px;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                margin: 0;
            }

            .navbar .right {
                margin-left: auto;
                display: flex;
                align-items: center;
            }

            .btn {
                background-color: #cc0000;
                color: white;
                padding: 10px 20px;
                border: none;
                font-size: 16px;
                border-radius: 25px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                margin-left: 10px;
            }

            .btn:hover {
                background-color: #ff1a1a;
            }

            .main-content {
                flex: 1;
                padding: 20px;
                background-color: black;
            }
        </style>
        ";
        // line 117
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 118
        yield "    </head>

    <body>
        <div class=\"sidebar\">
            <img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/spotify-removebg-preview.png"), "html", null, true);
        yield "\" width=\"25%\">
            ";
        // line 123
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123)) {
            // line 124
            yield "                <div class=\"user-email\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "email", [], "any", false, false, false, 124), "html", null, true);
            yield "</div>
            ";
        }
        // line 126
        yield "            <h3>Navigation</h3>
            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_index");
        yield "\">Recherche de Musique</a>
            <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_index");
        yield "\">Recherche d'Artiste</a>
            ";
        // line 129
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129)) {
            // line 130
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favorites");
            yield "\">Musiques Favories</a>
            ";
        }
        // line 132
        yield "
            ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133)) {
            // line 134
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favorites_artists");
            yield "\">Artistes Favoris</a>
            ";
        }
        // line 136
        yield "        </div>

        <div class=\"main-wrapper\">
            <div class=\"navbar\">
                <h1>";
        // line 140
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</h1>
                <div class=\"right\">
                    ";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142)) {
            // line 143
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                            <button class=\"btn\">Déconnexion</button>
                        </a>
                    ";
        } else {
            // line 147
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            <button class=\"btn\">Connexion</button>
                        </a>
                    ";
        }
        // line 151
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                        <button class=\"btn\">Inscription</button>
                    </a>
                </div>
            </div>

            <div class=\"main-content\">
                ";
        // line 158
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 159
        yield "            </div>
        </div>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_page"));

        yield "Spotify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Spotify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  351 => 158,  328 => 140,  306 => 117,  283 => 6,  268 => 159,  266 => 158,  255 => 151,  247 => 147,  239 => 143,  237 => 142,  232 => 140,  226 => 136,  220 => 134,  218 => 133,  215 => 132,  209 => 130,  207 => 129,  203 => 128,  199 => 127,  196 => 126,  190 => 124,  188 => 123,  184 => 122,  178 => 118,  176 => 117,  64 => 8,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title_page %}Spotify{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
        <link rel=\"icon\" href=\"{{ asset('media/spotify-removebg-preview.png') }}\" type=\"image/x-icon\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <style>
            body {
                display: flex;
                min-height: 100vh;
                margin: 0;
                background-color: black;
                color: white;
            }

            .sidebar {
                width: 250px;
                background-color: #111;
                padding: 20px;
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                color: white;
                z-index: 999;
            }

            .sidebar h3 {
                margin-top: 20px;
                margin-bottom: 20px;
                color: #ff1a1a;
            }

            .sidebar a {
                color: white;
                text-decoration: none;
                display: block;
                margin: 10px 0;
                font-size: 18px;
            }

            .sidebar a:hover {
                color: #ff1a1a;
            }

            .user-email {
                margin-top: 20px;
                color: #111;
                background-color: red;
                padding: 5px;
                margin-bottom: 20px;
                text-align: center;
                border-radius: 20px;
                font-weight: 800;
            }

            .main-wrapper {
                margin-left: 250px;
                width: calc(100% - 250px);
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            .navbar {
                width: 100%;
                background-color: #111;
                padding: 0 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                height: 80px;
                position: relative;
                z-index: 998;
            }

            .navbar h1 {
                color: #ff1a1a;
                font-size: 24px;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                margin: 0;
            }

            .navbar .right {
                margin-left: auto;
                display: flex;
                align-items: center;
            }

            .btn {
                background-color: #cc0000;
                color: white;
                padding: 10px 20px;
                border: none;
                font-size: 16px;
                border-radius: 25px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                margin-left: 10px;
            }

            .btn:hover {
                background-color: #ff1a1a;
            }

            .main-content {
                flex: 1;
                padding: 20px;
                background-color: black;
            }
        </style>
        {% block stylesheets %}{% endblock %}
    </head>

    <body>
        <div class=\"sidebar\">
            <img src=\"{{ asset('media/spotify-removebg-preview.png') }}\" width=\"25%\">
            {% if app.user %}
                <div class=\"user-email\">{{ app.user.email }}</div>
            {% endif %}
            <h3>Navigation</h3>
            <a href=\"{{ path('app_track_index') }}\">Recherche de Musique</a>
            <a href=\"{{ path('app_artist_index') }}\">Recherche d'Artiste</a>
            {% if app.user %}
                <a href=\"{{path('app_favorites')}}\">Musiques Favories</a>
            {% endif %}

            {% if app.user %}
                <a href=\"{{path('app_favorites_artists')}}\">Artistes Favoris</a>
            {% endif %}
        </div>

        <div class=\"main-wrapper\">
            <div class=\"navbar\">
                <h1>{% block title %}Spotify{% endblock %}</h1>
                <div class=\"right\">
                    {% if app.user %}
                        <a href=\"{{ path('app_logout') }}\">
                            <button class=\"btn\">Déconnexion</button>
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\">
                            <button class=\"btn\">Connexion</button>
                        </a>
                    {% endif %}
                    <a href=\"{{ path('app_register') }}\">
                        <button class=\"btn\">Inscription</button>
                    </a>
                </div>
            </div>

            <div class=\"main-content\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </body>
</html>
", "base.html.twig", "C:\\Users\\Clément\\Desktop\\symfony\\templates\\base.html.twig");
    }
}
