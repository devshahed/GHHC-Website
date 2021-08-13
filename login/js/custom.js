let findUname = ()=>{
    var xhttp = new XMLHttpRequest();
    var url = `checkUname.php`;
    var uname = document.getElementById('uname').value;
    var showRes = document.getElementById('unameResponse');
    xhttp.onreadystatechange = ()=>{
        if(xhttp.readyState == 4){
            showRes.innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`uname=${uname}`);
}