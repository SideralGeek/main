/* Formulário "Cor Sólida" ou "Imagem" */

//Esconde ambos forumários
document.getElementById('CorImagem').style.display='none';
document.getElementById('CorSolida').style.display='none';

//Recebe qual valor que está no input radio
function hideShowDiv(val){
    //Relativamente esconde um form e mostrando outro inversamente
    if(val==1){
        document.getElementById('CorSolida').style.display='block';
        document.getElementById('CorImagem').style.display='none';
    }
    if(val==2){
        document.getElementById('CorSolida').style.display='none';
        document.getElementById('CorImagem').style.display='block';
    }
}