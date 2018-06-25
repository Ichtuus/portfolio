function connexion(){
    $.post('m/ajax.php', 'function=1&theName='+document.getElementById("theName").value+'&password='+document.getElementById('password').value, response);

    function response(response){
        if(response == 200){
            location.replace('v/try_connection.php');
        }else if(response == 403){
            location.replace('v/try_connection.php?code=403');
        }else if(response == 2){
            alert('Champ(s) vide(s)');
        }else{
            location.replace('v/try_connection.php?code=what');
        }
    }
}