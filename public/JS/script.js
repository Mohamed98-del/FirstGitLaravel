alert("je ne fonctionne pas");
const bouton = window.document.querySelector('#bouton');
const myform = window.document.querySelector('#myform')

const nomId = window.document.querySelector('#nomId');
const prenomId = window.document.querySelector('#prenomId');
const emailId = window.document.querySelector('#emailId');
const numId = window.document.querySelector('#numId');

const nomInner = window.document.querySelector('#nomInner');
const prenomInner = window.document.querySelector('#prenomInner');
const emailInner = window.document.querySelector('#emailInner');
const numInner = window.document.querySelector('#numInner');
// myform.addEventListener('submit', myfunc);



function myfunc(event) {
    if (nomId.innerHTML.trim() === "")
        nomInner.innerHTML = "ce champ est obligatoire **";
    else nomInner.innerHTML = "";

    if (prenomId.innerHTML.trim() === "")
        prenomInner.innerHTML = "ce champ est obligatoire **";
    else prenomInner.innerHTML = "";
    if (emailId.innerHTML.trim() === "")
        emailInner.innerHTML = "ce champ est obligatoire **";
    else emailId.innerHTML = "";
    if (numId.innerHTML.trim() === "")
        numInner.innerHTML = "ce champ est obligatoire **";
    else numInner.innerHTML = "";
}
// myform.addEventListener('submit', myfunc);
// event.stopPropagation();
// const myform = window.document.querySelector('#myform');
