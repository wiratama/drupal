<?php

/* themes/wyeth_milestone/templates/page.html.twig */
class __TwigTemplate_5813dfd5eb7557aef0140146613884b51deb7d893548aad6a51b853b8289d948 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<nav id=\"mainNavbar\">
  <div class=\"container c-inner\">
    <button class=\"navbar-toggler\" type=\"button\" id=\"mainNavbarToggler\" data-toggle=\"collapse\" data-target=\"#mainNavbarContent\" aria-controls=\"mainNavbarContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"index.php\"><img src=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/parenting-club.png\" alt=\"\"><span class=\"sr-only\">Parenting Club</span></a>
    <button id=\"searchToggleMobile\" data-toggle=\"collapse\" data-target=\"#mainNavbarContent\" aria-controls=\"mainNavbarContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
    <div class=\"acc\">
      <a href=\"#\" class=\"acc-img\">
        <img src=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/acc-na.png\" alt=\"\">
      </a>
      <div class=\"acc-opt\">
        <a href=\"#\" class=\"acc-login-link\" data-toggle=\"modal\" data-target=\"#puLoginRegister\">Login</a>
        <a href=\"#\" class=\"acc-register-link\" data-toggle=\"modal\" data-target=\"#puLoginRegister\">Register</a>
      </div>
    </div>


    <div class=\"collapse navbar-collapse\" id=\"mainNavbarContent\">
      <a class=\"navbar-brand\" href=\"index.php\"><img src=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/parenting-club.png\" alt=\"\"></a>
      <button class=\"navbar-toggler\" type=\"button\" id=\"mainNavbarCloser\" data-toggle=\"collapse\" data-target=\"#mainNavbarContent\" aria-controls=\"mainNavbarContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span>&times;</span>
      </button>
      <div class=\"search hidden-lg-up\">
        <form class=\"searchbox\">
          <input type=\"search\" placeholder=\"Search......\" name=\"search\" class=\"searchbox-input\">
          <button class=\"searchbox-submit\" type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
        </form>
      </div>

      <ul id=\"mainNav\">
        <li class=\"active\">
          <a href=\"#\">Prakehamilan</a>
          <ul>
            <li>
              <a href=\"#\">Prakehamilan</a>
            </li>
            <li>
              <a href=\"#\">Persiapan Kehamilan</a>
            </li>
            <li>
              <a href=\"#\">Prakonsepsi</a>
            </li>
            <li>
              <a href=\"#\">Apakah Saya Hamil</a>
            </li>
            <li>
              Tools
            </li>
            <li>
              <a href=\"#\">Smart Ovulation Calendar</a>
            </li>
            <li>
              <a href=\"#\">Smart Nursery Calendar</a>
            </li>
            <li>
              <a href=\"#\">Smart Consultation</a>
            </li>
          </ul>
        </li>
        <li>
          <a href=\"#\">Kehamilan</a>
          <ul>
            <li>
              <a href=\"#\">Prakehamilan</a>
            </li>
            <li>
              <a href=\"#\">Persiapan Kehamilan</a>
            </li>
            <li>
              <a href=\"#\">Prakonsepsi</a>
            </li>
            <li>
              <a href=\"#\">Apakah Saya Hamil</a>
            </li>
            <li class=\"sub\">
              Kehamilan
            </li>
            <li>
              <a href=\"#\">Smart Ovulation Calendar</a>
            </li>
            <li>
              <a href=\"#\">Smart Nursery Calendar</a>
            </li>
            <li>
              <a href=\"#\">Smart Consultation</a>
            </li>
          </ul>
        </li>
        <li>
          <a href=\"#\">Bayi</a>
          <ul>
            <li>
              <a href=\"#\">Prakehamilan</a>
            </li>
            <li>
              <a href=\"#\">Persiapan Kehamilan</a>
            </li>
            <li>
              <a href=\"#\">Prakonsepsi</a>
            </li>
            <li>
              <a href=\"#\">Apakah Saya Hamil</a>
            </li>
            <li class=\"sub\">
              Bayi
            </li>
            <li>
              <a href=\"#\">Smart Ovulation Calendar</a>
            </li>
            <li>
              <a href=\"#\">Smart Nursery Calendar</a>
            </li>
            <li>
              <a href=\"#\">Smart Consultation</a>
            </li>
          </ul>
        </li>
        <li>
          <a href=\"#\">Anak</a>
          <ul>
            <li>
              <a href=\"#\">Anak</a>
            </li>
            <li>
              <a href=\"#\">Persiapan Kehamilan</a>
            </li>
            <li>
              <a href=\"#\">Prakonsepsi</a>
            </li>
            <li>
              <a href=\"#\">Apakah Saya Hamil</a>
            </li>
            <li class=\"sub\">
              Pra-kehamilan
            </li>
            <li>
              <a href=\"#\">Smart Ovulation Calendar</a>
            </li>
            <li>
              <a href=\"#\">Smart Nursery Calendar</a>
            </li>
            <li>
              <a href=\"#\">Smart Consultation</a>
            </li>
          </ul>
        </li>
      </ul>

      <div class=\"acc-info\">
        <p>Join parenting club to get all benefit</p>
        <a href=\"#\" class=\"btn btn-emas acc-register-link\" data-toggle=\"modal\" data-target=\"#puLoginRegister\">Register</a>
        <a href=\"#\" class=\"btn btn-primary acc-login-link\" data-toggle=\"modal\" data-target=\"#puLoginRegister\">Sign In</a>
      </div>
      <div class=\"nav-social\">
        <p>Connect with us</p>
        <a href=\"#\" class=\"btn btn-facebook\"><i class=\"fa-facebook\" aria-hidden=\"true\"></i><span class=\"sr-only\">Facebook</span></a>
        <a href=\"#\" class=\"btn btn-twitter\"><i class=\"fa-twitter\" aria-hidden=\"true\"></i><span class=\"sr-only\">Twitter</span></a>
        <a href=\"#\" class=\"btn btn-youtube\"><i class=\"fa-youtube\" aria-hidden=\"true\"></i><span class=\"sr-only\">Youtube</span></a>
        <a href=\"#\" class=\"btn btn-instagram\"><i class=\"fa-instagram\" aria-hidden=\"true\"></i><span class=\"sr-only\">Instagram</span></a>
      </div>
      <div class=\"search hidden-md-down\">

        <form class=\"searchbox\">
          <!-- <select class=\"bs-search\" data-live-search=\"true\" title='<i class=\"fa fa-search\" aria-hidden=\"true\"></i>' data-style=\"searchbox-submit\">
            <option>Hot Dog, Fries and a Soda</option>
            <option>Hot Dog and Potato wedges</option>
            <option>Burger, Shake and a Smile</option>
            <option>Sugar, Spice and all things nice</option>
          </select> -->
          <input type=\"search\" placeholder=\"Search......\" name=\"search\" class=\"searchbox-input\">
          <ul>
            <li>lorem</li>
            <li>ipsum</li>
            <li>dolor</li>
          </ul>
          <button class=\"searchbox-submit\" type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
        </form>
      </div>
    </div>
  </div>
