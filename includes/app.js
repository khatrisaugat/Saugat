
var toggle=true;
document.querySelector('.mytoggle').addEventListener('click',function(){
   if(toggle){ 
    document.getElementById('mynavbar').style.display='block';
    document.querySelector(".glyphicon-menu-hamburger").style.display='none';
    document.querySelector(".close-btn").style.display='block';
    toggle=false;
}else{
    document.getElementById('mynavbar').style.display='none';
    document.querySelector(".glyphicon-menu-hamburger").style.display='block';
    document.querySelector(".close-btn").style.display='none';
    toggle=true;
}
    
})
// window.onscroll = function(){
// 	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
// 		document.getElementById("hello").className="";
// 	}else{
// 		document.getElementById("hello").className="";
// 	}
// }