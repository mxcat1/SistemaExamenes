<form action="<?=url_base?>/Autenticacion/AunteticacionLogount">
    <label for="Nombre_Usuario"><?=$_SESSION["User"][0]["PersonaNombre"]?></label>
    <input type="submit" value="Cerrar Session">
</form>