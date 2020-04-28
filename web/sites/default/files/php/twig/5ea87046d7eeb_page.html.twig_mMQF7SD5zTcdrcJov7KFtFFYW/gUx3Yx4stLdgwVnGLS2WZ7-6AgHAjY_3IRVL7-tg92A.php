<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/sava_ua/templates/layout/page.html.twig */
class __TwigTemplate_06ac4f9ed4286a7d0538301cdeffc17feb8963efec826a185f234e8daf9ee2e4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 62, "for" => 126];
        $filters = ["escape" => 70, "raw" => 127, "date" => 437];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", []) || $this->getAttribute(($context["page"] ?? null), "top_menu", []))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          ";
            // line 69
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", [])) {
                // line 70
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contact_email", [])), "html", null, true);
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          ";
            // line 77
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", [])) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_menu", [])), "html", null, true);
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-4\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 103
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
        }
        // line 105
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 111
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          ";
        }
        // line 113
        echo "        </div>

        </div>
      </div>
    </nav>
</header>



<!-- Start: Slider -->
  ";
        // line 123
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 124
            echo "    <div class=\"flexslider wow bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 127
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "      </ul>
    </div>
  ";
        }
        // line 132
        echo "<!-- End: Slider -->


<!-- Start: Home page message -->
  ";
        // line 136
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) || $this->getAttribute(($context["page"] ?? null), "homepagemessage", [])))) {
            // line 137
            echo "    <div class=\"parallax-widget zero\" id=\"about\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">

          <!-- Start: Home page message -->
          ";
            // line 142
            if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", []))) {
                // line 143
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepagemessage", [])), "html", null, true);
                echo "
          ";
            }
            // line 145
            echo "          <!--End: Home page message -->

          ";
            // line 147
            if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])))) {
                // line 148
                echo "            <div class=\"row- clearfix topwidget\">

              <!-- Start: Top wid
              get first -->          
              ";
                // line 152
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                    // line 153
                    echo "                <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                    echo "</div>
              ";
                }
                // line 154
                echo "          
              <!-- End: Top widget first --> 

              <!-- Start: Top widget second -->          
              ";
                // line 158
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                    // line 159
                    echo "                <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                    echo "</div>
              ";
                }
                // line 160
                echo "          
              <!-- End: Top widget second --> 
              
              <!-- Start: Top widget third -->         
              ";
                // line 164
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                    // line 165
                    echo "                <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                    echo "</div>
              ";
                }
                // line 166
                echo "          
              <!-- End: Top widget third -->

            </div>
          ";
            }
            // line 171
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 176
        echo "<!--End: Home page message -->