</nav>

<div id=\"mainContent\">
  <div id=\"mainHero\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
      <div class=\"swiper-slide\">
        <div class=\"img\">
            <img src=\"";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/hero01-m.jpg\" alt=\"\" class=\"hidden-md-up\">
            <img src=\"";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/hero01-d.jpg\" alt=\"\" class=\"hidden-sm-down\">
        </div>
        <div class=\"txt\">
          <div>
            <h2>1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro molestias tempore fugiat quas dicta quasi neque sunt incidunt dignissimos unde eaque, deserunt praesentium et saepe eveniet provident suscipit, est velit.</p>
            <a href=\"#\" class=\"btn\">CTA button <i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
          </div>
        </div>
      </div>
      <div class=\"swiper-slide\">
        <div class=\"img\">
            <img src=\"";
        // line 202
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/hero01-m.jpg\" alt=\"\" class=\"hidden-md-up\">
            <img src=\"";
        // line 203
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/hero01-d.jpg\" alt=\"\" class=\"hidden-sm-down\">
        </div>
        <div class=\"txt txt-right text-grey\">
          <div>
            <h2>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro molestias tempore fugiat quas dicta quasi neque sunt incidunt dignissimos unde eaque, deserunt praesentium et saepe eveniet provident suscipit, est velit.</p>
            <a href=\"#\" class=\"btn\">CTA button <i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
          </div>
        </div>
      </div>
      <div class=\"swiper-slide\">
        <div class=\"img\">
            <img src=\"";
        // line 215
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/hero01-m.jpg\" alt=\"\" class=\"hidden-md-up\">
            <img src=\"";
        // line 216
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/hero01-d.jpg\" alt=\"\" class=\"hidden-sm-down\">
        </div>
        <div class=\"txt text-white\">
          <div>
            <h2>3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro molestias tempore fugiat quas dicta quasi neque sunt incidunt dignissimos unde eaque, deserunt praesentium et saepe eveniet provident suscipit, est velit.</p>
            <a href=\"#\" class=\"btn\">CTA button <i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"swiper-prev\"></div>
    <div class=\"swiper-next\"></div>
    <div class=\"swiper-pagination\"></div>
  </div>

  <div class=\"ms bg-prahamil\">
