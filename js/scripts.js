$(document).ready(function() {
  $('a[data-toggle=tooltip]').tooltip();
  // white on black version
  isWB = 0;
  $('#wb').bind('click',function(e) {
    return toggleWB();
  })
})
function toggleWB() {
  if ( !isWB ) {
    $('body, div, p, a, h1, h2, h3, h4, h5, h6, strong, em, label').css('background','black').css('color','white');
    $('#logo').attr('src','img/logo-cap-autolinee-wb.png');
    isWB = 1;
    return false;
  } else {
    isWB = 0;
    return true;
  }
}