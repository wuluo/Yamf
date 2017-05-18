<?php

/* public/resource.html */
class __TwigTemplate_d06e7a4519e9b5f57101ad93dac98ceb9b81f2b60ecfd9c1ef62b397bfb2cc37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>Taurasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"/static/manage/bootstrap/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"/static/manage/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"/static/manage/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"/static/manage/dist/css/AdminLTE.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"/static/manage/dist/css/skins/_all-skins.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"/static/manage/html5shiv.min.js\"></script>
  <script src=\"/static/manage/respond.min.js\"></script>
  <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">
<div class=\"content-wrapper\">
";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "</div>
</div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"/static/manage/plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"/static/manage/bootstrap/js/bootstrap.min.js\"></script>
<!-- SlimScroll -->
<script src=\"/static/manage/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- FastClick -->
<script src=\"/static/manage/plugins/fastclick/fastclick.js\"></script>
<!-- AdminLTE App -->
<script src=\"/static/manage/dist/js/app.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"/static/manage/dist/js/demo.js\"></script>
</body>
</html>";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "public/resource.html";
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  55 => 34,  53 => 32,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>Taurasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"/static/manage/bootstrap/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"/static/manage/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"/static/manage/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"/static/manage/dist/css/AdminLTE.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"/static/manage/dist/css/skins/_all-skins.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"/static/manage/html5shiv.min.js\"></script>
  <script src=\"/static/manage/respond.min.js\"></script>
  <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">
<div class=\"content-wrapper\">
{% block content %}
{% endblock %}
</div>
</div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"/static/manage/plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"/static/manage/bootstrap/js/bootstrap.min.js\"></script>
<!-- SlimScroll -->
<script src=\"/static/manage/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- FastClick -->
<script src=\"/static/manage/plugins/fastclick/fastclick.js\"></script>
<!-- AdminLTE App -->
<script src=\"/static/manage/dist/js/app.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"/static/manage/dist/js/demo.js\"></script>
</body>
</html>", "public/resource.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\public\\resource.html");
    }
}
