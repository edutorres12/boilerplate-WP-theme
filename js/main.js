var $ = jQuery,
    currentNamespace;

(function() {
    global_wrapper = document.querySelector(".global__wrapper");
    currentNamespace = global_wrapper.getAttribute('data-namespace');
    //console.log(currentNamespace);
})();

//Document load
window.addEventListener('load', function() {
    if (currentNamespace == "home") {
        homeFunctions();
    }
})

window.addEventListener('resize', function(event) {

}, true);

window.addEventListener('scroll', function() {

});

document.addEventListener('DOMContentLoaded', function() {
    //splide slider
    //var splidelements = document.getElementsByClassName('.splide');
    /*   if (splidelements.length > 0) {
          //elements with class "splide" exist
          if ($(".splide").length) {
              new Splide('.splide').mount();
          }
      } */


    //lightbox
    // refreshFsLightbox();


    //sticky
    /*var stickyEl = new Sticksy('.js-sticky-widget', { topSpacing: 70 });
    
    stickyEl.onStateChanged = function(state) {
        if (state === 'fixed') {
            stickyEl.nodeRef.classList.add('widget--sticky')
        } else {
            stickyEl.nodeRef.classList.remove('widget--sticky')
        }
    }*/


    //animations Examples//
    //gsap.from("#title-example", { duration: 1, x: 100 });

})
function homeFunctions() {
    homeIntro();
}

function homeIntro() {
    //console.log("home")
}