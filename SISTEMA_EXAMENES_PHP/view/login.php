
<div>
    <h3>Incio de Cession</h3>
    <form action="<?=url_base?>Autenticacion/AunteticacionLogeo" method="post">
        <label for="txtnom_usu"></label>
        <input type="text" name="txtnom_usu" id="txtnom_usu" required placeholder="Nombre de Usuario">
        <label for="pass_usu"></label>
        <input type="text" name="pass_usu" id="pass_usu" required placeholder="Contraseña">
        <input type="submit" value="Enviar">
    </form>
</div>

<a href="<?=url_base?>Persona/RegistroFormulario">Registrarse</a>