<!-- Start: xxx -->
<div class=\"parallax-widget one\" id=\"whoweare\">
  <div class=\"parallax-region- wow bounceInDown\">
    
    ";
        // line 183
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 184
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 187
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 192
        echo "
    ";
        // line 193
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 194
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 199
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 206
        echo "
    <div class=\"container\">
      <div class=\"parallax-region\">

        ";
        // line 210
        if ( !($context["is_front"] ?? null)) {
            // line 211
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 212
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 215
        echo "
        <div class=\"row layout\">

          ";
        // line 218
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 219
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 220
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo "> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 223
        echo "
          ";
        // line 224
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 225
            echo "            <div class=\"content_layout\">
              <div class=";
            // line 226
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo "> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 229
        echo "
          ";
        // line 230
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 231
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 232
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo "> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 235
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: xxx -->


<!-- Start: Home page message -->
  ";
        // line 245
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "services", []))) {
            // line 246
            echo "    <div class=\"parallax-widget two\" id=\"services\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 251
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 258
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 262
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", [])))) {
            // line 263
            echo "  <div class=\"parallax-widget four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 269
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 270
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 271
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 273
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 277
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 278
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 279
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 281
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 285
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 286
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 287
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 289
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 293
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 294
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 295
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 298
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 305
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
  ";
        // line 309
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "clients", []))) {
            // line 310
            echo "    <div class=\"parallax-widget three\" id=\"clients\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 315
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 322
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 326
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])))) {
            // line 327
            echo "  <div class=\"parallax-widget six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 333
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 334
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 335
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 338
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 341
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 342
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 343
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 346
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 349
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 350
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 351
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 354
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 361
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 365
        if (((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", [])) && $this->getAttribute(($context["page"] ?? null), "address", []))) {
            // line 366
            echo "  <div class=\"parallax-widget five map-and-address\" id=\"contact\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <!-- Start: Google map -->
            ";
            // line 372
            if ($this->getAttribute(($context["page"] ?? null), "google_map", [])) {
                // line 373
                echo "              <div class=\"google_map\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
                echo "</div>
            ";
            }
            // line 375
            echo "            <!-- End: Google map -->
          </div>
          <div class=\"col-md-6\">
            <!-- Start: Address -->
            ";
            // line 379
            if ($this->getAttribute(($context["page"] ?? null), "address", [])) {
                // line 380
                echo "              <div class=\"address-wrap\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "address", [])), "html", null, true);
                echo "</div>
            ";
            }
            // line 382
            echo "          <!--End: Address -->
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 389
        echo "<!--End: Home page message -->


<!-- Start: Footer Menu -->
";
        // line 393
        if (($context["show_social_icon"] ?? null)) {
            // line 394
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Social media links -->
        <div class=\"col-sm-12\">
          <div class=\"social-media\">
            ";
            // line 401
            if (($context["facebook_url"] ?? null)) {
                // line 402
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 404
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 405
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
            }
            // line 407
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 408
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 410
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 411
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 413
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 414
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 416
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 417
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 419
            echo "          </div>
        </div>
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 427
        echo "<!-- End: Footer Menu -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 437
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 442
        if (($context["show_credit_link"] ?? null)) {
            // line 443
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"#\" target=\"_blank\">Redmond</a></p>
        </div>
      ";
        }
        // line 447
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/sava_ua/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  761 => 447,  755 => 443,  753 => 442,  745 => 437,  733 => 427,  723 => 419,  717 => 417,  714 => 416,  708 => 414,  705 => 413,  699 => 411,  696 => 410,  690 => 408,  687 => 407,  681 => 405,  678 => 404,  672 => 402,  670 => 401,  661 => 394,  659 => 393,  653 => 389,  644 => 382,  638 => 380,  636 => 379,  630 => 375,  624 => 373,  622 => 372,  614 => 366,  612 => 365,  606 => 361,  597 => 354,  591 => 351,  586 => 350,  584 => 349,  579 => 346,  573 => 343,  568 => 342,  566 => 341,  561 => 338,  555 => 335,  550 => 334,  548 => 333,  540 => 327,  538 => 326,  532 => 322,  522 => 315,  515 => 310,  513 => 309,  507 => 305,  498 => 298,  492 => 295,  487 => 294,  485 => 293,  479 => 289,  473 => 287,  468 => 286,  466 => 285,  460 => 281,  454 => 279,  449 => 278,  447 => 277,  441 => 273,  435 => 271,  430 => 270,  428 => 269,  420 => 263,  418 => 262,  412 => 258,  402 => 251,  395 => 246,  393 => 245,  381 => 235,  373 => 232,  370 => 231,  368 => 230,  365 => 229,  357 => 226,  354 => 225,  352 => 224,  349 => 223,  341 => 220,  338 => 219,  336 => 218,  331 => 215,  325 => 212,  322 => 211,  320 => 210,  314 => 206,  304 => 199,  297 => 194,  295 => 193,  292 => 192,  284 => 187,  279 => 184,  277 => 183,  268 => 176,  261 => 171,  254 => 166,  246 => 165,  244 => 164,  238 => 160,  230 => 159,  228 => 158,  222 => 154,  214 => 153,  212 => 152,  206 => 148,  204 => 147,  200 => 145,  194 => 143,  192 => 142,  185 => 137,  183 => 136,  177 => 132,  172 => 129,  163 => 127,  159 => 126,  155 => 124,  153 => 123,  141 => 113,  135 => 111,  133 => 110,  126 => 105,  120 => 103,  118 => 102,  101 => 87,  92 => 80,  86 => 78,  84 => 77,  77 => 72,  71 => 70,  69 => 69,  61 => 63,  59 => 62,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


{% if page.contact_email or page.top_menu %}
  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          {% if page.contact_email %}
            {{ page.contact_email }}
          {% endif %}
        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          {% if page.top_menu %}
            {{ page.top_menu }}
          {% endif %}
        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
{% endif %}


<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-4\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          {% if page.header %}
            {{ page.header }}
          {% endif %}
        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          {% if page.primary_menu %}
            {{ page.primary_menu }}
          {% endif %}
        </div>

        </div>
      </div>
    </nav>
</header>



<!-- Start: Slider -->
  {% if is_front and show_slideshow%}
    <div class=\"flexslider wow bounceInUp\">
      <ul class=\"slides\">
        {% for slider_contents in slider_content %}
          {{ slider_contents | raw }}
        {% endfor %}
      </ul>
    </div>
  {% endif %}
<!-- End: Slider -->


<!-- Start: Home page message -->
  {% if (is_front) and (page.topwidget_first or page.topwidget_second or page.topwidget_third or page.homepagemessage) %}
    <div class=\"parallax-widget zero\" id=\"about\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">

          <!-- Start: Home page message -->
          {% if is_front and page.homepagemessage %}
            {{ page.homepagemessage }}
          {% endif %}
          <!--End: Home page message -->

          {% if (is_front) and (page.topwidget_first or page.topwidget_second or page.topwidget_third) %}
            <div class=\"row- clearfix topwidget\">

              <!-- Start: Top wid
              get first -->          
              {% if page.topwidget_first %}
                <div class = {{ topwidget_class }}>{{ page.topwidget_first }}</div>
              {% endif %}          
              <!-- End: Top widget first --> 

              <!-- Start: Top widget second -->          
              {% if page.topwidget_second %}
                <div class = {{ topwidget_class }}>{{ page.topwidget_second }}</div>
              {% endif %}          
              <!-- End: Top widget second --> 
              
              <!-- Start: Top widget third -->         
              {% if page.topwidget_third %}
                <div class = {{ topwidget_third_class }}>{{ page.topwidget_third }}</div>
              {% endif %}          
              <!-- End: Top widget third -->

            </div>
          {% endif %}

        </div>
      </div>
    </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: xxx -->
<div class=\"parallax-widget one\" id=\"whoweare\">
  <div class=\"parallax-region- wow bounceInDown\">
    
    {% if page.highlighted %}
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.highlighted }}
          </div>
        </div>
      </div>
    {% endif %}

    {%  if page.page_title and not is_front %}
      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                {{ page.page_title }}
              </div>
            </div>
          </div>
        </div>
      </div>
    {% endif %}

    <div class=\"container\">
      <div class=\"parallax-region\">

        {% if not is_front %}
          <div class=\"row\">
            <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
          </div>
        {% endif %}

        <div class=\"row layout\">

          {% if page.sidebar_first %}
            <div class=\"sidebar\">
              <div class={{sidebarfirst}}> {{page.sidebar_first}} </div>
            </div>
          {% endif %}

          {% if page.content %}
            <div class=\"content_layout\">
              <div class={{contentlayout}}> {{page.content}} </div>
            </div>
          {% endif %}

          {% if page.sidebar_second %}
            <div class=\"sidebar\">
              <div class={{sidebarsecond}}> {{page.sidebar_second}} </div>
            </div>
          {% endif %}

        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: xxx -->


<!-- Start: Home page message -->
  {% if is_front and page.services %}
    <div class=\"parallax-widget two\" id=\"services\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ page.services }}
            </div>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: Home page message -->
{% if is_front and (page.bottom_first or page.bottom_second or page.bottom_third or page.bottom_forth) %}
  <div class=\"parallax-widget four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          {% if page.bottom_first %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_first }}
            </div>
          {% endif %}          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          {% if page.bottom_second %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_second }}
            </div>
          {% endif %}          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          {% if page.bottom_third %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_third }}
            </div>
          {% endif %}          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          {% if page.bottom_forth %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_forth }}
            </div>
          {% endif %}
          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
{% endif %}
<!--End: Home page message -->


