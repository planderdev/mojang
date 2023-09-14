$(window).on("scroll", function() {
  if($(window).scrollTop() > 50) {
      $(".sticky-header").addClass("active");
  } else {
      //remove the background property so it comes transparent again (defined in your css)
     $(".sticky-header").removeClass("active");
  }
});
 


// Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href="#'+url.split('#')[1]+'"]').tab('show') ;
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})

     
const useLazyLoading = () => {
    const imgs = document.querySelectorAll('.lazy');
  
    const observerCallback = (entries, observer) => {
      entries.forEach(({ isIntersecting, intersectionRatio, target }) => {
        if (isIntersecting && intersectionRatio > 0) {
          target.src = target.dataset.src;
          target.classList.remove("lazy");
          observer.unobserve(target);
        }
      });
    };
  
    const io = new IntersectionObserver(observerCallback);
    imgs.forEach((img) => io.observe(img));
  };
  
  useLazyLoading();