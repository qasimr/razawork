<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset("css/app.css") }}" rel="stylesheet">

        <title>Rechtliches | RAZA.work</title>

    </head>
    <body id="body">
      <!-- <nav class="sticky"><h1><span style="color: red;font-family: 'Bebas Neue'; font-weight: 200;">Hello World! </span><span id="name" class="show">My Name is Qasim Raza.<br></span><span id="job">I´m a Designer based in Frankfurt.</span></h1></nav> -->
      <!-- <nav class="home-title">
        <div class="align-center">
          <a tabindex="0" href="#"><img class="logo" id="logo" src="storage/logo_raza-work_qasim.png" alt="Qasim Raza Emblem"></a>
          <a tabindex="0" href="#"><img class="logo" id="logo" src="storage/logo_raza-work_raza.png" alt="Qasim Raza Emblem"></a>
        </div>

        <ul class="right">
          <!-- <li><a class="links" href="#contact">Kontakt</a></li>
          <li><a class="links" href="#arbeit">Arbeiten</a></li> -->
          <!-- <li><a class="links" href="/">Startseite</a></li>
        </ul>
      </nav> -->

      <!-- <section>
      <h1 id="first-h1">hallo welt ich bin qasim</h1>
      </section>

      <section>
      <h1 id="second-h1">ich arbeite mit</h1>
      </section>

      <section>
      <h1 id="third-h1">kunden</h1>
      </section>

      <section>
      <h1 id="fourth-h1">ende</h1>
      </section> -->



      <script>const colors = ['', 'white', 'black']

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
