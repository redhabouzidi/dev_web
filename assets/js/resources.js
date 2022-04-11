
document.getElementsByTagName("header")[0].setAttribute("class","")

document.addEventListener("DOMContentLoaded",function(){
    fetch("articles.php",{method:"post",headers:{"content-Type":"application/json",redirect:"follow",mode:"cors"}}).
    then((rep)=>rep.json().then((data)=>{
        let cont=document.getElementById("container");
        data.forEach(article=>{
            let sect=document.createElement("section");
            let ver=document.createElement("div");
            ver.setAttribute("class","version");
            ver.innerHTML=article.contenu;
            let vis=document.createElement("div");
            vis.setAttribute("class","vision");
            let commentaires=document.createElement("div");
            commentaires.setAttribute("class","commentaire");
            commentaires.setAttribute("id","com"+article.id);
            let inp=document.createElement("input");
            inp.setAttribute("type","texte");inp.setAttribute("id","inp"+article.id);inp.setAttribute("name","contenu");
            let a=document.createElement("a");
            a.innerHTML="send";
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
            fetch("commentaires.php",{
                method:"post",headers:{"content-Type":"application/json",redirect:"follow",mode:"cors"}
            }).then((reponse)=>reponse.json().then((comment)=>{
                let comp=document.getElementById("com"+article.id);
                comp.innerHTML=("");
                comment.forEach(com=>{
                    if(com.id_art==article.id){
                    let page=document.createElement("p");
                    let div=document.createElement("div");
                    page.innerHTML=com.username+' : '+com.contenu;
                    comp.appendChild(page);
                    commentaires.appendChild(div);
                    }

                })
            }))
             a.addEventListener("click",function(event){
                 event.preventDefault();
                if(inp.value.length!=0){
                 let comp=document.getElementById("com"+article.id);
                 comp.innerHTML=("");
                
                
                fetch("commentaires.php",{
                    method:"post",headers:{"content-Type":"application/json",redirect:"follow",mode:"cors"}
                }).then((reponse)=>reponse.json().then((comment)=>{
                    comment.forEach(com=>{
                        
                        if(com.id_art==article.id){
                        let page=document.createElement("p");
                        let div=document.createElement("div");
                        page.innerHTML=com.username+' : '+com.contenu;
                        comp.appendChild(page);
                        commentaires.appendChild(div);
                        }

                    })
                }));
                fetch("postcom.php",{
                    method:'post',
                    body: new FormData(document.getElementById("form"+article.id))
                }).then(response=> response.json()).then(data=>{
                    let page=document.createElement("p");
                    let div=document.createElement("div");
                    page.innerHTML=data+' : '+inp.value;
                    comp.appendChild(page);
                    commentaires.appendChild(div);
                    inp=document.getElementById("inp"+article.id);
                    inp.value=("");
                    
                });
            }
                
             })

        })
    }))
    
})

