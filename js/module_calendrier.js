// librairie calendrier
 
/* Inclure ce script dans l'entete */
 
/* ##################### CONFIGURATION ##################### */
 
/* ##- INITIALISATION DES VARIABLES -##*/
var calendrierSortie = '';
//Date actuelle
var today = '';
//Mois actuel
var current_month = '';
//Annꥠactuelle
var current_year = '' ;
//Jours actuel
var current_day = '';
//Nombres de jours depuis le dꣵt de la semaine
var current_day_since_start_week = '';
//On initialise le nom des mois et le nom des jours en VF :)
var month_name = new Array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
var day_name = new Array('L','M','M','J','V','S','D');
//permet de rꤵp鳥r l'input sur lequel on a click顥t de le remplir avec la date formatꥍ
var myObjectClick = null;
//Classe qui sera d굥ct顰our afficher le calendrier
var classMove = "calendrier";
//Variable permettant de savoir si on doit garder en mꮯire le champs input click鍊var lastInput = null;
//Div du calendrier
var div_calendar = "";
 
 
 
//########################## FIN DES FONCTION LISTENER ########################## //
/*Ajout du listener pour d굥cter le click sur l'ꭩment et afficher le calendrier
uniquement sur les textbox de class css date */
 
//Fonction permettant d'initialiser les listeners
function init_evenement(){
    //On commence par affecter une fonction ࡣhaque 귨nement de la souris
    if(window.attachEvent){
        document.onmousedown = start;
        document.onmouseup = drop;
    }
    else{
        document.addEventListener("mousedown",start, false);
        document.addEventListener("mouseup",drop, false);
    }
}
//Fonction permettant de rꤵp鳥r l'objet sur lequel on a click鬠et l'on rꤵp鳥 sa classe
function start(e){
    //On initialise l'귨nement s'il n'a aps 굩 crꩠ( sous ie )
    if(!e){
        e = window.event;
    }
    //D굥ction de l'ꭩment sur lequel on a click鍊    var monElement = null;
    monElement = (e.target)? e.target:e.srcElement;
    if(monElement != null && monElement)
    {
        //On appel la fonction permettant de rꤵp鳥r la classe de l'objet et assigner les variables
        getClassDrag(monElement);
 
        if(myObjectClick){
            initialiserCalendrier(monElement);
            lastInput = myObjectClick;
        }
    }
}
function drop(){
         myObjectClick = null;
}
 
function getClassDrag(myObject){
    with(myObject){
        var x = className;
        listeClass = x.split(" ");
        //On parcours le tableau pour voir si l'objet est de type calendrier
        for(var i = 0 ; i < listeClass.length ; i++){
            if(listeClass[i] == classMove){
                myObjectClick = myObject;
                break;
            }
        }
    }
}
window.onload = init_evenement;
 
//########################## Pour combler un bug d'ie 6 on masque les select ########################## //
function masquerSelect(){
        var ua = navigator.userAgent.toLowerCase();
        var versionNav = parseFloat( ua.substring( ua.indexOf('msie ') + 5 ) );
        var isIE        = ( (ua.indexOf('msie') != -1) && (ua.indexOf('opera') == -1) && (ua.indexOf('webtv') == -1) );
 
        if(isIE && (versionNav < 7)){
             svn=document.getElementsByTagName("SELECT");
             for (a=0;a<svn.length;a++){
                svn[a].style.visibility="hidden";
             }
        }
}
 
function montrerSelect(){
       var ua = navigator.userAgent.toLowerCase();
        var versionNav = parseFloat( ua.substring( ua.indexOf('msie ') + 5 ) );
        var isIE        = ( (ua.indexOf('msie') != -1) && (ua.indexOf('opera') == -1) && (ua.indexOf('webtv') == -1) );
        if(isIE && versionNav < 7){
             svn=document.getElementsByTagName("SELECT");
             for (a=0;a<svn.length;a++){
                svn[a].style.visibility="visible";
             }
         }
}
 
//########################## FIN DES FONCTION LISTENER ########################## //
 
// ## PARAMETRE D'AFFICHAGE du CALENDRIER ## //
//si enLigne est a true , le calendrier s'affiche sur une seule ligne,
//sinon il prend la taille spꤩfi顰ar dꧡut;
 
var enLigne = false ;
var largeur = "175";
var formatage = "/";
 
/* ##################### FIN DE LA CONFIGURATION ##################### */
 
//Fonction permettant de passer a l'annee prꤩdente
function annee_precedente(){
 
    //On rꤵp鳥 l'annee actuelle puis on v곩fit que l'on est pas en l'an 1 :-)
    if(current_year == 1){
        current_year = current_year;
    }
    else{
        current_year = current_year - 1 ;
    }
    //et on appel la fonction de gꯩration de calendrier
    calendrier(    current_year , current_month, current_day);
}
 
