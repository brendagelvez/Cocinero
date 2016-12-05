(function() {
  jQuery(function() {
    $('.input-txt').on('focus', function() {
      var $container, $this, nPosition;
      $container = $('.container');
      $this = $(this);
      nPosition = $this.data('pos');
      return $container.attr('data-position', nPosition);
    });
    $('.input-txt').bind('invalid', function() {
      return $('.container').addClass('error');
    });
    return $('.input-txt').bind('blur', function() {
      return $('.container').removeClass('error');
    });
  });

}).call(this);