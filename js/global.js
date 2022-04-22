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


//navbar
var siteMenuClone = function() {
    Items = document.querySelector("#navbarMenu02 ul").cloneNode(true)
    console.log(Items)
    document.querySelector("#nav-mobile-menu ul").innerHTML = Items.innerHTML
};
siteMenuClone();





function toggleNav() {
    movilMenu = document.querySelector("#nav-mobile-menu")
    movilMenu.classList.toggle("close");
}

window.addEventListener('resize', function(event) {
    if (window.innerWidth > 767) {
        movilMenu = document.querySelector("#nav-mobile-menu")
        movilMenu.classList.add("close");
    }
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