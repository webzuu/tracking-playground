;(function($){

  $(function() {

    var links = $('[data-track-js]');

    links.each(function(i, e) {
      $(e).on('click', function(evt) {
        var ga = window.ga;
        evt.preventDefault();
        var href = $(evt.currentTarget).attr('href');
        history.pushState(null, null, href);
        ga('set', 'page', href);
        ga('set', 'nonInteraction', true);
        ga('send', 'pageview');
      });
    });

  });

})(jQuery);