<!DOCTYPE html>
<html lang="es">

<head>

   <title><?php echo TITLE; ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!--Iconos de la pestaña-->
   <link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192" href="<?php echo BASE_URL; ?>assets/favicon/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>assets/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL; ?>assets/favicon/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>assets/favicon/favicon-16x16.png">
   <link rel="manifest" href="<?php echo BASE_URL; ?>assets/favicon/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="<?php echo BASE_URL; ?>assets/favicon/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">

   <!-- Meta -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Shalom Pijamas</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   
   <!-- bootstrap css -->
   <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/templatemo.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/custom.css">


    <!-- Start Top Nav -->
    <nav style="background-color: #252525" class="navbar navbar-expand-lg navbar-bg navbar-dark d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div style="background-color:#252525" class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:Jperez540@misena.edu.co">Jperez540@misena.edu.co</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+57300 4413069">+57 300 4413069</a>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <span class="me-2">Conoce nuestras redes | </span>
                    <a class="text-light px-2" href="https://www.facebook.com/reel/6137300836308507?sfnsn=scwspwa&mibextid=5xHrnq" target="_blank" rel="sponsored">
                        <i class="fab fa-facebook-f fa-sm fa-fw"></i>
                    </a>
                    <a class="text-light px-2" href="https://www.instagram.com/pijamas__shalom?igsh=MWY3YWtpaDBkNnhoZA==" target="_blank">
                        <i class="fab fa-instagram fa-sm fa-fw"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/principal/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/principal/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="<?php echo BASE_URL; ?>assets/principal/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/principal/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
   <!-- font awesome -->
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
   <!-- owl stylesheets -->
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/principal/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/principal/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/principal/slick/slick.css">
   <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/principal/slick/slick-theme.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&currency=<?php echo MONEDA; ?>"></script>
   <style>
      .table>tbody>tr>td {
         vertical-align: middle;
      }

      .search-container {
         position: relative;
      }

      #resultBusqueda {
         position: absolute;
         top: 100%;
         left: 0;
         width: 100%;
         max-height: 300px;
         overflow-y: auto;
         background-color: white;
         z-index: 9999;
         transition: opacity 0.3s ease;
         display: flex !important;
         justify-content: space-between !important;
         align-items: center !important;
      }

      .result-item {
         display: flex;
         align-items: center;
         padding: 10px;
         border-bottom: 1px solid #ddd;
         cursor: pointer;
         transition: background-color 0.3s ease, transform 0.3s ease;
      }

      .result-item:hover {
         background-color: #f1f1f1;
         transform: scale(1.02);
      }

      .result-item:last-child {
         border-bottom: none;
      }

      .result-item img {
         width: 50px;
         height: 50px;
         object-fit: cover;
         margin-right: 10px;
      }

      .result-item .title {
         font-size: 16px;
         font-weight: bold;
      }

      .result-item .description {
         font-size: 14px;
         color: #666;
      }

      @media (max-width: 768px) {
         #resultBusqueda {
            max-height: 200px;
         }

         .result-item {
            padding: 8px;
            font-size: 14px;
         }
      }

      body.searching #mainContent {
         opacity: 0.5;
         
      }

      body.searching #resultBusqueda {
         display: block;
      }
   </style>
</head>

<body>
   <!-- banner bg main start -->
   <div class="banner_bg_main">
      <!-- logo section start -->
      <div style="background-color:#F4C2C2" class="logo_section">
         <div style="background-color:#F4C2C2"class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/shalom-logo.png" width="130"></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- logo section end -->
      <!-- header section start -->
      <div style="height:auto; padding: 20px 20px"class="header_section">
         <div class="container">
            <div class="containt_main">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <?php foreach ($data['categorias'] as $categoria) { ?>
                     <a href="#categoria_<?php echo $categoria['id']; ?>"><?php echo $categoria['categoria']; ?></a>
                  <?php } ?>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="<?php echo BASE_URL; ?>assets/principal/images/toggle-icon.png"></span>

               <div class="main">
                  <div class="search-container">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="¿Qué estas buscando?" autocomplete="off" id="search">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                              <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                     <div class="position-absolute row" id="resultBusqueda" style="display: none;"></div>
                  </div>
               </div>
               <div class="header_box">
                  <div class="login_menu">
                     <ul>
                        <li><a href="#" id="verCarrito">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10" id="btnCantidadCarrito">Cart</span></a>
                        </li>
                        <?php if (empty($_SESSION['nombreCliente'])) {
                           echo '<li><a href="#" data-toggle="modal" data-target="#modalLogin">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <span class="padding_10">Login</span></a>
                           </li>';
                        } else {
                           echo '<li><a href="' . BASE_URL . 'clientes">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <span class="padding_10 text-capitalize">' . $_SESSION['nombreCliente'] . '</span></a>
                           </li>';
                        }
                        ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- Add your JS script here to toggle display of #resultBusqueda -->
      <script>
         document.getElementById('search').addEventListener('input', function() {
            var searchValue = this.value.toLowerCase();
            var results = document.getElementById('resultBusqueda');

            // Simulate fetching search results
            if (searchValue.length > 2) {
               // Example of results
               results.innerHTML = `
                  <div class="result-item">
                     <img src="path/to/image1.jpg" alt="Imagen">
                     <div>
                        <div class="title">Resultado 1</div>
                        <div class="description">Descripción del resultado 1.</div>
                     </div>
                  </div>
                  <div class="result-item">
                     <img src="path/to/image2.jpg" alt="Imagen">
                     <div>
                        <div class="title">Resultado 2</div>
                        <div class="description">Descripción del resultado 2.</div>
                     </div>
                  </div>
               `;
               results.style.display = 'block';
            } else {
               results.style.display = 'none';
            }
         });
      </script>
   </div>
</body>

</html>