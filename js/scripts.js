$(document).ready(function() {
  $('a[data-toggle=tooltip]').tooltip();
  // white on black version
  isWB = 0;
  $('#wb').bind('click',function(e) {
    return toggleWB();
  })
  // pager
  $('ul.pagination').on('click', function(e) {
    // $(e.target).find('.active').removeClass('active')
    $(e.target).parent().siblings().removeClass("active");
    $(e.target).parent().addClass("active");
  })
})
function toggleWB() {
  if ( !isWB ) {
    $('body, div, p, a, h1, h2, h3, h4, h5, h6, strong, em, label, .fa').css('background','black').css('color','white');
    $('#logo').attr('src','img/logo-cap-autolinee-wb.png');
    isWB = 1;
    return false;
  } else {
    isWB = 0;
    return true;
  }
}