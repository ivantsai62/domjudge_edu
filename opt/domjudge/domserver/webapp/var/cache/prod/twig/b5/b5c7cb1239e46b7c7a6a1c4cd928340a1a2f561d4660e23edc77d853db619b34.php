<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* team/partials/css/font_google_api.css */
class __TwigTemplate_25f22dab18615857b527713c6db727dc040c57604f20abc5e3304c14cdfd51c1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "/* cyrillic-ext */
@font-face {
    font-family: 'Exo 2';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jvvKsNNC_nps.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
  }
  /* cyrillic */
  @font-face {
    font-family: 'Exo 2';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jvvKsPdC_nps.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }
  /* vietnamese */
  @font-face {
    font-family: 'Exo 2';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jvvKsNtC_nps.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }
  /* latin-ext */
  @font-face {
    font-family: 'Exo 2';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jvvKsN9C_nps.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  /* latin */
  @font-face {
    font-family: 'Exo 2';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jvvKsOdC_.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }";
    }

    public function getTemplateName()
    {
        return "team/partials/css/font_google_api.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/css/font_google_api.css", "/opt/domjudge/domserver/webapp/templates/team/partials/css/font_google_api.css");
    }
}