\t\t<div class=\"container c-inner\">
\t\t\t<h2 class=\"subtitle\"><i class=\"i mi prahamil\"></i>Prakehamilan</h2>

\t\t\t<a href=\"#to-article\" class=\"btn-fitur hidden-lg-up\">
\t\t\t\t<i class=\"i si cal\"></i>
\t\t\t\t<div class=\"txt\">
\t\t\t\t\t<small>Fitur Masa Prakehamilan</small>
\t\t\t\t\t<h4 class=\"a-title\">
\t\t\t\t\t\tSmart Ovulation Calendar<i class=\"i arrow-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t</a>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-8\">
\t\t\t\t\t<div class=\"a-hero\">
\t\t\t\t\t\t<a href=\"#to-article\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 252
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\" class=\"hidden-md-up\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 253
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-d.jpg\" alt=\"\" class=\"hidden-sm-down\">\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ducimus voluptas, odit modi id eum quam sapiente, consequuntur alias, rerum perspiciatis distinctio commodi nihil tempore praesentium, quaerat pariatur quas optio?</h3>
\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4 col-first\">
\t\t\t\t\t<a href=\"#to-article\" class=\"btn-fitur hidden-md-down\">
\t\t\t\t\t\t<i class=\"i si cal\"></i>
\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t<small>Fitur Masa Prakehamilan</small>
\t\t\t\t\t\t\t<h4 class=\"a-title\">
\t\t\t\t\t\t\t\tSmart Ovulation Calendar<i class=\"i arrow-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"a-list\">
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 276
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"a-title\">All element</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 291
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"a-title\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit at reiciendis soluta repudiandae magni, debitis quaerat eum. Delectus laborum corrupti rerum, quasi et, quisquam! Ipsa, voluptatibus. Maxime, a, libero.</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 306
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">All element</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"\" class=\"btn-more\">Selengkapnya <i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"ms bg-hamil\">
\t\t<div class=\"container c-inner\">
\t\t\t<h2 class=\"subtitle\"><i class=\"i mi hamil\"></i>Kehamilan</h2>

\t\t\t<a href=\"#to-article\" class=\"btn-fitur hidden-lg-up\">
\t\t\t\t<i class=\"i si cal\"></i>
\t\t\t\t<div class=\"txt\">
\t\t\t\t\t<small>Fitur Masa Prakehamilan</small>
\t\t\t\t\t<h4 class=\"a-title\">
\t\t\t\t\t\tSmart Ovulation Calendar<i class=\"i arrow-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t</a>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-8\">
\t\t\t\t\t<div class=\"a-hero\">
\t\t\t\t\t\t<a href=\"#to-article\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 346
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\" class=\"hidden-md-up\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 347
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-d.jpg\" alt=\"\" class=\"hidden-sm-down\">\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ducimus voluptas, odit modi id eum quam sapiente, consequuntur alias, rerum perspiciatis distinctio commodi nihil tempore praesentium, quaerat pariatur quas optio?</h3>
\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<a href=\"#to-article\" class=\"btn-fitur hidden-md-down\">
\t\t\t\t\t\t<i class=\"i si cal\"></i>
\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t<small>Fitur Masa Prakehamilan</small>
\t\t\t\t\t\t\t<h4 class=\"a-title\">
\t\t\t\t\t\t\t\tSmart Ovulation Calendar<i class=\"i arrow-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"a-list\">
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 370
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"a-title\">All element</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 385
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"a-title\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit at reiciendis soluta repudiandae magni, debitis quaerat eum. Delectus laborum corrupti rerum, quasi et, quisquam! Ipsa, voluptatibus. Maxime, a, libero.</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 400
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">All element</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"\" class=\"btn-more\">Selengkapnya <i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"ms bg-bayi\">
\t\t<div class=\"container c-inner\">
\t\t\t<h2 class=\"subtitle\"><i class=\"i mi bayi\"></i>Bayi</h2>

