var envoyer=document.getElementById("Bouton_sinscrire");
envoyer.addEventListener("click",verifform);
function verifform(e){




// VERIFICATION EMAIL
    
var erreurloginid=document.getElementById("erreurloginid"); 

var loginid=document.getElementById("loginid");

var verif6=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
var resultat6=verif6.test(loginid.value);

    if(verif6.test(loginid.value)==false)
    { e.preventDefault();
        erreurloginid.innerHTML="Veuillez saisir une adresse mail valide"
    }

        else 
        {
            erreurloginid.innerHTML=""
        }
       
        // VERIFICATION EMAIL
    
var erreurloginid2=document.getElementById("erreurloginid2"); 

var loginid2=document.getElementById("loginid2");

    if((loginid2.value!=loginid.value))
    { e.preventDefault();
        erreurloginid2.innerHTML="Vos adresses mails ne correspondent pas"
    }

        else 
        {
            erreurloginid2.innerHTML=""
        }



                // VERIFICATION MDP

    
var erreurmdp=document.getElementById("erreurmdp"); 

var mdp=document.getElementById("mdp").value;
console.log(typeof mdp);
var verif4=/^(?=.*[0-9])(?=.*[a-z])(?=.*[!_&@$àéè¨çîï])(?=.*[A-Z])[0-9a-zA-Z!_&@$àéè¨çîï]{10,}$/;
var resultat4=verif4.test(mdp);


    if(verif4.test(mdp)==false)
    { e.preventDefault();
        erreurmdp.innerHTML="Votre mot de passe doit contenir <br> Minimum 10 caractères <br> Un chiffre <br> Une majuscule <br> Une minuscule <br> Un caractère spécial"
    }

        else 
        {
            erreurmdp.innerHTML=""
        }

        // CONFIRMATION MDP
    
        var erreurmdp2=document.getElementById("erreurmdp2"); 

        var mdp2=document.getElementById("mdp2").value;
        
            if((mdp2!=mdp))
            { e.preventDefault();
                erreurmdp2.innerHTML="Votre mot de passe ne correspond pas"
            }
        
                else 
                {
                    erreurmdp2.innerHTML=""
                }

                console.log(form_inscription)
}


// var formValid = document.getElementById("bouton_envoi");

// // variable de l'identifiant

// var login = document.getElementById("login");
// var erreurlogin = document.getElementById("erreurlogin")
// var veriflogin = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;

// // variable du mot de passe

// var mdp = document.getElementById("mdp");
// var erreurmdp = document.getElementById("missMdp")
// var verifmdp = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;




// formValid.addEventListener("click",validation);
// function validation(event)
// {

// if(id.value=="")
// // Si le champ est vide
//    {
//      event.preventDefault();
//      missId.textContent = "Identifiant manquant";
//      missId.style.color = "red"
//    }

// // Si le format est incorrect
// else if (idValid.test(id.value)== false)
//    {
//      event.preventDefault();
//      missId.textContent = "Format incorrect";
//      missId.style.color = "orange";
//    }
// else
//    {
//      missId.textContent = "";
//    }

// if(mdp.value=="")
// // Si le champ est vide
//    {
//      event.preventDefault();
//      missMdp.textContent = "Mot de passe manquant";
//      missMdp.style.color = "red"
//    }

// // Si le format est incorrect
// else if (mdpValid.test(mdp.value)== false)
//    {
//      event.preventDefault();
//      missMdp.textContent = "Format incorrect";
//      missMdp.style.color = "orange";
//    }
// else
//    {
//      missMdp.textContent = "";
//    }
// }
