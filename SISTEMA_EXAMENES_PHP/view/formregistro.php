<h3>Registrarse</h3>
<form action="<?=url_base?>Persona/Registrarse" method="post">
    <input type="text" name="txtidusu" id="txtidusu" placeholder="Nro de Identificacion(DNI, otros)" required>
    <input type="text" name="txtnomusu" id="txtnomusu" placeholder="Nombres" required>
    <input type="text" name="txtapeusu" id="txtapeusu" placeholder="Apellidos" required>
    <input type="date" name="dtfenacusu" id="dtfenacusu" placeholder="Fecha de Nacimiento" required>
    <label for="rbsexom">Masculino</label>
    <input type="radio" name="rbsexo" id="rbsexom" value="Masculino" checked>
    <label for="rbsexof">Femenino</label>
    <input type="radio" name="rbsexo" id="rbsexof" value="Femenino">
    <input type="text" name="txtpaisusu" id="txtpaisusu" placeholder="Pais">
    <label for="rbsincontrato">Sin Contrato</label>
    <input type="radio" name="rbcontrato" id="rbsincontrato" value="Sin Contrato" checked>
    <label for="rbconcontrato">Con Contrato</label>
    <input type="radio" name="rbcontrato" id="rbconcontrato" value="Con Contrato">
    <input type="text" name="txtnrocontrato" id="txtnrocontrato" placeholder="Nro de contrato">
    <input type="text" name="txtnombreusuario" id="txtnombreusuario" placeholder="Nombre de Usuario" required>
    <input type="password" name="passusuario" id="passusuario" placeholder="Contraseña" required>
    <input type="password" name="veripassusuario" id="veripassusuario" placeholder="Repetir Contraseña" required>
    <input type="submit" value="Registrarse">
    <button type="button"><a href="<?=url_base?>">Cancelar</a></button>
</form>

<?php
    if (isset($_SESSION["Registro"])){
        echo "Usuario Registrado Sadisfactorimente";
        session_destroy();
    }else{
        echo "OCURRIO ALGUN ERROR";
    }
?>