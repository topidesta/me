/*jQuery(document).ready(function($) {
/*
/*
/*    /*======= Skillset *=======*/
/*
/*    $('.level-bar-inner').css('width', '0');
/*
/*    $(window).on('load', function() {
/*
/*        $('.level-bar-inner').each(function() {
/*
/*            var itemWidth = $(this).data('level');
/*
/*            $(this).animate({
/*                width: itemWidth
/*            }, 800);
/*
/*        });
/*
/*    });
/*
/*    /* Bootstrap Tooltip for Skillset */
/*    $('.level-label').tooltip();
/*});
/*


/* ======= Sticky top menu ======= */
window.onscroll = function() {stickyTop()};
var topmenu = document.getElementById("topMenu");
var logo = document.getElementById("navLogo");
var overlay = document.getElementById("overlay");
var sticky = topmenu.offsetTop;

function stickyTop() {
  if (window.pageYOffset > sticky || overlay.classList.contains("open")) {
    topmenu.classList.add("sticky");
    logo.classList.remove("hidden");
  } else {
    topmenu.classList.remove("sticky");
    logo.classList.add("hidden");
  }
}

/* ======== Responsive menu ======= */
var toggle = document.getElementById("toggle");
toggle.onclick = function() {toggleMenu()};

function toggleMenu() {
  toggle.classList.toggle("active");
  overlay.classList.toggle("open");
  stickyTop();
}
