var anh=["url(./giaodien/img/banner1.jpg)","url(./giaodien/img/banner2.webp)","url(./giaodien/img/banner4.jpg)","url(./giaodien/img/banner8.webp)","url(./giaodien/img/banner7.jpg)"];
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