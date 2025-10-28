<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>NOTICIAS SON NOTICIAS 2025</title>

    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/blog/blog.css" rel="stylesheet">
    <style>
      /* Estilo para la imagen de fondo del jumbotron */
      .jumbotron-with-bg {
        background-size: cover;
        background-position: center;
        /* Asegúrate de que el texto sea legible sobre la imagen */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        min-height: 300px; /* Altura mínima para que la imagen se vea bien */
        display: flex;
        align-items: center; /* Centra verticalmente el contenido */
      }
      /* Estilo para las imágenes en las cards */
      .card-img-right {
        width: 200px; /* Ancho fijo para las imágenes en las tarjetas */
        height: 250px; /* Altura fija para las imágenes en las tarjetas */
        object-fit: cover; /* Asegura que la imagen cubra el espacio sin distorsionarse */
        border-radius: 0 3px 3px 0;
      }
      .card-body {
        flex: 1; /* Permite que el cuerpo de la tarjeta ocupe el espacio restante */
      }
      .card.flex-md-row {
        height: 250px; /* Altura fija para todas las tarjetas */
      }
    </style>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">Jose Manuel Vasquez Ramos</a>
          </div>
        </div>
      </header>

      <?php
        include("secciones/portada.php");
      ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark jumbotron-with-bg" style="background-image: url('<?php echo $portada["imagen"]; ?>');">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic">
            <?php
              echo $portada["titulo"];
            ?>
          </h1>
          <p class="lead my-3">
            <?php
              echo $portada["resumen"];
            ?>
          </p>
        </div>
      </div>

      <?php
        include("secciones/internacional.php");
        include("secciones/nacional.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $internacional["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $internacional["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $internacional["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $internacional["imagen"]; ?>" alt="Imagen de Noticia Internacional">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Nacional</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $nacional["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $nacional["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $nacional["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $nacional["imagen"]; ?>" alt="Imagen de Noticia Nacional">
          </div>
        </div>
      </div>
      <?php
        include("secciones/economia.php");
        include("secciones/opinion.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-secondary">Economía</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $economia["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $economia["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $economia["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $economia["imagen"]; ?>" alt="Imagen de Noticia Economía">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Opinión</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $opinion["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $opinion["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $opinion["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $opinion["imagen"]; ?>" alt="Imagen de Noticia Opinión">
          </div>
        </div>
      </div>
      <?php
        include("secciones/tecnologia.php");
        include("secciones/ciencia.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Tecnología</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $tecnologia["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $tecnologia["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $tecnologia["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $tecnologia["imagen"]; ?>" alt="Imagen de Noticia Tecnología">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Ciencia</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $ciencia["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $ciencia["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $ciencia["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $ciencia["imagen"]; ?>" alt="Imagen de Noticia Ciencia">
          </div>
        </div>
      </div>
      <?php
        include("secciones/cultura.php");
        include("secciones/gente.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-secondary">Cultura</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $cultura["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $cultura["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $cultura["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $cultura["imagen"]; ?>" alt="Imagen de Noticia Cultura">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Gente</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $gente["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $gente["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $gente["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $gente["imagen"]; ?>" alt="Imagen de Noticia Gente">
          </div>
        </div>
      </div>
      <?php
        include("secciones/deportes.php");
        include("secciones/television.php");
        include("secciones/video.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Deportes</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $deportes["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $deportes["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $deportes["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $deportes["imagen"]; ?>" alt="Imagen de Noticia Deportes">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Televisión</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $television["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $television["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $television["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $television["imagen"]; ?>" alt="Imagen de Noticia Televisión">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Vídeo</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $video["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $video["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $video["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $video["imagen"]; ?>" alt="Imagen de Noticia Vídeo">
          </div>
        </div>
      </div>
      <?php
        include("secciones/formacion.php");
        include("secciones/empleo.php");
        include("secciones/sociedad.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Formación</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $formacion["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $formacion["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $formacion["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $formacion["imagen"]; ?>" alt="Imagen de Noticia Formación">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Empleo</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $empleo["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $empleo["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $empleo["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $empleo["imagen"]; ?>" alt="Imagen de Noticia Empleo">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Sociedad</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $sociedad["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $sociedad["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $sociedad["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $sociedad["imagen"]; ?>" alt="Imagen de Noticia Sociedad">
          </div>
        </div>
      </div>
      <?php
        include("secciones/openstack.php");
        include("secciones/git.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">OpenStack</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $openstack["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $openstack["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $openstack["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $openstack["imagen"]; ?>" alt="Imagen de Noticia OpenStack">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Git</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $git["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $git["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $git["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $git["imagen"]; ?>" alt="Imagen de Noticia Git">
          </div>
        </div>
      </div>
      <?php
        include("secciones/contenedores.php");
        include("secciones/openshift.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-secondary">Contenedores</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $contenedores["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $contenedores["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $contenedores["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $contenedores["imagen"]; ?>" alt="Imagen de Noticia Contenedores">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">OpenShift</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">
                  <?php echo $openshift["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-1 text-muted">
                <?php echo $openshift["autor"]; ?>
              </div>
              <p class="card-text mb-auto">
                <?php echo $openshift["resumen"]; ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo $openshift["imagen"]; ?>" alt="Imagen de Noticia OpenShift">
          </div>
        </div>
      </div>
      </div>


    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script>
      // Eliminamos Holder.js ya que ahora usamos imágenes reales
      // Holder.addTheme('thumb', {
      //   bg: '#55595c',
      //   fg: '#eceeef',
      //   text: 'Thumbnail'
      // });
    </script>
  </body>
</html>