//document.querySelector('.form-check-input').classList.toggle('checked');
//document.querySelector('#modalInformation').style.display = 'none';

//Affichage du modal au chargement de la page (sans JQuery)
window.onload = function nav() {
    let modalAccueil = new bootstrap.Modal(document.getElementById('modalInformation'));
    modalAccueil.show();
}
