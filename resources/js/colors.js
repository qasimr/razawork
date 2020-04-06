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
