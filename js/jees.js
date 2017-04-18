var modal = document.getElementById("modal");
var close = document.getElementById("close");
var ss = document.getElementsByClassName("slideshow");
var urut = document.getElementById("urut");
var bar = document.getElementById("progress");
var hitung = 0;
var time;
var img;

function stop() {
    clearTimeout(time);
    bar.style.width = "0";
    bar.classList.remove("anim");
}

function show(n) {
    modal.style.display = "block";
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            stop();
        }
    }
    
    close.onclick = function() {
        modal.style.display = "none";
        stop();
    }
    
    if(n==0) {img = [0,1,2,3,4];}
    if(n==1) {img = [5,6,7,8];}
    if(n==2) {img = [9,10,11,12,13,14];}
    if(n==3) {img = [15,16];}
    if(n==4) {img = [17,18,19];}
    
    image();
}

function image() {
    stop();
    for(i = 0; i <= 19; i++) {ss[i].style.display = "none";}
    
    if(hitung > img.length-1) {hitung = 0;}
    if(hitung < 0) {hitung = img.length-1;}
    
    ss[img[hitung]].style.display = "block";
    urut.innerHTML = hitung+1 + "/" + img.length;
    
    bar.classList.add("anim");
    
    hitung++;
    
    time = setTimeout(image,4000);
}

function ganti(z) {
    hitung += z-1;
    stop();
    show();
}

var nav = document.getElementById("navKecil");
var icon = document.getElementById("navicon");
var closenav = document.getElementById("closenav");
var cont = document.getElementsByClassName("cont");

icon.onclick = function() {
    nav.style.height = "100%";
    cont[0].style.transform = "translateY(0)";
    cont[1].style.transform = "translateY(0)";
}

closenav.onclick = function() {
    nav.style.height = "0";
    cont[0].style.transform = "translateY(-100%)";
    cont[1].style.transform = "translateY(-100%)";
}

var message = document.getElementById("message");

function book() {
    message.style.opacity = "1";
    message.style.bottom = "30px";
    setTimeout(bookclose, 3000);
}

function bookclose() {
    message.style.opacity = "0";
    message.style.bottom = "-60px";
}