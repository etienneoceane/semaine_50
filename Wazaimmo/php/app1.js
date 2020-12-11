var envoyer=document.getElementById("Bouton_seconnecter");
envoyer.addEventListener("click",verifform);
function verifform(e){




// VERIFICATION EMAIL
    
var erreurlogin=document.getElementById("erreurlogin"); 

var login=document.getElementById("login");

var verif6=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
var resultat6=verif6.test(login.value);

    if(verif6.test(login.value)==false)
    { e.preventDefault();
        erreurlogin.innerHTML="Veuillez saisir une adresse mail valide"
    }

        else 
        {
            erreurlogin.innerHTML=""
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

}