//Fonction permettant de passer ࡬'annee suivante
function annee_suivante(){
    //Pas de limite pour l'ajout d'annꥍ
    current_year = current_year +1 ;
    //et on appel la fonction de gꯩration de calendrier
    calendrier(    current_year , current_month, current_day);
}
 
 
 
 
//Fonction permettant de passer au mois prꤩdent
function mois_precedent(){
 
    //On rꤵp鳥 le mois actuel puis on v곩fit que l'on est pas en janvier sinon on enl鷥 une annꥍ
    if(current_month == 0){
        current_month = 11;
        current_year = current_year - 1;
    }
    else{
        current_month = current_month - 1 ;
    }
    //et on appel la fonction de gꯩration de calendrier
    calendrier(    current_year , current_month, current_day);
}
 
//Fonction permettant de passer au mois suivant
function mois_suivant(){
    //On rꤵp鳥 le mois actuel puis on v곩fit que l'on est pas en janvier sinon on ajoute une annꥍ
    if(current_month == 12){
        current_month = 1;
        current_year = current_year  + 1;
    }
    else{
        current_month = current_month + 1;
    }
    //et on appel la fonction de gꯩration de calendrier
    calendrier(    current_year , current_month, current_day);
}
 
//Fonction principale qui gꯨre le calendrier
//Elle prend en param鵲e, l'annꥠ, le mois , et le jour
//Si l'annꥠet le mois ne sont pas renseign고, la date courante est affect顰ar dꧡut
function calendrier(year, month, day ){
 
    //Aujourd'hui si month et year ne sont pas renseign곍
    if(month == null || year == null){
        today = new Date();
    }
    else{
        //month = month - 1;
        //Crꢴion d'une date en fonction de celle passꥠen param鵲e
        today = new Date(year, month , day);
    }
 
    //Mois actuel
    current_month = today.getMonth()
 
    //Annꥠactuelle
    current_year = today.getFullYear();
 
    //Jours actuel
    current_day = today.getDate();
 
    // On rꤵp鳥 le premier jour de la semaine du mois
    var dateTemp = new Date(current_year, current_month,1);
 
    //test pour v곩fier quel jour 굡it le prmier du mois
    current_day_since_start_week = (( dateTemp.getDay()== 0 ) ? 6 : dateTemp.getDay() - 1);
 
    //variable permettant de v곩fier si l'on est dꫡ rentr顤ans la condition pour 귩ter une boucle infinit
    var verifJour = false;
 
    //On initialise le nombre de jour par mois
    var nbJoursfevrier = (current_year % 4) == 0 ? 29 : 28;
    //Initialisation du tableau indiquant le nombre de jours par mois
    var day_number = new Array(31,nbJoursfevrier,31,30,31,30,31,31,30,31,30,31);
 
    //On initialise la ligne qui comportera tous les noms des jours depuis le dꣵt du mois
    var list_day = '';
    var day_calendar = '';
 
    var x = 0
 
    //Ligne permettant de changer l'annꥠet de mois
    var month_bef = "<a href=\"javascript:mois_precedent()\" style=\"margin-left:3px;\" > < </a>";
    var month_next = "<a href=\"javascript:mois_suivant()\" style=\"margin-right:3px;\"> > </a>";
    var year_next = "<a href=\"javascript:annee_suivante()\" style=\"float:right;margin-right:3px;\" >&nbsp;&nbsp; > > </a>";
    var year_bef = "<a href=\"javascript:annee_precedente()\" style=\"float:left;margin-left:3px;\"  > < < &nbsp;&nbsp;</a>";
    calendrierSortie = "<p class=\"titleMonth\"> <a href=\"javascript:alimenterChamps('')\" style=\"float:left;margin-left:3px;color:#cccccc;font-size:10px;\"> Effacer la date </a><a href=\"javascript:masquerCalendrier()\" style=\"float:right;margin-right:3px;color:red;font-weight:bold;font-size:12px;\">X</a>&nbsp;</p>";
    //On affiche le mois et l'annꥠen titre
    calendrierSortie += "<p class=\"titleMonth\" style=\"float:left;\">" + year_next + year_bef+  month_bef +  month_name[current_month]+ " "+ current_year + month_next+"</p>";
    //On remplit le calendrier avec le nombre de jour, en remplissant les premiers jours par des champs vides
    for(var nbjours = 0 ; nbjours < (day_number[current_month] + current_day_since_start_week) ; nbjours++){
 
        // On boucle tous les 7 jours pour crꦲ la ligne qui comportera le nom des jours en fonction des<br />
        // param鵲es d'affichage
        if(enLigne == true){
            // Si le premier jours de la semaine n'est pas un lundi alors on commence ce jours ci
            if(current_day_since_start_week != 1 && verifJour == false){
                i  = current_day_since_start_week - 1 ;
                if(x == 6){
                    list_day += "<span>" + day_name[x] + "</span>";
 
                }
                else{
                    list_day += "<span>" + day_name[x] + "</span>";
                }
                verifJour = true;
            }
            else{
                if(x == 6){
                    list_day += "<span>" + day_name[x] + "</span>";
 
                }
                else{
                    list_day += "<span>" + day_name[x] + "</span>";
                }
            }
            x = (x == 6) ? 0: x    + 1;
        }
        else if( enLigne == false && verifJour == false){
            for(x = 0 ; x < 7 ; x++){
                if(x == 6){
                    list_day += "<span>" + day_name[x] + "</span>";
 
                }
                else{
                    list_day += "<span>" + day_name[x] + "</span>";
                }
            }
            verifJour = true;
        }
        //et enfin on ajoute les dates au calendrier
        //Pour g鳥r les jours "vide" et 귩ter de faire une boucle on v곩fit que le nombre de jours corespond bien au
        //nombre de jour du mois
        if(nbjours < day_number[current_month]){
            if(current_day == (nbjours+1)){
                day_calendar += "<span onclick=\"alimenterChamps(this.innerHTML)\" class=\"currentDay\">" + (nbjours+1) + "</span>";
            }
            else{
                day_calendar += "<span onclick=\"alimenterChamps(this.innerHTML)\">" + (nbjours+1) + "</span>";
            }
        }
    }
 
    //On ajoute les jours "vide" du dꣵt du mois
    for(i  = 0 ; i < current_day_since_start_week ; i ++){
        day_calendar = "<span>&nbsp;</span>" + day_calendar;
    }
    //Si aucun calendrier n'a encore 굩 crꥠ:
    if(!document.getElementById("calendrier")){
        //On crꥠune div dynamiquement, en absolute, positionn顳ous le champs input
        var div_calendar = document.createElement("div");
 
        //On lui attribut un id
        div_calendar.setAttribute("id","calendrier");
 
        //On dꧩnit les propri굩s de cette div ( id et classe ) 
        div_calendar.className = "calendar";
 
        //Pour ajouter la div dans le document
        var mybody = document.getElementsByTagName("body")[0];
 
        //Pour finir on ajoute la div dans le document
        mybody.appendChild(div_calendar);
    }
    else{
            div_calendar = document.getElementById("calendrier");
    }
 
    //On ins鳥r dans la div, le contenu du calendrier gꯩr鍊    //On assigne la taille du calendrier de fa谮 dynamique ( on ajoute 10 px pour combler un bug sous ie )
    var width_calendar = ( enLigne == false ) ?  largeur+"px" : ((nbjours * 20) + ( nbjours * 4 ))+10+"px" ;
 
    calendrierSortie = calendrierSortie + list_day  + day_calendar + "<div class=\"separator\"></div>";
    div_calendar.innerHTML = calendrierSortie;
    div_calendar.style.width = width_calendar;
}
 