\t\t\t<a href=\"#to-article\" class=\"btn-fitur hidden-lg-up\">
\t\t\t\t<i class=\"i si cal\"></i>
\t\t\t\t<div class=\"txt\">
\t\t\t\t\t<small>Fitur Masa Prakehamilan</small>
\t\t\t\t\t<h4 class=\"a-title\">
\t\t\t\t\t\tSmart Ovulation Calendar<i class=\"i arrow-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t</a>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-8\">
\t\t\t\t\t<div class=\"a-hero\">
\t\t\t\t\t\t<a href=\"#to-article\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 440
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\" class=\"hidden-md-up\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 441
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-d.jpg\" alt=\"\" class=\"hidden-sm-down\">\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ducimus voluptas, odit modi id eum quam sapiente, consequuntur alias, rerum perspiciatis distinctio commodi nihil tempore praesentium, quaerat pariatur quas optio?</h3>
\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<a href=\"#to-article\" class=\"btn-fitur hidden-md-down\">
\t\t\t\t\t\t<i class=\"i si cal\"></i>
\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t<small>Fitur Masa Prakehamilan</small>
\t\t\t\t\t\t\t<h4 class=\"a-title\">
\t\t\t\t\t\t\t\tSmart Ovulation Calendar<i class=\"i arrow-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"a-list\">
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 464
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"a-title\">All element</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 479
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"a-title\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit at reiciendis soluta repudiandae magni, debitis quaerat eum. Delectus laborum corrupti rerum, quasi et, quisquam! Ipsa, voluptatibus. Maxime, a, libero.</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 494
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">All element</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"\" class=\"btn-more\">Selengkapnya <i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"ms bg-anak\">
\t\t<div class=\"container c-inner\">
\t\t\t<h2 class=\"subtitle\"><i class=\"i mi anak\"></i>Anak</h2>

