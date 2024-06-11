var anh=["url(img/banner1.jpg)","url(img/banner2.webp)","url(img/banner4.jpg)","url(img/banner5.jpg)"];
var i = 0;
var bg_img = document.getElementById("header");
var eventSL;
function slide() {
    i++;
    if (i>anh.length-1) {
    //    console.log(10);
        i = 0;
    }

    bg_img.style.backgroundImage = anh[i];
}

eventSL = setInterval(slide,1500)