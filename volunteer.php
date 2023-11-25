 <!DOCTYPE html>
 <html lang="zxx" class="no-js">

 <!-- Mirrored from preview.colorlib.com/theme/animalshelter/volunteer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 21:45:49 GMT -->

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
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
           <a href="index-2.php"><img src="img/ACOPASB (7).png" alt="" title="" /></a>
         </div>

         <nav id="nav-menu-container">
           <nav id="nav-menu-container">
             <ul class="nav-menu">
               <li class="menu-active"><a href="index-2.php">Home</a></li>
               <li><a href="about.php">Sobre nós</a></li>
               <li><a href="cats.php">Gatos</a></li>
               <li><a href="dogs.php">Cachorros</a></li>
               <li><a href="volunteer.php">Seja Voluntário</a></li>

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
             Seja voluntário
           </h1>
           <p class="text-white link-nav"><a href="index-2.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="volunteer.html"> Seja Voluntário</a></p>
         </div>
       </div>
     </div>
   </section>


   <section class="Volunteer-form-area section-gap">
     <div class="container">
       <div class="row d-flex justify-content-center">
         <div class="menu-content pb-60 col-lg-9">
           <div class="title text-center">
             <h1 class="mb-20">QUER NOS AJUDAR? SEJA VOLUNTÁRIO!</h1>
             <p>O voluntariado em abrigo de animais é como oferecer um abraço afetuoso para essas criaturas carentes. É dedicar tempo com carinho, levando esperança e cuidados calorosos a cada patinha que toca nosso coração. Com gestos amorosos, criamos um lar temporário onde os peludos se sentem amados, proporcionando-lhes um ambiente acolhedor e cheio de alegria.</p>
           </div>
         </div>
       </div>
       <div class="row justify-content-center">
         <form class="col-lg-9" method="POST" action="scripts/cad_voluntario.php">
           <div class="form-group row">
             <div class="col">
               <label for="first-name"> Primeiro nome </label>
               <input type="text" required name="nome" class="form-control" placeholder="Primeiro nome">
             </div>
             <div class="col">
               <label for="last-name"> Sobrenome</label>
               <input type="text" required name="sobrenome" class="form-control" placeholder="Sobrenome">
             </div>

           </div>

           <div class="form-group">
             <label for="Address">Endereço</label>
             <input type="text" required name="endereco" class="form-control mb-20" placeholder="Seu endereço">
           </div>
           <div class="form-row">

             <div class="col-6 mb-30">
               <label for="email">Email</label>
               <input type="email" name="email" required class="form-control" placeholder="Email ">
             </div>
             <div class="col-6 mb-30">
               <label for="phone">Telefone</label>
               <input type="phone" name="telefone" required class="form-control" placeholder="Número">
             </div>
           </div>
           <fieldset class="form-group">
             <label for="day">Quantos dias da semana você pode voluntariar?</label>
             <div class="form-group ">
               <div class="form-check form-check-inline">
                 <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="seg" value="Seg"> Segunda
                 </label>
               </div>
               <div class="form-check form-check-inline">
                 <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="ter" value="Ter"> Terça
                 </label>
               </div>
               <div class="form-check form-check-inline">
                 <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="qua" value="Qua"> Quarta
                 </label>
               </div>
               <div class="form-check form-check-inline">
                 <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="qui" value="Qui"> Quinta
                 </label>
               </div>
               <div class="form-check form-check-inline">
                 <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="sex" value="Sex"> Sexta
                 </label>
               </div>
               <div class="form-check form-check-inline">
                 <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="sab" value="Sáb"> Sábado
                 </label>
               </div>
               <div class="form-check form-check-inline">
                 <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="dom" value="Dom"> Domingo
                 </label>
               </div>

             </div>
           </fieldset>
           <div class="form-group">
             <label for="note">Comentários<em style="color:  rgb(194, 194, 194);">*opcional</em></label>
             <textarea class="form-control" id="exampleTextarea" rows="5" name="comentario" placeholder="Escreva a mensagem"></textarea>
           </div>
           <button type="submit" class="primary-btn float-right">Enviar</button>
         </form>
       </div>
     </div>
   </section>



   <section class="calltoaction-area section-gap relative">
     <div class="container">
       <div class="overlay overlay-bg"></div>
       <div class="row align-items-center justify-content-center">
         <h1 class="text-white">Alguma dúvida? Visite nossas instalações</h1>


         <div class="buttons d-flex flex-row">
           <a href="#" class="primary-btn text-uppercase">Google Maps</a>
           <a href="#" class="primary-btn text-uppercase">Contato</a>
         </div>
       </div>
     </div>
   </section>


   <footer class="footer-area">
     <div class="container">
       <div class="row pt-120 pb-80">
         <div class="col-lg-4 col-md-6">
           <div class="single-footer-widget">
             <h6>Sobre nós</h6>
             <p>
               Em 2004, após receber uma denúncia sobre o excesso de cachorros em uma residência, o
               Ministério Público tomou medidas para solucionar a situação. A prefeitura interveio e
               retirou 30 animais da casa da cuidadora, que, juntamente com um grupo de amigas,
               dedicava-se ao recolhimento e abrigo de animais abandonados.

             </p>
           </div>
         </div>
         <div class="col-lg-4 col-md-6">
           <div class="single-footer-widget">
             <h6>Link Rápido</h6>
             <div class="row">
               <ul class="col footer-nav">
                 <li><a href="#">Home</a></li>
                 <li><a href="#">Sobre nos</a></li>
                 <li><a href="#">Gatos</a></li>
                 <li><a href="#">Cachorros</a></li>
               </ul>

               <ul class="col footer-nav">
                 <li><a href="#">Seja voluntário</a></li>
                 <li><a href="#">Blog</a></li>
                 <li><a href="#">Contato</a></li>
                 <li><a href="#">Login</a></li>

               </ul>
             </div>
           </div>
         </div>
         <div class="col-lg-4  col-md-6">
           <div class="single-footer-widget mail-chimp">
             <h6 class="mb-20">Contato</h6>
             <ul class="list-contact">
               <li class="flex-row d-flex">
                 <div class="icon">
                   <span class="lnr lnr-home"></span>
                 </div>
                 <div class="detail">
                   <h4>São Borja, RS - Brasil</h4>
                   <p>
                     R. Eng. Manuel Luís Fagundes, 3970 - Centro, São Borja - RS, 97670-000
                   </p>
                 </div>
               </li>
               <li class="flex-row d-flex">
                 <div class="icon">
                   <span class="lnr lnr-phone-handset"></span>
                 </div>
                 <div class="detail">
                   <h4>(55) 99983-8004</h4>
                   <p>
                     Seg à dom - 08:00 - 18:00
                   </p>
                 </div>
               </li>

             </ul>
           </div>
         </div>
       </div>
     </div>

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
   <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2cb3a2ab87c5498db5ce7e6608cf55231689030342039" integrity="sha512-DI3rPuZDcpH/mSGyN22erN5QFnhl760f50/te7FTIYxodEF8jJnSFnfnmG/c+osmIQemvUrnBtxnMpNdzvx1/g==" data-cf-beacon='{"rayId":"7ec7970c1c4201d6","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
 </body>
 <?php if (!isset($_GET['l'])) {
} else if ($_GET['l'] == md5(1)) {

?>
    <script>
        Swal.fire({
            title: "Sucesso!",
            text: "Muito obrigado por se voluntariar, sua ajuda é de grande importancia para nós!",
            icon: "success",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "volunteer.php";

        });
    </script>
<?php } ?>

 </html>