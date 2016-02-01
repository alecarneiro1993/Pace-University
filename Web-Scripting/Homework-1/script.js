function homeImages() {
  var urls = [];
  urls[0] = "http://www.revealittech.com/img/large_html.jpg";
  urls[1] = "http://tableless.com.br/wp-content/uploads/2014/03/20120709-164125-Javascript.png";
  urls[2] = "https://camo.githubusercontent.com/02ed3f6695f288aedec24c2a329c667281efef5f/687474703a2f2f707265636973696f6e2d736f6674776172652e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031342f30342f6a5175726572792e676966";
  urls[3] = "https://webmentor.org/blog_images/php-logo.png";
  var div = document.getElementById("images");
  for(var i=0; i<=3; i++) {
    var img = new Image();
     img.src= urls[i];
     div.appendChild(img);

  }
}

function aboutImages() {
  var urls = [];
  urls[0] = "https://images.booking-channel.com/synergy/HTL00213/images_public/HTL00213/rio/1500/riooo.jpg";
  urls[1] = "http://static1.gamespot.com/uploads/original/1535/15354745/2819663-8418826320-28191.jpg";
  urls[2] = "http://www.electricguitarplanet.com/wp-content/uploads/2008/04/epiphone_les_paul_standard_plus.jpg";
  urls[3] = "http://moviewallpaperpics.com/wp-content/uploads/2015/04/The-Lord-of-the-Rings-22.jpg";
  var div = document.getElementById("images");
  for(var i=0; i<=3; i++) {
    var img = new Image();
     img.src= urls[i];
     div.appendChild(img);

  }
}

function photoImages() {
  var urls = [];
  var div = document.getElementById("images");
  console.log(div);
  for(var i=0; i<=14; i++) {
    var img = new Image();
     urls[i] = "images/" + i + ".jpg";
     console.log(urls[1]);
     img.src= urls[i];
     div.appendChild(img);

  }
}
