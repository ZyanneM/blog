var   btnopen = document.getElementById("btnOpen");
container = document.getElementById("modal-container");
btnCancel= document.getElementById("btnCancel");
btnSub = document.getElementById("btnSubContainer");

/ --------------- FONCTION OPENFORM : OUVRE LA PREMIERE MODALE A PARTIR DU BOUTON MAGIC --------------- //

btnopen.addEventListener("click", function openForm(){
  container3.style.transform = 'scale(0)';
  container.style.display = 'flex';
  
  container.setAttribute('class', 'blowUpModal');

});
       
// --------------- FONCTION BOUGE : ANIME LE BOUTON CLOSE --------------- //

        btnCancel.addEventListener("mouseenter", function bouge() {

          btnCancel.setAttribute('class', 'closebouton');
          setTimeout(() => {
            btnCancel.setAttribute('class', 'removeanim ');
          }, 500);
        });

// --------------- FONCTION CLOSEFORM : FERME LA PREMIERE MODALE AVEC UNE ANIMATION A PARTIR DU BOUTON CLOSE --------------- //

btnCancel.addEventListener("click", function closeForm(){

  container.setAttribute('class', 'blowUpModalTwo');

});        