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
        <link rel=\"icon\" href=\"";
        // line 7
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

            /* Sidebar styling */
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

            /* Navbar + main content wrapper */
            .main-wrapper {
                margin-left: 250px;
                width: calc(100% - 250px);
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            /* Navbar styling */
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
        // line 119
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 120
        yield "    </head>

    <body>
        <!-- Sidebar -->
        <div class=\"sidebar\">
            <img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/spotify-removebg-preview.png"), "html", null, true);
        yield "\" width=\"25%\">
            ";
        // line 126
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126)) {
            // line 127
            yield "                <!-- Display logged-in user's email -->
                <div class=\"user-email\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "email", [], "any", false, false, false, 128), "html", null, true);
            yield "</div>
            ";
        }
        // line 130
        yield "            <h3>Navigation</h3>
            <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_index");
        yield "\">Recherche de Musique</a>
            <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_index");
        yield "\">Recherche d'Artiste</a>
            ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133)) {
            // line 134
            yield "                <!-- Link to the Favorites page -->
                <a href=\"#\">Favoris</a>
            ";
        }
        // line 137
        yield "        </div>

        <!-- Main wrapper (navbar + content) -->
        <div class=\"main-wrapper\">
            <!-- Navbar -->
            <div class=\"navbar\">
                <h1>";
        // line 143
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</h1>
                <!-- Button login and registration -->
                <div class=\"right\">
                    ";
        // line 146
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146)) {
            // line 147
            yield "                        <!-- Logout button if user is logged in -->
                        <a href=\"";
            // line 148
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                            <button class=\"btn\">Déconnexion</button>
                        </a>
                    ";
        } else {
            // line 152
            yield "                        <!-- Login button if user is not logged in -->
                        <a href=\"";
            // line 153
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            <button class=\"btn\">Connexion</button>
                        </a>
                    ";
        }
        // line 157
        yield "                    <!-- Registration button -->
                    <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                        <button class=\"btn\">Inscription</button>
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class=\"main-content\">
                ";
        // line 166
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 167
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

    // line 119
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

    // line 143
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

    // line 166
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
        return array (  354 => 166,  331 => 143,  309 => 119,  286 => 6,  271 => 167,  269 => 166,  258 => 158,  255 => 157,  248 => 153,  245 => 152,  238 => 148,  235 => 147,  233 => 146,  227 => 143,  219 => 137,  214 => 134,  212 => 133,  208 => 132,  204 => 131,  201 => 130,  196 => 128,  193 => 127,  191 => 126,  187 => 125,  180 => 120,  178 => 119,  63 => 7,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title_page %}Spotify{% endblock %}</title>
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

            /* Sidebar styling */
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

            /* Navbar + main content wrapper */
            .main-wrapper {
                margin-left: 250px;
                width: calc(100% - 250px);
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            /* Navbar styling */
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
        <!-- Sidebar -->
        <div class=\"sidebar\">
            <img src=\"{{ asset('media/spotify-removebg-preview.png') }}\" width=\"25%\">
            {% if app.user %}
                <!-- Display logged-in user's email -->
                <div class=\"user-email\">{{ app.user.email }}</div>
            {% endif %}
            <h3>Navigation</h3>
            <a href=\"{{ path('app_track_index') }}\">Recherche de Musique</a>
            <a href=\"{{ path('app_artist_index') }}\">Recherche d'Artiste</a>
            {% if app.user %}
                <!-- Link to the Favorites page -->
                <a href=\"#\">Favoris</a>
            {% endif %}
        </div>

        <!-- Main wrapper (navbar + content) -->
        <div class=\"main-wrapper\">
            <!-- Navbar -->
            <div class=\"navbar\">
                <h1>{% block title %}Spotify{% endblock %}</h1>
                <!-- Button login and registration -->
                <div class=\"right\">
                    {% if app.user %}
                        <!-- Logout button if user is logged in -->
                        <a href=\"{{ path('app_logout') }}\">
                            <button class=\"btn\">Déconnexion</button>
                        </a>
                    {% else %}
                        <!-- Login button if user is not logged in -->
                        <a href=\"{{ path('app_login') }}\">
                            <button class=\"btn\">Connexion</button>
                        </a>
                    {% endif %}
                    <!-- Registration button -->
                    <a href=\"{{ path('app_register') }}\">
                        <button class=\"btn\">Inscription</button>
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class=\"main-content\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </body>
</html>
", "base.html.twig", "C:\\Users\\Clément\\symfony\\templates\\base.html.twig");
    }
}
