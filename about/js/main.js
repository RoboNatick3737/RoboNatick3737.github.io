// select video element
var vid = document.getElementById('v0');
//var vid = $('#v0')[0]; // jquery option

// pause video on load
vid.pause();

// alternative & optimized implementation  thanks to http://codepen.io/daveroma/
window.onscroll = function() {
  vid.currentTime = window.pageYOffset / 100;
};

/*
Original (old) solution
=======================


// pause video on document scroll (stops autoplay once scroll started)
window.onscroll = function(){
    vid.pause();
  vid.currentTime = window.pageYOffset/400;
};

// refresh video frames on interval for smoother playback
setInterval(function(){
    vid.currentTime = window.pageYOffset/400;
}, 40);

*/