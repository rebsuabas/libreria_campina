<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form method="POST" action="">
            <h2>Registro</h2>
            <hr>
            <br />
            <label><b>Nombre completo</b></label> 
            <br />
            <br />
            <input type="text" name="nombre" value="Nombre" required />
            <input type="text" name="apellidos" value="Apellidos" required />
            <br />
            <br />
            <br />
            <label><b>Usuario</b></label>
            <br />
            <br />
            <input type="text" name="usuario" required />
            <br />
            <br />
            <br />
            <label><b>Contraseña</b></label>
            <br />
            <br />
            <input type="password" name="contrasena" required />
            <br />
            <br />
            <br />
            <label><b>Correo electrónico</b></label>
            <br />
            <br />
            <input type="text" name="email" required />
            <br />
            <br />
            <br />
            <label><b>Fecha de nacimiento</b></label>
            <br />
            <br />
            <input type="date" name="fecha_nacimiento" required />
            <br />
            <br />
            <br />
            <label><b>Dirección de envío</b></label>
            <br />
            <br />
            <label>Dirección</label> 
            <br />
            <input type="text" name="direccion" required />
            <br />
            <br />
            <label>Ciudad</label>
            <br />
            <input type="text" name="ciudad" required />
            <br />
            <br />
            <label>Provincia</label>
            <br />
            <input type="text" name="provincia" required />
            <br />
            <br />
            <label>Código Postal</label>
            <br />
            <input type="text" name="codigo_postal" required />
            <br />
            <br />
            <br />
            <label><b>Género</b></label>
            <br />
            <br />
            <input type="radio" name="genero" value="Hombre" /><label>Hombre</label><br />
            <input type="radio" name="genero" value="Mujer" /><label>Mujer</label><br />
            <input type="radio" name="genero" value="Otro" /><label>Otro</label>
            <br />
            <br />
            <br />
            <h4>Método de pago</h4>
            <br />
            <input type="radio" name="metodo_pago" value="Tarjeta de crédito o débito" /><label><b>Tarjeta de crédito o débito</b></label>
            <br/>
            <br />
                <label>Número de la tarjeta</label>
                <br />
                <input type="text" name="numero_tarjeta" />
                <br />
                <br />
                <label>Fecha de caducidad</label>
                <br />
                <input type="date" name="fecha_caducidad" />
                <br/>
                <br />
                <label>CVV</label>
                <br />
                <input type="text" name="cvv">
                <br />
                <br />
                <br />
            <input type="radio" name="metodo_pago" value="PayPal" /><label><b>PayPal</b></label>
            <br />
            <br />
                <label>Correo electrónico de cuenta PayPal</label>
                <br />
                <input type="email" name="email_Paypal" />
                <br />
                <br />
                <label>Contraseña PayPal</label>
                <br />
                <input type="password" name="contrasena_paypal" />
            <br />
            <br />
            <br />
            <input type="reset" name="limpiar" value="Limpiar" />
            <input type="submit" name="registrar" value="Registrar" />
            <input type="submit" name="volver" value="Volver" />
        </form>
    </body>
</html>