<!-- Start: Home page message -->
  {% if is_front and page.clients %}
    <div class=\"parallax-widget three\" id=\"clients\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ page.clients }}
            </div>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: Home page message -->
{% if  is_front and (page.footer_first or page.footer_second or page.footer_third) %}
  <div class=\"parallax-widget six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          {% if page.footer_first %}
            <div class = {{ footer_first_class }}>
              {{ page.footer_first }}
            </div>
          {% endif %}
          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          {% if page.footer_second %}
            <div class = {{ footer_class }}>
              {{ page.footer_second }}
            </div>
          {% endif %}
          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          {% if page.footer_third %}
            <div class = {{ footer_class }}>
              {{ page.footer_third }}
            </div>
          {% endif %}
          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>
{% endif %}
<!--End: Home page message -->


<!-- Start: Home page message -->
{% if is_front and page.google_map and page.address%}
  <div class=\"parallax-widget five map-and-address\" id=\"contact\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <!-- Start: Google map -->
            {% if page.google_map %}
              <div class=\"google_map\">{{ page.google_map }}</div>
            {% endif %}
            <!-- End: Google map -->
          </div>
          <div class=\"col-md-6\">
            <!-- Start: Address -->
            {% if page.address %}
              <div class=\"address-wrap\">{{ page.address }}</div>
            {% endif %}
          <!--End: Address -->
          </div>
        </div>
      </div>
    </div>
  </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: Footer Menu -->
{% if show_social_icon %}
  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Social media links -->
        <div class=\"col-sm-12\">
          <div class=\"social-media\">
            {% if facebook_url %}
              <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            {% endif %}
            {% if google_plus_url %}
              <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            {% endif %}
            {% if twitter_url %}
              <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            {% endif %}
            {% if linkedin_url %}
              <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            {% endif %}
            {% if pinterest_url %}
              <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            {% endif %}
            {% if rss_url %}
              <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            {% endif %}
          </div>
        </div>
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
{% endif %}
<!-- End: Footer Menu -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © {{ \"now\"|date(\"Y\") }}. All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      {% if show_credit_link %}
        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"#\" target=\"_blank\">Redmond</a></p>
        </div>
      {% endif %}
      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
", "themes/sava_ua/templates/layout/page.html.twig", "/var/www/html/web/themes/sava_ua/templates/layout/page.html.twig");
    }
}
