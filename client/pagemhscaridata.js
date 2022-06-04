let queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const nim = urlParams.get("nim");

let urltarget = new URL ("http://localhost/WEBPROG/webprog_pert13/server/dtmhsnim.php");
urltarget.searchParams.set("nim", nim);

const jsonData = new XMLHttpRequest();
jsonData.open("GET", urltarget)
jsonData.send()

jsonData.onload=function(){
    const myData = JSON.parse(this.responseText)
    console.log(myData["isi"])
    for(i=0;i<myData["isi"].length;i++){
        document.getElementById("txNIM").value=myData["isi"][i][0]
        document.getElementById("txNAMA").value=myData["isi"][i][1]
        document.getElementById("txJK").value=myData["isi"][i][2]
        document.getElementById("txJUR").value=myData["isi"][i][3]
    }
}