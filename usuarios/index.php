<?php  include '../extend/header.php'; ?>
<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Alta de Usuarios</span>
                <form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
                    <div class="input-field">
                        <input type="text" name="nick" required autofocus title="8 y 15 LETRAS" pattern="[A-Za-z]{8,15}"
                        id="nick" onblur="may(this.value, this.id)">
                        <label for="nick">Nick:</label>
                    </div>
                    <div class="validacion"></div>

                    <div class="input-field">
                        <input type="password" name="pass1" required title="8 y 15 LETRAS/NUMEROS" pattern="[A-Za-z0-9]{8,15}"
                        id="pass1">
                        <label for="pass1">Contraseña:</label>
                    </div>
                    
                    <div class="input-field">
                        <input type="password" name="pass1" required title="8 y 15 LETRAS/NUMEROS" pattern="[A-Za-z0-9]{8,15}"
                        id="pass2">
                        <label for="pass2">Verificar Contraseña:</label>
                    </div>

                    <select name="nivel" required>
                        <option value="" disabled selected>ELIGE UN NIVEL DE USUARIO</option>
                        <option value="ADMISTRADOR">ADMINISTRADOR</option>
                        <option value="ASESOR">ASESOR</option>
                    </select>

                    <div class="input-field">
                        <input type="text" name="nombre" required title="Nombre del usuario" pattern="[A-Z/s ]+"
                        id="nombre" onblur="may(this.value, this.id)">
                        <label for="nombre">Nombre completo:</label>
                    </div>

                    <div class="input-field">
                        <input type="email" name="correo" required title="Correo electronico" id="correo">
                        <label for="correo">Correo Electronico:</label>
                    </div>

                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Foto:</span>
                            <input type="file" name="foto">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn black" id="btn_guardar">Guardar <i class="material-icons">send</i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php  include '../extend/scripts.php'; ?>
<script src="../js/validacion.js"></script>
</body>
</html>