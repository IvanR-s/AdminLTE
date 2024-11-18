<!DOCTYPE html>
<html lang="en">
<head>
  <?php require 'layouts/head.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php require 'layouts/preloader.php'; ?>
    <?php require 'layouts/navbar.php'; ?>
    <?php require 'layouts/sidebar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de Usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="../Controlers/user_controller.php?action=crear " method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su nombre" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su correo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="Clave" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Repetir Contraseña</label>
                    <input type="password" name="Clave2" class="form-control" id="exampleInputPassword1" placeholder="Repita la contraseña" required= "required">
                  </div>
                  <div class="form-group">
                    <label>Pregunta de Seguridad</label>
                    <select class="form-control" name="PreguntaS" id="preguntaSeguridad">
                      <option value="">Seleccione una opción</option>
                      <option>¿Cuál es el nombre de tu madre?</option>
                      <option>¿Cuál fue tu primera mascota?</option>
                      <option>¿En qué escuela primaria estudiaste?</option>
                      <option>¿En qué ciudad naciste?</option>
                      <option>¿Cuál es tu color favorito?</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Respuesta</label>
                    <input type="text" name="Respuesta" class="form-control" id="exampleInputEmail1" placeholder="Ingresa la respuesta a la pregunta">
                  </div>
                  
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Acepto los <a href="#">terminos del Servicio</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'layouts/footer.php'; ?>
  <?php require 'layouts/sidebar-dark.php'; ?>
</div>
<!-- ./wrapper -->
<?php require 'layouts/script.php'; ?>
<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
      submit();
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Por favor ingrese un correo electronico.",
        email: "Por favor ingrese un correo electronico valido."
      },
      password: {
        required: "Por favor proporcione una contraseña.",
        minlength: "Tu contraseña debe tener al menos 5 caracteres."
      },
      terms: "Por favor acepte los terminos del servicio."
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>