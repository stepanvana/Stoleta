// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}

function toggleNav() {
    var contentId = document.getElementById("togglableNav");

    contentId.style.display == "block" ? contentId.style.display = "none" : 
    contentId.style.display = "block"; 
}