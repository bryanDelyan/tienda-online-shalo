<!--ARREGLOSXDD-->

<style>
  .footer-bg {
    background-color: #252525;
  }

  .phone, .correo, .home, .colecciones {
    color: white !important;
    text-decoration: none;
  }
</style>

<footer class="footer-bg" id="tempaltemo_footer">
  <!-- Start Footer-->
  <div class="copyright_section">
    <div class="container">
      <div class="row">
        <!--Contacto de Shalom Pijamas-->
        <div class="col-md-4 pt-5">
          <h2 class="h2 text-light border-bottom pb-3 border-dark">Shalom Pijamas</h2>
          <!--Contactos de Shalom Pijamas-->
          <ul class="list-unstyled text-light footer-link-list">
            <li>
              <i class="fas fa-map-marker-alt fa-fw"></i>
              Calle 4N #7E-30 Los Pinos
            </li>
            <li>
              <i class="fa fa-phone fa-fw"></i>
              <a class="phone" href="tel:+573004413069">+57 300 4413069</a>
            </li>
            <li>
              <i class="fa fa-envelope fa-fw"></i>
              <a class="correo" href="mailto:Jperez540@misena.edu.co">Jperez540@misena.edu.co</a>
            </li>
          </ul>
        </div>

        <!--Informacion Adicional-->
        <div class="col-md-4 pt-5">
          <h2 class="h2 text-light border-bottom pb-3 border-dark text-end">Información</h2>
          <ul class="list-unstyled text-light footer-link-list">
            <li><a class="home" href="#">Home</a></li>
            <li><a class="colecciones" href="#categoria2">Colecciones</a></li>
          </ul>
        </div>
      </div>
      <!-- copyright section end -->

      <!--Redes Sociales-->
      <div class="row text-light mb-4">
        <div class="col-12 mb-3">
          <div class="w-100 my-3 border-top border-dark"></div>
        </div>
        <div class="col-auto me-auto">
          <ul class="list-inline text-left footer-icons">
            <li class="list-inline-item border border-dark rounded-circle text-center">
              <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/reel/6137300836308507?sfnsn=scwspwa&mibextid=5xHrnq"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
            </li>
            <li class="list-inline-item border border-dark rounded-circle text-center">
              <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/pijamas__shalom?igsh=MWY3YWtpaDBkNnhoZA=="><i class="fab fa-instagram fa-lg fa-fw"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalCarrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Mi carrito</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle" id="tableListaCarrito">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Talla</th>
                  <th>Cantidad</th>
                  <th>SubTotal</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="d-flex justify-content-around mb-3">
          <h3 id="totalGeneral"></h3>
          <?php if (!empty($_SESSION['correoCliente'])) { ?>
          <a class="btn btn-outline-primary" href="<?php echo BASE_URL . 'clientes'; ?>">Procesar Pedido</a>
          <?php } else { ?>
          <a class="btn btn-outline-primary" href="#" onclick="abrirModalLogin();">Login</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Botón de WhatsApp -->
  <div id="whatsapp-button">
    <a href="https://wa.me/+573004413069?text=¡Chatea Conmigo!" target="_blank">
      <img src="<?php echo BASE_URL . 'assets/images/whatsapp.jpg'; ?>">
    </a>
  </div>
  <style>
    #whatsapp-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
      display: flex;
      justify-content: flex-end;
      align-items: end;
    }

    #whatsapp-button img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
    }
  </style>

  <!-- Modal de Login y Recuperación de Contraseña -->
  <div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login y Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-3">
          <div class="text-center">
            <img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL . 'assets/img/logo.png'; ?>" alt="" width="100">
          </div>
          <div class="row">
            <!-- Formulario de Login -->
            <div class="col-md-12" id="frmLogin">
              <div class="form-group mb-3">
                <label for="correoLogin"><i class="fas fa-envelope"></i> Correo</label>
                <input id="correoLogin" class="form-control" type="text" name="correoLogin" placeholder="Correo Electrónico">
              </div>
              <div class="form-group mb-3">
                <label for="claveLogin"><i class="fas fa-key"></i> Contraseña</label>
                <input id="claveLogin" class="form-control" type="password" name="claveLogin" placeholder="Contraseña">
              </div>
              <a href="#" id="btnForgotPassword">Olvidé mi contraseña</a>
              <a href="#" id="btnRegister">Todavía no tienes una cuenta?</a>
              <div class="float-right">
                <button class="btn btn-primary" type="button" id="login">Login</button>
              </div>
            </div>

            <!-- Formulario de Recuperación de Contraseña -->
            <div class="col-md-12 d-none" id="frmForgotPassword">
              <form action="enviar_token.php" method="POST">
                <div class="form-group mb-3">
                  <label for="email"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                  <input id="email" class="form-control" type="email" name="email" placeholder="Correo Electrónico" required>
                </div>
                <div class="float-right">
                  <button class="btn btn-primary" type="submit">Enviar enlace de recuperación</button>
                  <button class="btn btn-secondary" type="button" id="cancelForgotPassword">Cancelar</button>
                </div>
              </form>
            </div>

            <!-- Formulario de Actualización de Contraseña -->
            <div class="col-md-12 d-none" id="frmUpdatePassword">
              <div class="form-group mb-3">
                <label for="codigoRecuperacion"><i class="fas fa-code"></i> Código de Recuperación</label>
                <input id="codigoRecuperacion" class="form-control" type="text" name="codigoRecuperacion" placeholder="Código de Recuperación">
              </div>
              <div class="form-group mb-3">
                <label for="nuevaClave"><i class="fas fa-key"></i> Nueva Contraseña</label>
                <input id="nuevaClave" class="form-control" type="password" name="nuevaClave" placeholder="Nueva Contraseña">
              </div>
              <div class="float-right">
                <button class="btn btn-primary" type="button" id="updatePassword">Actualizar Contraseña</button>
                <button class="btn btn-secondary" type="button" id="cancelUpdatePassword">Cancelar</button>
              </div>
            </div>

            <!-- Formulario de Registro -->
            <div class="col-md-12 d-none" id="frmRegister">
              <div class="form-group mb-3">
                <label for="nombreRegistro"><i class="fas fa-list"></i> Nombre</label>
                <input id="nombreRegistro" class="form-control" type="text" name="nombreRegistro" placeholder="Nombre Completo">
              </div>
              <div class="form-group mb-3">
                <label for="correoRegistro"><i class="fas fa-envelope"></i> Correo</label>
                <input id="correoRegistro" class="form-control" type="text" name="correoRegistro" placeholder="Correo Electrónico">
              </div>
              <div class="form-group mb-3">
                <label for="claveRegistro"><i class="fas fa-key"></i> Contraseña</label>
                <input id="claveRegistro" class="form-control" type="password" name="claveRegistro" placeholder="Contraseña">
              </div>
              <a href="#" id="btnLogin">Ya tienes una cuenta?</a>
              <div class="float-right">
                <button class="btn btn-primary" type="button" id="registrarse">Registrarse</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Javascript files-->
<script src="<?php echo BASE_URL; ?>assets/principal/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL; ?>assets/principal/js/plugin.js"></script>
<!-- sidebar -->
<script src="<?php echo BASE_URL; ?>assets/principal/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/principal/slick/slick.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
<script src="<?php echo BASE_URL; ?>assets/principal/js/custom.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/all.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  const base_url = '<?php echo BASE_URL; ?>';

  function alertaPerzanalizada(mensaje, type, titulo = '') {
    toastr[type](mensaje, titulo)

    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  }

  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  $(document).ready(function() {
    $('#btnForgotPassword').click(function() {
      $('#frmLogin').addClass('d-none');
      $('#frmForgotPassword').removeClass('d-none');
    });

    $('#cancelForgotPassword').click(function() {
      $('#frmForgotPassword').addClass('d-none');
      $('#frmLogin').removeClass('d-none');
    });

    $('#btnRegister').click(function() {
      $('#frmLogin').addClass('d-none');
      $('#frmRegister').removeClass('d-none');
    });

    $('#btnLogin').click(function() {
      $('#frmRegister').addClass('d-none');
      $('#frmLogin').removeClass('d-none');
    });
  });
</script>
<script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>

