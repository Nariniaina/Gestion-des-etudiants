window.onload = image_animation;
var image_actuelle = 0;
var tab_image = ['ESTI.png'];

function image_animation(){
  if(image_actuelle == tab_image.length){
    image_actuelle = 0;
  }
  //document.getElementById('image').src = tab_image[image_actuelle++];
  $('#image').fadeOut().attr('src', tab_image[image_actuelle++]).fadeIn();
  window.setTimeout('image_animation()', 5000);
}
