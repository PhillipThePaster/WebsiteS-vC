
var images = document.getElementsByClassName("theimage");
 
for (var i = 0; i < images.length; i++) {
    var image = images[i];
    image.addEventListener('mouseover', addAnimationClass, false);
    image.addEventListener('mouseout', removeAnimationClass, false);
}
 
var topPosition = null;
 
function addAnimationClass(e) {
    var thisImage = e.target;
 
    topPosition = getComputedStyle(thisImage).top;
    thisImage.style.top = topPosition;
 
    thisImage.className += " slideIn";
    thisImage.className = thisImage.className.replace(" slideOut",'');
}
 
function removeAnimationClass(e) {
    var thisImage = e.target;
 
    topPosition = getComputedStyle(thisImage).top;
    thisImage.style.top = topPosition;
 
    thisImage.className += " slideOut";
    thisImage.className = thisImage.className.replace(" slideIn",'');
}