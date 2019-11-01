var no_mobile_from = 840;
var add_scrolled_from = 50;
var nav_mob = document.querySelector(".nav--mobile");
var body = document.querySelector("body");
var nav = document.querySelector(".main-navigation");


if (nav) {
  var nav_btn = nav.querySelector(".nav--mobile-btn");
  var nav_links = nav.querySelectorAll("a");

  bindEvents();

  function bindEvents() {
    nav_links.forEach(link => {
      link.addEventListener("click", () => {
        closeMobileNav();
      });
    });
    if (nav_btn) {
      nav_btn.addEventListener("click", e => {
        toggleNav();
      });
    }

    window.addEventListener("scroll", () => {
      add_scrolled_class();
    });
    window.addEventListener("resize", () => {
      close_menu_if_wp_to_big();
    });
  }

  function toggleNav() {
    if (nav.classList.contains("nav--mobile-open")) {
      closeMobileNav();
    } else {
      openMobileNav();
    }
  }

  function openMobileNav() {
    body.classList.remove("body-scrolled");
    nav_btn.classList.add("nav--mobile-btn-open");
    nav.classList.add("nav--mobile-open");
    body.style.overflow = "hidden";
    stopBodyScrolling(true);
  }

  function closeMobileNav() {
    body.style.overflow = "scroll";
    stopBodyScrolling(false);
    add_scrolled_class();
    nav_btn.classList.remove("nav--mobile-btn-open");
    nav.classList.remove("nav--mobile-open");
   
  }

  function close_menu_if_wp_to_big() {
    var w =
      window.innerWidth ||
      document.documentElement.clientWidth ||
      document.body.clientWidth;

    if (w > no_mobile_from && nav.classList.contains("nav--mobile-open")) {
      closeMobileNav();
    }
  }

 
 
  function add_scrolled_class() {
    var y = window.scrollY;
    var bodyClasslist = body.classList;

    if (y > 50 && !body.classList.contains("nav--scrolled")) {
 
        bodyClasslist.add("body-scrolled");
       
    } else{
    
      bodyClasslist.remove("body-scrolled");
    }
  }

  function stopBodyScrolling(bool) {
    if (bool === true) {
      document.body.addEventListener("touchmove", freezeVp, false);
    } else {
      document.body.removeEventListener("touchmove", freezeVp, false);
    }
  }
  var freezeVp = function(e) {
    e.preventDefault();
  };
}
