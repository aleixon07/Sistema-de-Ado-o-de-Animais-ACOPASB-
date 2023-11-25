<?php

session_start();
include_once "scripts/connection.php";

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<!-- Mirrored from preview.colorlib.com/theme/animalshelter/dogs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 21:45:49 GMT -->

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="img/fav.html">

  <meta name="author" content="codepixer">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta charset="UTF-8">

  <title>Acopasb</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/pesquisa.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <script nonce="678df924-3730-4894-b35a-376a0d130419">
    (function(w, d) {
      ! function(j, k, l, m) {
        j[l] = j[l] || {};
        j[l].executed = [];
        j.zaraz = {
          deferred: [],
          listeners: []
        };
        j.zaraz.q = [];
        j.zaraz._f = function(n) {
          return function() {
            var o = Array.prototype.slice.call(arguments);
            j.zaraz.q.push({
              m: n,
              a: o
            })
          }
        };
        for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
        j.zaraz.init = () => {
          var q = k.getElementsByTagName(m)[0],
            r = k.createElement(m),
            s = k.getElementsByTagName("title")[0];
          s && (j[l].t = k.getElementsByTagName("title")[0].text);
          j[l].x = Math.random();
          j[l].w = j.screen.width;
          j[l].h = j.screen.height;
          j[l].j = j.innerHeight;
          j[l].e = j.innerWidth;
          j[l].l = j.location.href;
          j[l].r = k.referrer;
          j[l].k = j.screen.colorDepth;
          j[l].n = k.characterSet;
          j[l].o = (new Date).getTimezoneOffset();
          if (j.dataLayer)
            for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                ...x[1],
                ...y[1]
              })), {}))) zaraz.set(w[0], w[1], {
              scope: "page"
            });
          j[l].q = [];
          for (; j.zaraz.q.length;) {
            const z = j.zaraz.q.shift();
            j[l].q.push(z)
          }
          r.defer = !0;
          for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
            try {
              j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
            } catch {
              j[l]["z_" + B.slice(7)] = A.getItem(B)
            }
          }));
          r.referrerPolicy = "origin";
          r.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
          q.parentNode.insertBefore(r, q)
        };
        ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, "zarazData", "script");
    })(window, document);
  </script>
</head>

<body>
  <header id="header" id="home">
    <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index-2.html"><img src="img/ACOPASB (7).png" alt="" title="" /></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="index-2.php">Home</a></li>
            <li><a href="about.php">Sobre nós</a></li>
            <li><a href="cats.php">Gatos</a></li>
            <li><a href="dogs.php">Cachorros</a></li>
            <li><a href="volunteer.php">Seja Voluntário</a></li>
            <li class="menu-has-children"><a href="#">Blog</a>
              <ul>
                <li><a href="blog-home.html">Doe</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li class="menu-has-children"><a href="#">Dropdown</a>
              <ul>
                <li><a href="elements.html">Elements</a></li>
                <li><a href="#">Item</a></li>
                <li class="menu-has-children"><a href="#">Level 2</a>
                  <ul>
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">
            Cachorros
          </h1>
          <p class="text-white link-nav"><a href="index-2.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="dogs.html"> Cachorros</a></p>
        </div>
      </div>
    </div>
  </section>


  <section class="cat-list-area section-gap">
    <div class="container">
      <div class="row">
        <?php
        $sql_busca = "SELECT * FROM animal WHERE tipo = 'cachorro' ORDER BY idanimal DESC ";
        $resultado_busca = mysqli_query($conn, $sql_busca);

        if (mysqli_num_rows($resultado_busca) > 0) {
          while ($linha = mysqli_fetch_assoc($resultado_busca)) { ?>

            <div class="col-lg-3 col-md-6" style="margin-bottom: 30px;">
              <div class="single-cat-list">
                <img src="img/animais/<?php echo $linha['foto']; ?>" style="height: 340px;" alt="" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php echo $linha['nome']; ?></div>
                </div>
              </div>
              <div class="text-center">
                <a href="form_adocao.php?pet=<?php echo $linha['idanimal']; ?>" style="text-decoration: none; border-radius: 20px; border: 1px solid #343a40; opacity: 0.5; padding: 0.5rem; color: #fff; background-color: #007bff; ">Adote-me</a>
              </div>
            </div>
            

        <?php
          }
        }
        ?>

      </div>
    </div>
  </section>


  <section class="calltoaction-area section-gap relative">
    <div class="container">
      <div class="overlay overlay-bg"></div>
      <div class="row align-items-center justify-content-center">
        <h1 class="text-white">Want to help? Become a Volunteer</h1>
        <p class="text-white">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
        </p>
        <div class="buttons d-flex flex-row">
          <a href="#" class="primary-btn text-uppercase">View pdf details</a>
          <a href="#" class="primary-btn text-uppercase">Register now</a>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer-area">
    <div class="container">
      <div class="row pt-120 pb-80">
        <div class="col-lg-4 col-md-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Few would argue that, despite the advanc ements off eminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-footer-widget">
            <h6>Useful Links</h6>
            <div class="row">
              <ul class="col footer-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Case Study</a></li>
              </ul>
              <ul class="col footer-nav">
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4  col-md-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Contact Us</h6>
            <ul class="list-contact">
              <li class="flex-row d-flex">
                <div class="icon">
                  <span class="lnr lnr-home"></span>
                </div>
                <div class="detail">
                  <h4>Binghamton, New York</h4>
                  <p>
                    4343 Hinkle Deegan Lake Road
                  </p>
                </div>
              </li>
              <li class="flex-row d-flex">
                <div class="icon">
                  <span class="lnr lnr-phone-handset"></span>
                </div>
                <div class="detail">
                  <h4>00 (953) 9865 562</h4>
                  <p>
                    Mon to Fri 9am to 6 pm
                  </p>
                </div>
              </li>
              <li class="flex-row d-flex">
                <div class="icon">
                  <span class="lnr lnr-envelope"></span>
                </div>
                <div class="detail">
                  <h4><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="66151316160914122605090a09140a0f044805090b">[email&#160;protected]</a></h4>
                  <p>
                    Send us your query anytime!
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-text">
      <div class="container">
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-6 footer-text m-0 text-white">
            Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
          </p>
          <div class="col-lg-4 col-sm-6 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2cb3a2ab87c5498db5ce7e6608cf55231689030342039" integrity="sha512-DI3rPuZDcpH/mSGyN22erN5QFnhl760f50/te7FTIYxodEF8jJnSFnfnmG/c+osmIQemvUrnBtxnMpNdzvx1/g==" data-cf-beacon='{"rayId":"7ec797187bb001d6","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/animalshelter/dogs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 21:45:49 GMT -->

</html>