
function thongbao()
{
    // alert('Hello');
    // var hiddenMenu = document.getElementById("main-menu-ID");
    // hiddenMenu.style.display = "block";

    document.getElementById("main-menu-ID").classList.toggle("show");
}


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("logo-and-nav").style.top = "0";
  } else {
    document.getElementById("logo-and-nav").style.top = "-10px";
  }
  prevScrollpos = currentScrollPos;
}