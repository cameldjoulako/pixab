(function() {
    var inscriptionBtn = document.querySelector('.pb-inscription-btn');
    var connexionBtn = document.querySelector('.pb-connexion-btn');
    var modal = document.getElementById('pb-modal');
    var closeBtn = document.querySelector('.pb-close');
    var inscriptionForm = document.getElementById('pb-inscription-form');
    var connexionForm = document.getElementById('pb-connexion-form');
  
    // Afficher la fenêtre modale et le formulaire approprié lorsque l'on clique sur le bouton Inscription ou Connexion
    inscriptionBtn.addEventListener('click', function() {
      modal.style.display = "block";
      inscriptionForm.classList.remove("pb-hidden");
      connexionForm.classList.add("pb-hidden");
    });
  
    connexionBtn.addEventListener('click', function() {
      modal.style.display = "block";
      connexionForm.classList.remove("pb-hidden");
      inscriptionForm.classList.add("pb-hidden");
    });
  
    // Lorsque l'utilisateur clique sur le bouton de fermeture, la fenêtre modale est fermée.
    closeBtn.addEventListener('click', function() {
      modal.style.display = "none";
      inscriptionForm.classList.add("pb-hidden");
      connexionForm.classList.add("pb-hidden");
    });
  
    // Lorsque l'utilisateur clique n'importe où en dehors de la fenêtre modale, la fermer.
    window.addEventListener('click', function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
        inscriptionForm.classList.add("pb-hidden");
        connexionForm.classList.add("pb-hidden");
      }
    });
  
    // Lorsque l'utilisateur soumet le formulaire d'inscription, afficher un message
    inscriptionForm.addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Inscription réussie !');
    });
  
    // Lorsque l'utilisateur soumet le formulaire de connexion, afficher un message
    connexionForm.addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Connexion réussie !');
    });


  
  })();
  