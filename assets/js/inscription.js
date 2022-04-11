let inputs=document.getElementsByTagName("input");
inputs[4].addEventListener("click",function(event){
    
    let b=true;
    let regexInput="/^[/S][1,28]";
    let corr=document.getElementById("er");
    if(!(/^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/.test(inputs[0].value))){
        inputs[0].classList.add("error");
        if(b==true)
        corr.innerHTML=("donnez entre 8-20 caractére pour le pseudonyme");
        b=false;
        
    }else{
        inputs[0].classList.remove("error");
    }
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(inputs[1].value))){
        inputs[1].classList.add("error");
        if(b==true)
        corr.innerHTML=("adresse e-mail invalide : exempl@mail.com");
        b=false;
    }else{
        inputs[1].classList.remove("error");
    }
    if(inputs[2].value.length<8||inputs[2].value.length>28){
        inputs[2].classList.add("error");
        if(b==true)
        corr.innerHTML=("mot de passe entre 8 et 28 caractéres");
        b=false;
    }else{
        inputs[2].classList.remove("error");
    }
    if(!(inputs[2].value.localeCompare(inputs[3].value)==0)){
        inputs[3].classList.add("error");
        if(b==true)
        corr.innerHTML=("mot de passe non identique");
        b=false;
    }else{
        inputs[3].classList.remove("error");
    }
    if(b==false){
        event.preventDefault();
    }
})