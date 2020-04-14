<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{ asset("css/app.css") }}" rel="stylesheet">
      <meta name="p:domain_verify" content="e18b1223482abed90d61adf8afd2ad92"/>
      <meta name="description" content="A shorted list of the customers of a designer based in Frankfurt, Germany">
      <meta name="keywords" content="design, fashion, marketing, seo, frankfurt, it, website, logo, club, restaurant, coaching, consulting, frankfurt, capture the moment">
      <meta name="author" content="Qasim Raza">
      <!-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#000000">
      <meta name="theme-color" content="#ffffff"> -->
      <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/54325084a948ebe17a82f65b2/a4808e7cdb922b5f1aa18ec37.js");</script>

      <title>RAZA.work</title>

    </head>

    <body id="body">

      <nav>

        <div class="align-center">
          <a tabindex="0" href="#"><img class="logo bgwhite" id="logo" src="storage/logo_raza-work_qasim.svg" alt="Qasim Raza Emblem"></a>
          <a tabindex="0" href="#"><img class="logo" src="storage/logo_raza-work_raza.svg" alt="Qasim Raza Emblem"></a>
        </div>

        <ul class="right">
          <li><a class="pditalic" href="#kontakt">Kontakt</a></li>
        </ul>

      </nav>

      <section id="header" class="header flex-center-left">

  	     <p class="focus-in-expand">HALLO WELT ICH BIN <span class="underline--magical">QASIM RAZA<span></p>
           <p>Hier gibt es schon bald eine Auswahl meiner Arbeiten zu sehen, bis dahin musst du dich aber noch gedulden</p>

      </section>


      <section id="mms" class="main mms">
      <hr>
      <a href="#mms">MMS.today<span class="pditalic">(Design/IT/Logo/Marketing)</span></a>


      </section>

      <section id="grandcoup" class="main grandcoup">
<hr>
        <a href="#grandcoup">GRANDCOUP<span class="pditalic">(Design/IT/Marketing)</span></a>

      </section>

      <section id="bluelotus" class="main bluelotus">
<hr>
        <a href="#bluelotus">BlueLotus.AI GMBH<span class="pditalic">(Logo)</span></a>

      </section>

      <section id="germade" class="main germade">
<hr>
        <a href="#germade">GER-made GMBH<span class="pditalic">(Design/IT/Logo)</span></a>

      </section>

      <section id="sonan" class="main sonan">
<hr>
        <a href="#sonan">SONAN.productions<span class="pditalic">(Design/IT)</span></a>

      </section>

      <section id="avesta" class="main avesta">
<hr>
        <a href="#avesta">AVESTA FEROSI<span class="pditalic">(Design/IT)</span></a>

      </section>


            <section id="romotech" class="main romotech">
      <hr>
              <a href="#romotech">ROMOTECH GMBH<span class="pditalic">(Design/IT)</span></a>


            </section>

      <section id="winterengel" class="main winterengel">
<hr>
        <a href="#winterengel">Winterengel<span class="pditalic">(Design)</span></a>

      </section>

      <section id="curryclub" class="main cc">
<hr>
        <a href="#curryclub">CURRY CLUB GMBH<span class="pditalic">(Marketing)</span></a>

      </section>



      <section id="kontakt" class="footer">
        <div class="flex-end">
          <div>
            <a href="https://www.instagram.com/justqasim" target="_blank" rel="noreferrer">Instagram</a>
            <a href="https://www.pinterest.de/qasimgroup/" target="_blank" rel="noreferrer">Pinterest</a>
          </div>

          <h2 tabindex="0"><a class="pditalic" href="mailto:halloqasim@raza.work?subject=Hallo Qasim, ich bin (Ihr Name)">halloqasim@raza.work</a></h2>

          <div>
            <a href="/datenschutz" target="_blank" rel="noreferrer">Datenschutzerklärung</a>
            <a href="/impressum" target="_blank" rel="noreferrer">Impressum</a>
          </div>
          <h6 tabindex="0"><a class="pditalic" href="#body">Zurück nach oben</a><h6>
          </div>
      </section>


        <!-- <script>
          var doc, bod, htm;
          addEventListener('load', function(){
            doc = document; bod = doc.body; htm = doc.documentElement;
            addEventListener('scroll', function(){
              doc.getElementById("qasim").style.display = htm.scrollTop > 200 ? 'none' : 'block';
              doc.getElementById("raza").style.display = htm.scrollTop > 200 ? 'block' : 'none';
            });
          });
        </script> -->

        <script>
              var leftgear = document.getElementById("logo");
              var rightgear = document.getElementById("bglogo");

                window.addEventListener("scroll", function() {
                    leftgear.style.transform = "rotate("+0.2*window.pageYOffset+"deg)";
                });
              ;(function() {
                var throttle = function(type, name, obj) {
                    var obj = obj || window;
                    var running = false;
                    var func = function() {
                        if (running) { return; }
                        running = true;
                        requestAnimationFrame(function() {
                            obj.dispatchEvent(new CustomEvent(name));
                            running = false;
                        });
                    };
                    obj.addEventListener(type, func);
                };
                throttle ("scroll", "optimizedScroll");
            })();
        </script>

        <!-- <script>
          const colors = ['', 'white', 'grandcoup', 'romotech', 'bluelotus', 'germade', 'sonan', 'avesta', 'mms', 'winterengel', 'cc', 'black']

          const sections = [...document.getElementsByTagName('section')]

          window.addEventListener('scroll', function () {

            const scrollFromTop = window.pageYOffset

            for (let i = 0; sections.length > i; i++) {

              if (scrollFromTop <= sections[i].offsetTop) {
                document.body.className = colors[i]
                break
              }

            }

          })
        </script> -->
        <script>

        </script>

        <script>
          // VARIABLES
            const magicalUnderlines = Array.from(document.querySelectorAll('.underline--magical'));

            const gradientAPI = 'https://gist.githubusercontent.com/wking-io/3e116c0e5675c8bcad8b5a6dc6ca5344/raw/4e783ce3ad0bcd98811c6531e40256b8feeb8fc8/gradient.json';

            // HELPER FUNCTIONS

            // 1. Get random number in range. Used to get random index from array.
            const randNumInRange = max => Math.floor(Math.random() * (max - 1));

            // 2. Merge two separate array values at the same index to
            // be the same value in new array.
            const mergeArrays = (arrOne, arrTwo) => arrOne
              .map((item, i) => `${item} ${arrTwo[i]}`)
              .join(', ');

            // 3. Curried function to add a background to array of elms
            const addBackground = (elms) => (color) => {
              elms.forEach(el => {
                el.style.backgroundImage = color;
              });
            }
            // 4. Function to get data from API
            const getData = async(url) => {
              const response = await fetch(url);
              const data = await response.json();
              return data.data;
            }

            // 5. Partial Application of addBackground to always apply
            // background to the magicalUnderlines constant
            const addBackgroundToUnderlines = addBackground(magicalUnderlines);

            // GRADIENT FUNCTIONS

            // 1. Build CSS formatted linear-gradient from API data
            const buildGradient = (obj) => `linear-gradient(${obj.direction}, ${mergeArrays(obj.colors, obj.positions)})`;

            // 2. Get single gradient from data pulled in array and
            // apply single gradient to a callback function
            const applyGradient = async(url, callback) => {
              const data = await getData(url);
              const gradient = buildGradient(data[randNumInRange(data.length)]);
              callback(gradient);
            }

            // RESULT
            applyGradient(gradientAPI, addBackgroundToUnderlines);
        </script>


    </body>
</html>
