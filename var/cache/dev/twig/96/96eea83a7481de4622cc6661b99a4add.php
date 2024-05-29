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

/* home/report.html.twig */
class __TwigTemplate_d88b3408d3244fd054ad6303a79c9cc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/report.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Report";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "    <h1>Redovisningar:</h1>

    <ul>
        <li><a href=\"#kmom01\">Kmom01</a></li>
        <li><a href=\"#kmom02\">Kmom02</a></li>
        <!-- Add more kmom links as needed -->
    </ul>

    <h2 id=\"kmom01\">Kmom01</h2>
    <p>Jag har tidigare erfarenhet av att arbeta med objektorienterad programmering, genom min tidigare kurs i Python. Där lärde jag mig hur man strukturerar kod genom att definiera klasser och använda objekt för att organisera och återanvända kod. Objektorientering möjliggör en mer modulär och strukturerad kodbas genom att tillåta oss att gruppera relaterade data och funktioner inom enskilda enheter kallade klasser. Detta ger ökad flexibilitet, underhållbarhet och återanvändbarhet av kod.</p><br>
    <p>PHPs modell för klasser och objekt fungerar nästan på samma sätt som i Python, med skillnaden att det är ett annat programmeringsspråk. I PHP är en klass en mall för att skapa objekt. En klass kan innehålla egenskaper (attribut) och metoder (funktioner). Att skapa en instans av en klass innebär att skapa ett objekt baserat på den klassen. En konstruktor är en speciell metod som används för att initialisera objekt av en klass genom att tilldela värden till objektets attribut.</p><br>
    <p>Strukturen som användes i uppgiften me/report är baserad på en huvudklass kallad PresentationController som ärver från AbstractController-klassen. Detta möjliggör att PresentationController kan använda attribut och metoder som är definierade i AbstractController. I koden finns det olika metoder som är definierade i PresentationController, såsom presentation, about, report och lucky. Varje metod representerar en specifik webbrutt för applikationen. Dessa metoder svarar på HTTP-förfrågningar på olika URL-rutter (/, /about, /report, /lucky) och returnerar en Response-objekt som innehåller den resulterande sidan. Varje metod använder också Twig-mallar för att rendera HTML-sidorna som ska visas för användaren. </p>
    <p>Jag fann både begreppet namespace och användningen av magiska metoder intressanta och värdefulla aspekter i artikeln \"PHP The Right Way\".
        Namespace-konceptet erbjuder en strukturerad metod för att organisera PHP-kod, vilket hjälper till att undvika namnkollisioner och göra koden mer läsbar och underhållbar. Genom att gruppera relaterade klasser och funktioner inom samma namespace blir det lättare att hantera och navigera i koden, vilket är särskilt användbart i större projekt.
        De magiska metoderna är också fascinerande eftersom de tillåter utvecklare att skapa mer dynamiska och flexibla klasser. Till exempel kan användningen av __construct()-metoden för att initiera objekt och __get() samt __set()-metoderna för att hantera egenskaper göra koden mer elegant och mindre repetitiv. Dessutom kan __toString()-metoden användas för att definiera hur objekt ska representeras som strängar, vilket kan vara användbart vid debugging och loggning.</p>
    <p> Min TiL för detta kursmomentet är Att arbeta med klasser i PHP ger en grundläggande förståelse för objektorienterad programmering och hur man strukturerar kod på ett mer organiserat sätt. Dessutom är det att skapa olika rutter med Twig och Symfony Framework ett värdefullt steg för att bygga webbapplikationer och hantera klientbegäranden på ett effektivt sätt.</p>

    <h2 id=\"kmom02\">Kmom02</h2>

    <p>I objektorienterad programmering finns det olika konstruktioner för att organisera och strukturera klasser:</p>
    <p>Arv (Inheritance):
    Arv innebär att en klass (barnklass) kan ärva egenskaper och metoder från en annan klass (förälderklass). I PHP uppnås detta genom att använda nyckelordet extends.</p> 
 
    <p>Komposition (Composition):
    Komposition innebär att en klass använder en instans av en annan klass som en av sina medlemmar. Detta ger flexibilitet genom att tillåta konstruktion av komplexa objekt genom att kombinera mindre komponenter. I PHP skapas komposition genom att skapa instanser av andra klasser inuti den aktuella klassen.</p>

    <p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/report.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report{% endblock %}

