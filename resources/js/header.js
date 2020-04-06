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
