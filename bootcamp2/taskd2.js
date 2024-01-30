function funcClick(){
    var nama = document.getElementById("inNama").value;
    var role = document.getElementById("inRole").value;
    var ava = document.getElementById("inAva").value;
    var usia = document.getElementById("inUsia").value;
    var loc = document.getElementById("inLoc").value;
    var exp = document.getElementById("inExp").value;
    var email = document.getElementById("inEmail").value;
    
    document.getElementById("pNama").innerHTML = nama;
    document.getElementById("pRole").innerHTML = role;
    document.getElementById("pAva").innerHTML = ava;
    document.getElementById("pUsia").innerHTML = usia;
    document.getElementById("pLoc").innerHTML = loc;
    document.getElementById("pExp").innerHTML = exp;
    document.getElementById("pEmail").innerHTML = email;
    
    // document.getElementById("formIn").value= "";
    document.getElementById("inNama").value = "";
    document.getElementById("inRole").value = "";
    document.getElementById("inAva").value = "";
    document.getElementById("inUsia").value = "";
    document.getElementById("inLoc").value = "";
    document.getElementById("inExp").value = "";
    document.getElementById("inEmail").value = "";
}