{% block main %}
    <h1>Redovisningar:</h1>

    <ul>
        <li><a href=\"#kmom01\">Kmom01</a></li>
        <li><a href=\"#kmom02\">Kmom02</a></li>
        <!-- Add more kmom links as needed -->
    </ul>

    <h2 id=\"kmom01\">Kmom01</h2>
    <p>Jag har tidigare erfarenhet av att arbeta med objektorienterad programmering, genom min tidigare kurs i Python. Där lärde jag mig hur man strukturerar kod genom att definiera klasser och använda objekt för att organisera och återanvända kod. Objektorientering möjliggör en mer modulär och strukturerad kodbas genom att tillåta oss att gruppera relaterade data och funktioner inom enskilda enheter kallade klasser. Detta ger ökad flexibilitet, underhållbarhet och återanvändbarhet av kod.</p><br>
    <p>PHPs modell för klasser och objekt fungerar nästan på samma sätt som i Python, med skillnaden att det är ett annat programmeringsspråk. I PHP är en klass en mall för att skapa objekt. En klass kan innehålla egenskaper (attribut) och metoder (funktioner). Att skapa en instans av en klass innebär att skapa ett objekt baserat på den klassen. En konstruktor är en speciell metod som används för att initialisera objekt av en klass genom att tilldela värden till objektets attribut.</p><br>
    <p>Strukturen som användes i uppgiften me/report är baserad på en huvudklass kallad PresentationController som ärver från AbstractController-klassen. Detta möjliggör att PresentationController kan använda attribut och metoder som är definierade i AbstractController. I koden finns det olika metoder som är definierade i PresentationController, såsom presentation, about, report och lucky. Varje metod representerar en specifik webbrutt för applikationen. Dessa metoder svarar på HTTP-förfrågningar på olika URL-rutter (/, /about, /report, /lucky) och returnerar en Response-objekt som innehåller den resulterande sidan. Varje metod använder också Twig-mallar för att rendera HTML-sidorna som ska visas för användaren. </p>
    <p>Jag fann både begreppet namespace och användningen av magiska metoder intressanta och värdefulla aspekter i artikeln \"PHP The Right Way\".
        Namespace-konceptet erbjuder en strukturerad metod för att organisera PHP-kod, vilket hjälper till att undvika namnkollisioner och göra koden mer läsbar och underhållbar. Genom att gruppera relaterade klasser och funktioner inom samma namespace blir det lättare att hantera och navigera i koden, vilket är särskilt användbart i större projekt.
        De magiska metoderna är också fascinerande eftersom de tillåter utvecklare att skapa mer dynamiska och flexibla klasser. Till exempel kan användningen av __construct()-metoden för att initiera objekt och __get() samt __set()-metoderna för att hantera egenskaper göra koden mer elegant och mindre repetitiv. Dessutom kan __toString()-metoden användas för att definiera hur objekt ska representeras som strängar, vilket kan vara användbart vid debugging och loggning.</p>
    <p> Min TiL för detta kursmomentet är Att arbeta med klasser i PHP ger en grundläggande förståelse för objektorienterad programmering och hur man strukturerar kod på ett mer organiserat sätt. Dessutom är det att skapa olika rutter med Twig och Symfony Framework ett värdefullt steg för att bygga webbapplikationer och hantera klientbegäranden på ett effektivt sätt.</p>

    <h2 id=\"kmom02\">Kmom02</h2>

    <p>I objektorienterad programmering finns det olika konstruktioner för att organisera och strukturera klasser:</p>
    <p>Arv (Inheritance):
    Arv innebär att en klass (barnklass) kan ärva egenskaper och metoder från en annan klass (förälderklass). I PHP uppnås detta genom att använda nyckelordet extends.</p> 
 
    <p>Komposition (Composition):
    Komposition innebär att en klass använder en instans av en annan klass som en av sina medlemmar. Detta ger flexibilitet genom att tillåta konstruktion av komplexa objekt genom att kombinera mindre komponenter. I PHP skapas komposition genom att skapa instanser av andra klasser inuti den aktuella klassen.</p>

    <p>
{% endblock %}
", "home/report.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/home/report.html.twig");
    }
}
