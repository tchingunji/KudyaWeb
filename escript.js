
function getRestaurante(){
    $.ajax({
        url : 'http://localhost/Kudya/selecionar.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        for(var i=0; i<result.length; i++){
            $('#tbcorpo').prepend('<tr><td>'+result[i].idRestaurente+'</td><td>' + result[i].nomeRes + '</td><td>' + result[i].Localizacao + '</td><td>'+result[i].Email+'</td>  </tr>');
        }        
    });
    
}

getRestaurante();