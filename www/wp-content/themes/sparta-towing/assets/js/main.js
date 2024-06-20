$(document).ready(function () {
  
  /* smooth scroll*/
  var winWidth = $(window).width()
  $(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash)
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
      if (target.length) {
        if (winWidth > 991) {
          $('html, body').animate(
            {
              scrollTop: target.offset().top - 50,
            },
            1000
          )
        } else {
          $('html, body').animate(
            {
              scrollTop: target.offset().top,
            },
            1000
          )
        }
        return false
      }
    }
  })

  //sticky-footer
  function stickyFooter() {
    let stickyFooter = $('.sticky-footer')
    let stickyFooterHeight = stickyFooter.innerHeight()
    let siteFooter = $('.site-footer')
    siteFooter.css('margin-bottom', stickyFooterHeight)
  }
  stickyFooter()

  let debounceTimeout
  $(window).on('resize', function () {
    clearTimeout(debounceTimeout)
    debounceTimeout = setTimeout(function () {
      stickyFooter()
    }, 250)
  })

  /* Update padding top by calculating header height */
  function updatePaddingTop() {
    var headerHeight = $('.site-header').innerHeight();
    $('.headerSpace').css('padding-top', headerHeight + 'px');
  }

  // Initial call to set Padding top
  $(document).ready(updatePaddingTop);

  // Call on window resize
  $(window).resize(updatePaddingTop);
  /* End of the code block  */
})