\t\t\t<a href=\"#to-article\" class=\"btn-fitur hidden-lg-up\">
\t\t\t\t<i class=\"i si cal\"></i>
\t\t\t\t<div class=\"txt\">
\t\t\t\t\t<small>Fitur Masa Prakehamilan</small>
\t\t\t\t\t<h4 class=\"a-title\">
\t\t\t\t\t\tSmart Ovulation Calendar<i class=\"i arrow-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t</a>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-8\">
\t\t\t\t\t<div class=\"a-hero\">
\t\t\t\t\t\t<a href=\"#to-article\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 534
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\" class=\"hidden-md-up\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 535
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-d.jpg\" alt=\"\" class=\"hidden-sm-down\">\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ducimus voluptas, odit modi id eum quam sapiente, consequuntur alias, rerum perspiciatis distinctio commodi nihil tempore praesentium, quaerat pariatur quas optio?</h3>
\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<a href=\"#to-article\" class=\"btn-fitur hidden-md-down\">
\t\t\t\t\t\t<i class=\"i si cal\"></i>
\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t<small>Fitur Masa Prakehamilan</small>
\t\t\t\t\t\t\t<h4 class=\"a-title\">
\t\t\t\t\t\t\t\tSmart Ovulation Calendar<i class=\"i arrow-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"a-list\">
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 558
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"a-title\">All element</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 573
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"a-title\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit at reiciendis soluta repudiandae magni, debitis quaerat eum. Delectus laborum corrupti rerum, quasi et, quisquam! Ipsa, voluptatibus. Maxime, a, libero.</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#to-article\" class=\"atc\">
\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 588
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/a01-m.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">All element</h4>
\t\t\t\t\t\t\t\t\t<div class=\"meta-bar\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-cate\">Nutrisi</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"a-time\">3 jam yang lalu</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<i class=\"i arrow-2\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"\" class=\"btn-more\">Selengkapnya <i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"fitpar\">
\t\t<div class=\"container c-inner\">
\t\t\t<h2 class=\"h1\">Fitur Parenting</h2>
\t\t\t<div class=\"sw\">
\t\t\t\t<div class=\"sw-c swiper-container\">
\t\t\t\t\t<div class=\"sw-w swiper-wrapper\">
\t\t\t\t\t\t<div class=\"swiper-slide fitur fitur-consultation\">
\t\t\t\t\t\t\t<a href=\"https://wyeth.ogilvyoneid.com/smart-consultation\">
\t\t\t\t\t\t\t\t<i class=\"wy wy-consultation\"></i>
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"https://wyeth.ogilvyoneid.com/uploads/default/files/article_banner/4/smart-consultation_4_smart-consultation-png.png\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Smart Consultation <i class=\"i arrow-1\" aria-hidden=\"true\"></i></h3>
\t\t\t\t\t\t\t\t\t<p>Fitur Bayi</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide fitur fitur-ovulation\">
\t\t\t\t\t\t\t<a href=\"https://wyeth.ogilvyoneid.com/ovulation-calender\">
\t\t\t\t\t\t\t\t<i class=\"wy wy-ovulation\"></i>
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"https://wyeth.ogilvyoneid.com/uploads/default/files/article_banner/1/smart-ovulation-calender_1_ovulation-article-png.png\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Smart Ovulation Calender <i class=\"i arrow-1\" aria-hidden=\"true\"></i></h3>
\t\t\t\t\t\t\t\t\t<p>Fitur Prakehamilan</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide fitur fitur-duedate\">
\t\t\t\t\t\t\t<a href=\"https://wyeth.ogilvyoneid.com/pregnancy-duedate\">
\t\t\t\t\t\t\t\t<i class=\"wy wy-duedate\"></i>
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"https://wyeth.ogilvyoneid.com/uploads/default/files/article_banner/2/smart-due-date-calender_2_due-date-article-png.png\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Pregnancy Due Date Calculator <i class=\"i arrow-1\" aria-hidden=\"true\"></i></h3>
\t\t\t\t\t\t\t\t\t<p>Fitur Kehamilan</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide fitur fitur-babyname\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"wy wy-babyname\"></i>
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 655
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/ch-5.jpg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Baby Name Generator <i class=\"i arrow-1\" aria-hidden=\"true\"></i></h3>
\t\t\t\t\t\t\t\t\t<p>Inspirasi Nama si Kecil</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide fitur fitur-stimulation\">
\t\t\t\t\t\t\t<a href=\"https://wyeth.ogilvyoneid.com/smart-strength-finder/21-days-smart-stimulations\">
\t\t\t\t\t\t\t\t<i class=\"wy wy-stimulation\"></i>
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"https://wyeth.ogilvyoneid.com/uploads/default/files/article_banner/9/smart-stimulation_9_smart-stimulation-png.png\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Smart Stimulation <i class=\"i arrow-1\" aria-hidden=\"true\"></i></h3>
\t\t\t\t\t\t\t\t\t<p>Fitur Anak-anak</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide fitur fitur-ssf\">
\t\t\t\t\t\t\t<a href=\"https://wyeth.ogilvyoneid.com/smart-strength-finder-tools\">
\t\t\t\t\t\t\t\t<i class=\"wy wy-ssf\"></i>
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"https://wyeth.ogilvyoneid.com/uploads/default/files/article_banner/3/smart-strength-finder_3_ssf-png.png\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Smart Strength Finder <i class=\"i arrow-1\" aria-hidden=\"true\"></i></h3>
\t\t\t\t\t\t\t\t\t<p>Fitur Anak-anak</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide fitur fitur-school\">
\t\t\t\t\t\t\t<a href=\"https://wyeth.ogilvyoneid.com/smart-school\">
\t\t\t\t\t\t\t\t<i class=\"wy wy-school\"></i>
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"https://wyeth.ogilvyoneid.com/uploads/default/files/article_banner/10/smart-school_10_smart-school-jpg.jpg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Smart School <i class=\"i arrow-1\" aria-hidden=\"true\"></i></h3>
\t\t\t\t\t\t\t\t\t<p>Fitur Anak-anak</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-prev i wy-prev\" aria-hidden=\"true\"></div>
\t\t\t\t<div class=\"swiper-next i wy-next\" aria-hidden=\"true\"></div>\t
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"ikutserta\">
\t\t<div class=\"container c-inner\">
\t\t\t<h2 class=\"h1\">Ikut Serta</h2>
\t\t\t<div class=\"sw\">
\t\t\t\t<div class=\"sw-c swiper-container\">
\t\t\t\t\t<div class=\"sw-w swiper-wrapper\">
\t\t\t\t\t\t<div class=\"swiper-slide a-hero\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 716
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/ch-5.jpg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Mom Blogger</h3>
\t\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide a-hero\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 727
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/ch-5.jpg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">E-Voucher</h3>
\t\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide a-hero\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 738
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/ch-5.jpg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">E-Voucher</h3>
\t\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide a-hero\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 749
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/ch-5.jpg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Mom &amp; Jo</h3>
\t\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-slide a-hero\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 760
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/ch-5.jpg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"txt\">
\t\t\t\t\t\t\t\t\t<h3 class=\"a-title\">Event minggu ini</h3>
\t\t\t\t\t\t\t\t\t<i class=\"i circle-arrow-3\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-prev i wy-prev\" aria-hidden=\"true\"></div>
\t\t\t\t<div class=\"swiper-next i wy-next\" aria-hidden=\"true\"></div>\t

