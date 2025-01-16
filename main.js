console.log('Hello from main.js');


var $ = jQuery.noConflict();

$('.carousel').flickity({
    // options
    cellAlign: 'center',
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    

  });
