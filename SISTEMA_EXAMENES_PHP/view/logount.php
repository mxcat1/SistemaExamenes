
<form action="<?=url_base?>/Autenticacion/AutenticacionLogount">
    <label for="Nombre_Usuario"><?=isset($_SESSION["User"][0]["PersonaNombre"])?$_SESSION["User"][0]["PersonaNombre"]:"Usuario no encontrado" ?></label>
    <input type="submit" value="Cerrar Session">
</form>