//Fonction permettant de trouver la position de l'ꭩment ( input ) pour pouvoir positioner le calendrier
function ds_getleft(el) {
    var tmp = el.offsetLeft;
    el = el.offsetParent
    while(el) {
        tmp += el.offsetLeft;
        el = el.offsetParent;
    }
    return tmp;
}
 
function ds_gettop(el) {
    var tmp = el.offsetTop;
    el = el.offsetParent
    while(el) {
        tmp += el.offsetTop;
        el = el.offsetParent;
    }
    return tmp;
}
 
//fonction permettant de positioner le calendrier
function positionCalendar(objetParent){
    //document.getElementById('calendrier').style.left = ds_getleft(objetParent) + "px";
    document.getElementById('calendrier').style.left = ds_getleft(objetParent) + "px";
    //document.getElementById('calendrier').style.top = ds_gettop(objetParent) + 20 + "px" ;
    document.getElementById('calendrier').style.top = ds_gettop(objetParent) + 20 + "px" ;
    // et on le rend visible
    document.getElementById('calendrier').style.visibility = "visible";
}
 
function initialiserCalendrier(objetClick){
        //on affecte la variable dꧩnissant sur quel input on a click鍊        myObjectClick = objetClick;
 
        if(myObjectClick.disabled != true){
            //On v곩fit que le champs n'est pas dꫡ remplit, sinon on va se positionner sur la date du champs
            if(myObjectClick.value != ''){
                //On utilise la chaine de formatage
                var reg=new RegExp("/", "g");
                var dateDuChamps = myObjectClick.value;
                var tableau=dateDuChamps.split(reg);
                calendrier(    tableau[2] , tableau[1] - 1 , tableau[0]);
            }
            else{
                //on crꦲ le calendrier
                calendrier(objetClick);
 
            }
            //puis on le positionne par rapport a l'objet sur lequel on a click鍊            //positionCalendar(objetClick);
            positionCalendar(objetClick);
            masquerSelect();
        }
 
}
 
//Fonction permettant d'alimenter le champs
function alimenterChamps(daySelect){
        if(daySelect != ''){
            lastInput.value= formatInfZero(daySelect) + formatage + formatInfZero((current_month+1)) + formatage +current_year;
        }
        else{
            lastInput.value = '';
        }
        masquerCalendrier();
}
function masquerCalendrier(){
        document.getElementById('calendrier').style.visibility = "hidden";
        montrerSelect();
}
 
function formatInfZero(numberFormat){
        if(parseInt(numberFormat) < 10){
                numberFormat = "0"+numberFormat;
        }
 
        return numberFormat;
}