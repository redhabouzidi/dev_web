var radio=document.getElementsByClassName("radio");
var time=setInterval(timer,5000);
var head=document.getElementsByTagName("header");
let item=document.getElementsByClassName("first");
radio[0].checked="true";
var counter=1;
function condition(){
    
    if(!head[0].classList.contains("is-actif")){
    if(Math.round(scrollY)!=0){
        head[0].setAttribute("class","bg0");
        
    }else if(document.getElementsByClassName("radio")[0].checked==true){
            if(Math.round(scrollY)==0){
                head[0].setAttribute("class","bg1");
                item[0].setAttribute("id","im1");
            }
        }else if(document.getElementsByClassName("radio")[1].checked==true){
            if(Math.round(scrollY)==0){
                head[0].setAttribute("class","bg2");
                item[0].setAttribute("id","im2");
            }
        }else if(document.getElementsByClassName("radio")[2].checked==true){
            if(Math.round(Math.round(scrollY))==0){
                head[0].setAttribute("class","bg3");
                item[0].setAttribute("id","im3");
            }
        }else if(document.getElementsByClassName("radio")[3].checked==true){
            if(Math.round(scrollY)==0){
                head[0].setAttribute("class","bg4");
                item[0].setAttribute("id","im4");
        }
    }
        
}
}

function timer(){
    radio[counter].checked="true";
    if(!head[0].classList.contains("is-actif")){
    switch(counter){
        case 0:
            if(Math.round(scrollY)==0){
                head[0].setAttribute("class","bg1");
                item[0].setAttribute("id","im1");
            }
        break;
        case 1:
            if(Math.round(scrollY)==0){
                head[0].setAttribute("class","bg2");
                item[0].setAttribute("id","im2");
            }
        break;
        case 2:
            if(Math.round(scrollY)==0){
                head[0].setAttribute("class","bg3");
                item[0].setAttribute("id","im3");
            }
        break;
        case 3:
            if(Math.round(scrollY)==0){
                head[0].setAttribute("class","bg4");
                item[0].setAttribute("id","im4");
            }
        break;
        }
    counter++;
    
    if(counter>3){
        counter=0;  
    }
}
}

radio[0].addEventListener("click",function(){
    clearInterval(time);
    counter=1;
     time=setInterval(timer,5000);
     condition();
});
radio[1].addEventListener("click",function(){
    clearInterval(time);
    counter=2;
     time=setInterval(timer,5000);
     condition();
});
radio[2].addEventListener("click",function(){
    clearInterval(time);
    counter=3;
     time=setInterval(timer,5000);
     condition();
});
radio[3].addEventListener("click",function(){
    clearInterval(time);
    counter=0;
     time=setInterval(timer,5000);
     condition();
});
document.addEventListener("scroll",condition);


