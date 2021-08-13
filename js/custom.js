/********** Loading Div ***********/

let loadingDiv = document.getElementById("loadingDiv");
window.onload = ()=>{
    loadingDiv.style.display="none";
}

/********btn colors********/

var randomColor = ["red", "blue", "green", "pink", "yellow", "lime", "skyblue", "orange", "tomato", "purple"];

function clr(){
    var id = Math.round(Math.random()*(randomColor.length-1));
    var bgColor = randomColor[id];
    return bgColor;
}

const root = document.querySelector(":root");
for(var i = 0; i <= 10; i++){
    root.style.setProperty(`--btn${i}bg`, clr());
}

/**********************sidebar**********/
document.getElementById("sideBar").style.width = "0px";
function showSideBar(){
    var sideBar = document.getElementById("sideBar");
    if(sideBar.style.width == "0px"){
        sideBar.style.width = "250px";
    }else{
        sideBar.style.width = "0px";
    }
}


/*======== Owl carousel =========*/

$('.owl-carousel').owlCarousel({
    margin:20,
    nav:false,
    autoplay: true,
    rewind: true,
    autoplayTimeout: 2600,
    responsive:{
        0:{
            items:1
        },
        500:{
            items:2
        },
        960:{
            items:3
        },
        1200:{
            items:4
        }
    }
});
