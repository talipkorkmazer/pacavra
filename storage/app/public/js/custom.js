/*********************************************

 jQuery extended placeholder plugin.
 Text, password, and textarea fields supported.
 Version: 0.9.2
 Author: Sergey Estrin
 Site: http://g-rain-design.ru/en/jquery/placeholder/
 Released under the MIT License.

 *********************************************/

(function($) {
  $('.fa-download').click(function(e) {
    download(e.target.dataset.download)
  })

  function download(url) {
    const a = document.createElement('a')
    a.href = url
    a.download = url.split('/').pop()
    document.body.appendChild(a)
    a.click()
    document.body.removeChild(a)
  }

  $('.form-check-input').on('change', function() {
    if ($(this).is(':checked')) {
      $('.form-check-input').prop('checked', false);
      $(this).prop('checked', true);
      const id = $(this).val();
      window.location.href = `${window.location.pathname}?collection=${id}`;
    } else {
      window.location.href = `${window.location.pathname}`;
    }
  });
})(jQuery);