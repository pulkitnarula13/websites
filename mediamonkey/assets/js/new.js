$(document).ready(function(){
    if(window.innerWidth < 900){
      $('#home-options').removeClass('row');  
      $('#after-txt').removeClass('roline-index-taglinew');
    }

    else if(window.innerWidth < 600){
        $('#home-options').removeClass('row');
        $('#after-txt').removeClass('roline-index-taglinew');
      }

    else {
        $('#home-options').addClass('row');
        $('#after-txt').addClass('roline-index-taglinew');
      }
  });

function showReMarketing()
{
    document.getElementById("rs-marketing").style.display = "block";
    document.getElementById("rs-production").style.display = "none";
    document.getElementById("rs-branding").style.display = "none";
    document.getElementById("re-market").classList.add("btactive");
    document.getElementById("re-production").classList.remove("btactive");
    document.getElementById("re-branding").classList.remove("btactive");
}

function showReProduction()
{
    document.getElementById("rs-marketing").style.display = "none";
    document.getElementById("rs-production").style.display = "block";
    document.getElementById("rs-branding").style.display = "none";
    document.getElementById("re-market").classList.remove("btactive");
    document.getElementById("re-production").classList.add("btactive");
    document.getElementById("re-branding").classList.remove("btactive");
}

function showReBranding()
{
    document.getElementById("rs-marketing").style.display = "none";
    document.getElementById("rs-production").style.display = "none";
    document.getElementById("rs-branding").style.display = "block";
    document.getElementById("re-market").classList.remove("btactive");
    document.getElementById("re-production").classList.remove("btactive");
    document.getElementById("re-branding").classList.add("btactive");
}


// Smooth scrolling

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });