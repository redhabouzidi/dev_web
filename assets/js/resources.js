
document.getElementsByTagName("header")[0].setAttribute("class","")
document.addEventListener("DOMContentLoaded",function(){
    fetch("assets/php/articles.php",{method:"post",headers:{"content-Type":"application/json",redirect:"follow",mode:"cors"}}).
    then((rep)=>rep.json().then((data)=>{
        let cont=document.getElementById("container");
        data.forEach(article=>{
            let sect=document.createElement("section");
            let ver=document.createElement("div");
            ver.setAttribute("class","version");
            let hed=document.createElement("h2");
            hed.innerHTML=article.nom;
            let el=document.createElement("p");
            el.innerHTML=article.contenu
            ver.appendChild(hed);
            ver.appendChild(el);
            if(document.getElementById("session").value==1){
                let forsup=document.createElement("form");
                let supinp=document.createElement("input");
                supinp.setAttribute("type","hidden");
                supinp.setAttribute("name","id_art");
                supinp.value=(article.id);
                let adsup=document.createElement("input");
                adsup.setAttribute("type","submit");
                adsup.value="delete";
                ver.appendChild(forsup);
                forsup.appendChild(supinp);
                forsup.appendChild(adsup);
                forsup.addEventListener("submit",(event)=>{
                    event.preventDefault();
                    fetch("assets/php/articsup.php",{
                        method:'post',
                        body: new FormData(forsup)
                    });
                    sect.remove();
                })
            }
            let vis=document.createElement("div");
            vis.setAttribute("class","vision");
            let commentaires=document.createElement("div");
            commentaires.setAttribute("class","commentaire");
            commentaires.setAttribute("id","com"+article.id);
            let inp=document.createElement("input");
            inp.setAttribute("type","texte");inp.setAttribute("id","inp"+article.id);inp.setAttribute("name","contenu");
            let a=document.createElement("input");
            a.setAttribute("type","submit")
            a.value="send";
            let form=document.createElement("form");
            form.setAttribute("id","form"+article.id);
            cont.appendChild(sect);
            sect.appendChild(ver);
            sect.appendChild(vis);
            vis.appendChild(commentaires);
            vis.appendChild(form);
            inpu=document.createElement("input");
            inpu.setAttribute("type","hidden");
            inpu.setAttribute("value",article.id);
            inpu.setAttribute("name","id_art");
            form.appendChild(inpu);
            form.appendChild(inp);
            form.appendChild(a);
            let temp=article.id;
            fetch("assets/php/commentaires.php",{
                method:"post",headers:{"content-Type":"application/json",redirect:"follow",mode:"cors"}
            }).then((reponse)=>reponse.json().then((comment)=>{
                let comp=document.getElementById("com"+article.id);
                comp.innerHTML=("");
                comment.forEach(com=>{
                    if(com.id_art==article.id){
                    let page=document.createElement("p");
                    let div=document.createElement("div");
                    page.innerHTML=com.username+' : '+com.contenu;
                    page.setAttribute("class","com");
                    
                    if(document.getElementById("session").value==com.id_per||document.getElementById("session").value==1){
                        let frm=document.createElement("form");
                        let supr=document.createElement("a");
                        let iddet=document.createElement("input");
                        supr.innerHTML="delete";
                        iddet.setAttribute("name","id_com");
                        iddet.setAttribute("type","hidden");
                        iddet.setAttribute("value",com.id);
                        frm.appendChild(supr);
                        frm.appendChild(iddet);
                        frm.setAttribute("id","id_com"+com.id);
                        page.appendChild(frm);
                        supr.addEventListener("click",function(event){
                            event.preventDefault();
                            fetch("assets/php/supcom.php",{
                                method:"post",
                                body: new FormData(frm)
                            });
                            page.remove();
                            div.remove();
                        })
                    }
                    comp.appendChild(page);
                    commentaires.appendChild(div);
                    }

                })
            }))
             form.addEventListener("submit",function(eve){
                 eve.preventDefault();
                if(inp.value.length!=0){
                 let comp=document.getElementById("com"+article.id);
                 comp.innerHTML=("");
                
                
                fetch("assets/php/commentaires.php",{
                    method:"post",headers:{"content-Type":"application/json",redirect:"follow",mode:"cors"}
                }).then((reponse)=>reponse.json().then((comment)=>{
                    comment.forEach(com=>{
                        if(com.id_art==article.id){
                            let page=document.createElement("p");
                            let div=document.createElement("div");
                            page.innerHTML=com.username+' : '+com.contenu;
                            page.setAttribute("class","com");
                            
                            if(document.getElementById("session").value==com.id_per){
                                let frm=document.createElement("form");
                                let supr=document.createElement("a");
                                let iddet=document.createElement("input");
                                supr.innerHTML="delete";
                                iddet.setAttribute("name","id_com");
                                iddet.setAttribute("type","hidden");
                                iddet.setAttribute("value",com.id);
                                frm.appendChild(supr);
                                frm.appendChild(iddet);
                                frm.setAttribute("id","id_com"+com.id);
                                page.appendChild(frm);
                                supr.addEventListener("click",function(event){
                                    event.preventDefault();
                                    fetch("assets/php/supcom.php",{
                                        method:"post",
                                        body: new FormData(frm)
                                    });
                                    page.remove();
                                    div.remove();
                                })
                            }
                            comp.appendChild(page);
                            commentaires.appendChild(div);
                            }
                        

                    })
                }));
                fetch("assets/php/postcom.php",{
                    method:'post',
                    body: new FormData(document.getElementById("form"+article.id))
                }).then(response=> response.json()).then(data=>{
                    let page=document.createElement("p");
                    let div=document.createElement("div");
                    page.innerHTML=data+' : '+inp.value;
                    page.setAttribute("class","com");
                    inp=document.getElementById("inp"+article.id);
                    inp.value=("");
                    let frm=document.createElement("form");
                    let supr=document.createElement("a");
                    let iddet=document.createElement("input");
                    supr.innerHTML="delete";
                    iddet.setAttribute("name","id_com");
                    iddet.setAttribute("type","hidden");
                    iddet.setAttribute("value",data.id);
                    frm.appendChild(supr);
                    frm.appendChild(iddet);
                    frm.setAttribute("id","id_com"+data.id);
                    page.appendChild(frm);
                    supr.addEventListener("click",function(event){
                        event.preventDefault();
                        fetch("assets/php/suplast.php").then(resp=>resp.text());
                        page.remove();
                        div.remove();
                    })
                    comp.appendChild(page);
                    commentaires.appendChild(div);
                    commentaires.scrollTop=commentaires.scrollHeight;
                });
            }
            
             })

        })
    }))

})

