alert("Config js in my project");


    function resposta(){

    var resposta;
    resposta = document.form1.value.reposta.value;
    if(reposta=="1"){
    alert("Acertou!!");

    return false;
    }else{
    alert('Errou!!');
    }
    }