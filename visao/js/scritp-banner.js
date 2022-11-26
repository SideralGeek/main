/* Formulário "Cor Sólida" ou "Imagem" */

//Esconde ambos forumários
document.getElementById('formCorUpload').style.display='none';
document.getElementById('formCorSelect').style.display='none';

//Recebe qual valor que está no input radio
function hideShowDiv(val){
    //Relativamente esconde um form e mostrando outro inversamente
    if(val==1){
        document.getElementById('formCorUpload').style.display='none';
        document.getElementById('formCorSelect').style.display='block';
    }
    if(val==2){
        document.getElementById('formCorSelect').style.display='none';
        document.getElementById('formCorUpload').style.display='block';
    }
}