$('#formLogin').submit(function(e){
    alert
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if(usuario.length == "" || password == ""){
        swal("Falta de información", "Rellene los campos", "warning");
        return false;
    }
    else{
        $.ajax({
            url:"comprueba_login.php",
            type: "POST",
            datatype: "json",
            data: {usuario:usuario, password:password},
            success:function(data){
                if(data == "null"){
                    swal("Error", "Nombre y/o contraseña incorrecto", "error");
                }
                else{
                    window.location.href = "index.php";
                }
            }
        });
    }
});