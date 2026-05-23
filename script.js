document.getElementById("urlap").addEventListener("submit", function(event){

    var nev = document.getElementById("nev");
    var email = document.getElementById("email");
    var jegyek = document.getElementById("jegyek");
    var nap = document.getElementById("nap");
    
    var jo = true;

    var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-za-z]{2,4})$/;

    nev.style.backgroundColor = "white";
    email.style.backgroundColor = "white";
    jegyek.style.backgroundColor = "white";
    nap.style.backgroundColor = "white";
    
    if(nev.value.lenght < 6 || nev.value.length > 25 ) {
        nev.style.backgroundColor = "#f99";
        jo = false;
    }

    if(!checkPattern.test(email.value)) {
        email.style.backgroundColor = "#f99";
        jo = false;
    }

    if (jegyek.value == "" || isNaN(jegyek.value) || Number(jegyek.value) <1 || Number(jegyek.value) >5) {
        jegyek.style.backgroundColor = "#f99";
    }

    if (nap.value != "hétfő" && nap.value !="szerda" && nap.value !="péntek" && nap.value != "szombat" && nap.value !="vasárnap") {
        nap.style.backgroundColor = "#f99";
    }

    if (!jo) {
        event.preventDefault();
    }

});