\t\t\t</div>
\t\t</div>
\t</div>
</div>

<footer id=\"footerAbout\">
\t<div class=\"c-0\">
\t\t<div class=\"container c-inner\">
\t\t\t<div class=\"txt\">
\t\t\t\t<h2>Tentang Parenting Club</h2>
\t\t\t\t<p>Dalam mendukung tumbuh kembang anak, Anda pasti membutuhkan berbagai informasi penting seputar dunianya. Tak perlu khawatir, kini informasi yang Anda butuhkan sudah terkumpul dalam satu wadah. Yuk jelajahi artikel yang akan membantu Anda mendukung kepintaran si Kecil agar pintarnya beda.</p>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

<footer id=\"mainFooter\">
\t<div class=\"container c-inner\">
\t\t<nav>
\t\t\t<a href=\"pages.php\">About Us</a>
\t\t\t<a href=\"pages.php\">Privacy Policy</a>
\t\t\t<a href=\"pages.php\">Cookies Policy</a>
\t\t\t<a href=\"pages.php\">Terms &amp; Conditions</a>
\t\t\t<a href=\"pages.php\">Contact Us</a>
\t\t\t<a href=\"pages.php\">Tell Us</a>
\t\t</nav>
\t\t<p>PT Wyeth Nutrition Sduaenam. Wisma Nestle, Perkantoran Hijau Arkadia, Gedung B, Lantai 16 Jalan Let. Jend. TB Simatupang Kav. 88 Jakarta 12520 Indonesia</p>
\t\t<p>&copy; 2015 Wyeth. Powered by : </p>
\t\t<img src=\"";
        // line 801
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/wyeth-nutrition.png\" alt=\"\">
\t  <div class=\"nav-social\">
\t    <a href=\"#\" class=\"btn btn-facebook\"><i class=\"fa-facebook\" aria-hidden=\"true\"></i><span class=\"sr-only\">Facebook</span></a>
\t    <a href=\"#\" class=\"btn btn-twitter\"><i class=\"fa-twitter\" aria-hidden=\"true\"></i><span class=\"sr-only\">Twitter</span></a>
\t    <a href=\"#\" class=\"btn btn-instagram\"><i class=\"fa-instagram\" aria-hidden=\"true\"></i><span class=\"sr-only\">Instagram</span></a>
\t    <a href=\"#\" class=\"btn btn-youtube\"><i class=\"fa-youtube\" aria-hidden=\"true\"></i><span class=\"sr-only\">Youtube</span></a>
\t  </div>\t\t
\t</div>
</footer>

<div id=\"hubungi\">
\t<a id=\"hubungi-btn\">Hubungi Kami</a>
\t<div id=\"hubungi-txt\">
\t\t<a href=\"#\"><img src=\"";
        // line 814
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/hubungi-kami.png\" alt=\"Hubungi Kami\"></a>
\t\t<span class=\"sr-only\">Hubungi Kami. Layanan Bebas Pulsa Senin sampai Sabtu (08.00-17.00) 0800 1821 526.</span>
\t</div>
</div>

<a href=\"#\" class=\"cd-top\"><i class=\"fa fa-fw fa-chevron-up\" aria-hidden=\"true\"></i><span class=\"sr-only\">Go to Top</span></a>";
    }

    public function getTemplateName()
    {
        return "themes/wyeth_milestone/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  966 => 814,  950 => 801,  906 => 760,  892 => 749,  878 => 738,  864 => 727,  850 => 716,  786 => 655,  716 => 588,  698 => 573,  680 => 558,  654 => 535,  650 => 534,  607 => 494,  589 => 479,  571 => 464,  545 => 441,  541 => 440,  498 => 400,  480 => 385,  462 => 370,  436 => 347,  432 => 346,  389 => 306,  371 => 291,  353 => 276,  327 => 253,  323 => 252,  284 => 216,  280 => 215,  265 => 203,  261 => 202,  246 => 190,  242 => 189,  70 => 20,  57 => 10,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/wyeth_milestone/templates/page.html.twig", "F:\\instaled_apps\\xampp-7-2-10\\htdocs\\drupal-869\\themes\\wyeth_milestone\\templates\\page.html.twig");
    }
}
