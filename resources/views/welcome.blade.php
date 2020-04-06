<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{ asset("css/app.css") }}" rel="stylesheet">
      <title>RAZA.work</title>
    </head>

    <body id="body">

      <nav class="home-title">

        <div class="align-center">
          <a tabindex="0" href="#"><img class="logo" id="logo" src="storage/logo_raza-work_qasim.svg" alt="Qasim Raza Emblem"></a>
          <a tabindex="0" href="#"><img class="logo" id="logo" src="storage/logo_raza-work_raza.svg" alt="Qasim Raza Emblem"></a>
        </div>

        <ul class="right">
          <li><a class="links" href="/datenschutz" target="_blank">Datenschutzerklärung</a></li>
          <li><a class="links" href="/impressum" target="_blank">Impressum</a></li>
        </ul>

      </nav>

      <article>

      <section id="header" class="header">

        <div class="sticky">
          <h1 tabindex="0" class="hello home-title">Hallo Welt!</h1>
          <h2 tabindex="0" id="qasim" class="show">Ich bin Qasim Raza</h2>
          <h2 tabindex="0" id="raza" class="show1">Ich arbeite mit:</h2>
        </div>

      </section>


      <section></section>

      <section class="hello">

        <a href="https://bluelotus.ai" target="_blank"><span>BlueLotus.AI GMBH</span></a></br>
        <p><span>(Logo)</span></p>

      </section>

      <section class="hello">

        <a href="https://ger-made.de" target="_blank"><span>GER-made GMBH</span></a></br>
        <p><span>(Design/IT/Logo/SEO)</span></p>

      </section>

      <section class="hello">

        <a href="https://grandcoup.com" target="_blank"><span>GRANDCOUP</span></a></br>
        <p><span>(Design/IT/Marketing)</span></p>

      </section>

      <section class="hello">

        <a href="https://avestaferosi.de" target="_blank"><span>AVESTA FEROSI</span></a></br>
        <p><span>(Design/IT/SEO)</span></p>

      </section>

      <section class="hello">

        <a href="https://romotech.de" target="_blank"><span>ROMOTECH GMBH</span></a></br>
        <p><span>(Design/IT/SEO)</span></p>

      </section>

      <section class="hello">

        <a href="http://www.sonan.productions" target="_blank"><span>SONAN.productions</span></a></br>
        <p><span>(Design/IT/Marketing/SEO)</span></p>

      </section>

      <section class="hello">

        <a href="https://MMS.today" target="_blank"><span>MMS.today</span></a></br>
        <p><span>((Design/IT/Logo/Marketing/SEO)</span></p>

      </section>

      <section class="hello">

        <a href="https://www.instagram.com/curryclubfrankfurt/" target="_blank"><span>CURRY CLUB GMBH</span></a></br>
        <p><span>(Marketing/SEO)</span></p>

      </section>


      </article>

      <section id="contact" class="footer">

        <div class="bye">
          <a class="bye" id="insta" href="https://www.instagram.com/justqasim" target="_blank">Instagram</a>
          <a class="bye" id="pin" href="https://www.pinterest.de/qasimgroup/" target="_blank">Pinterest</a>
        </div>

        <h2 tabindex="0" class=" home-title"><a href="mailto:halloqasim@raza.work?subject=Hallo Qasim, ich bin (Ihr Name)">halloqasim@raza.work</a></h2>

        <div class="bye">
          <a class="bye" href="/datenschutz" target="_blank">Datenschutzerklärung</a>
          <a class="bye" href="/impressum" target="_blank">Impressum</a>
        </div>

      </section>


        <script>
          var doc, bod, htm;
          addEventListener('load', function(){
            doc = document; bod = doc.body; htm = doc.documentElement;
            addEventListener('scroll', function(){
              doc.getElementById("qasim").style.display = htm.scrollTop > 550 ? 'none' : 'block';
              doc.getElementById("raza").style.display = htm.scrollTop > 550 ? 'block' : 'none';
              // doc.getElementById("header").style.backgroundColor = htm.scrollTop > 550 ? 'black' : 'white';
              // doc.getElementById("footer").style.backgroundColor = htm.scrollTop > 600 ? 'black' : 'white';
            });
          });
        </script>


        <script>
              var leftgear = document.getElementById("logo");
              var rightgear = document.getElementById("bglogo");

                window.addEventListener("scroll", function() {
                    leftgear.style.transform = "rotate("+0.9*window.pageYOffset+"deg)";
                    rightgear.style.transform = "rotate("+0.03*window.pageYOffset+"deg)";
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

        <script>
          const colors = ['', 'white', 'bluelotus', 'germade', 'grandcoup', 'avesta', 'romotech', 'sonan', 'mms', 'cc', 'black']

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
        </script>
    </body>
</html>
