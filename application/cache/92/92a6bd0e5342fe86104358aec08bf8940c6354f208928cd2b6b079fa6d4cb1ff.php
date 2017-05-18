<?php

/* index\index.html */
class __TwigTemplate_228db9939c33dc2b366bfbc66e4d4d1acd623c9510beeea4145341c8c2dd070d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <title>Hello World</title>
</head>
<body>
<?php echo \$content;?>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index\\index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <title>Hello World</title>
</head>
<body>
<?php echo \$content;?>
</body>
</html>", "index\\index.html", "D:\\Code\\Yaf\\application\\views\\index\\index.html");
    }
}
