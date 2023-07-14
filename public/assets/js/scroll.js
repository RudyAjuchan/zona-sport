window.onload = function(){
    $("#loader2").fadeOut();
    $("body").removeClass('hidden');
}

window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
    var icon = document.querySelector(".icon_movie");
    icon.classList.toggle("esconder",window.scrollY>100);

    if(this.window.scrollY>0){
        var logo1 = this.document.querySelector(".logoLG");
        var logo2 = this.document.querySelector(".logoSM");
        logo1.src="assets/img/logo_lg_negro.png";
        logo2.src="assets/img/logo_responsive_negro.png";
    }else{
        var logo1 = this.document.querySelector(".logoLG");
        var logo2 = this.document.querySelector(".logoSM");
        logo1.src="assets/img/logo_lg_blanco.png";
        logo2.src="assets/img/logo_responsive_blanco.png";
    }
});

function menu_toggle(){
    var list = document.querySelector("#list");
    list.classList.toggle("btn-toggle");

    var header = document.querySelector("header");
    header.classList.toggle("btn-toggle-h");
}