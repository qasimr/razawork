<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset("css/app.css") }}" rel="stylesheet">

        <title>RAZA.work</title>

    </head>

    <body id="body" class="sonan" style="padding: 20vw;">

      <nav class="home-title" style="background: white;">

        <div class="align-center">
          <a tabindex="0" href="#"><img class="logo" id="logo" src="storage/logo_raza-work_raza.png" alt="Qasim Raza Emblem"></a>
        </div>

        <ul class="right">
          <li><a class="links"  href="javascript:window.open('','_self').close();">Tab schließen</a></li>
          <li><a class="links" href="/datenschutz" class="links">Datenschutzerklärung</a></li>
          <li><a class="links" href="mailto:halloqasim@raza.work?subject=Hallo Qasim, ich bin (Ihr Name)">halloqasim@raza.work</a></li>
        </ul>

      </nav>

      <div>
        <img class="bglogo" id="bglogo" src="storage/logo_raza-work_qasim.png" alt="Qasim Raza Emblem">
      </div>


      <section class="article">

      <h4>Impressum</h4>

      <h4>Angaben gem&auml;&szlig; &sect; 5 TMG</h4>
      <p>Qasim Raza<br />
      Saalburgstra&szlig;e 44<br />
      60385 Frankfurt</p>

      <h4>Kontakt</h4>
      <p>Telefon: +49 (0) 160 9621 3776<br />
      E-Mail: halloqasim@raza.work</p>

      <h4>Umsatzsteuer-ID</h4>
      <p>Umsatzsteuer-Identifikationsnummer gem&auml;&szlig; &sect; 27 a Umsatzsteuergesetz:<br />
      DE327477003</p>

      <h4>EU-Streitschlichtung</h4>
      <p>Die Europ&auml;ische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener noreferrer">https://ec.europa.eu/consumers/odr</a>.<br /> Unsere E-Mail-Adresse finden Sie oben im Impressum.</p>

      <h4>Verbraucher&shy;streit&shy;beilegung/Universal&shy;schlichtungs&shy;stelle</h4><p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>

      <h4>Haftung f&uuml;r Inhalte</h4> <p>Als Diensteanbieter sind wir gem&auml;&szlig; &sect; 7 Abs.1 TMG f&uuml;r eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach &sect;&sect; 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, &uuml;bermittelte oder gespeicherte fremde Informationen zu &uuml;berwachen oder nach Umst&auml;nden zu forschen, die auf eine rechtswidrige T&auml;tigkeit hinweisen.</p> <p>Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unber&uuml;hrt. Eine diesbez&uuml;gliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung m&ouml;glich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p> <h4>Haftung f&uuml;r Links</h4> <p>Unser Angebot enth&auml;lt Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb k&ouml;nnen wir f&uuml;r diese fremden Inhalte auch keine Gew&auml;hr &uuml;bernehmen. F&uuml;r die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf m&ouml;gliche Rechtsverst&ouml;&szlig;e &uuml;berpr&uuml;ft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.</p> <p>Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p> <h4>Urheberrecht</h4> <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielf&auml;ltigung, Bearbeitung, Verbreitung und jede Art der Verwertung au&szlig;erhalb der Grenzen des Urheberrechtes bed&uuml;rfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur f&uuml;r den privaten, nicht kommerziellen Gebrauch gestattet.</p> <p>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>

      <p>Quelle: <a href="https://www.e-recht24.de/impressum-generator.html">https://www.e-recht24.de/impressum-generator.html</a></p>

      </section>


      <script>
            var rightgear = document.getElementById("bglogo");

              window.addEventListener("scroll", function() {
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

    </body>
    </html>
