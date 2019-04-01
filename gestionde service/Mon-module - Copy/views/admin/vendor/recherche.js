(function ($) {
  $('#ss').keyup(function (event) {
      var input =$(this);
      var val =input.val();
      var regexp ='\\b(.*)a(.*)\\b';
      $('#sr').find('td').each(function () {
          var span= $(this);
          console.log(span);

      })

  })
})(jQuery)