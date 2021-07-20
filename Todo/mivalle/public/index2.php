<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- header("refresh:2;index.php"); -->


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Mi Valle</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/Simbolo tu valle.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/Simbolo tu valle.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/Simbolo tu valle.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/Simbolo tu valle.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================--> <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/ok.css">
    <link rel="stylesheet" href="assets/css/blog.css">

  </head>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
  <main class="main" id="top" >
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index2.php"><span class="text-light fs-2 fw-bold ms-2">Mi Valle</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-4"><a class="nav-link fw-bold active" aria-current="page" href="#header" >Valledupar</a></li>
              <li class="nav-item px-4"><a class="nav-link fw-bold" href="#store">¿Que somos?</a></li>
              <li class="nav-item px-4"><a class="nav-link fw-bold" href="#contact">Contacto</a></li>
              <li class="nav-item px-4"><a class="nav-link fw-bold" href="#collections">Galeria</a></li>
            </ul>
            <form class="d-flex"><a class="text-primary" href="#!">
                <svg class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg></a>
              <div class="ms-4 text-light fw-bold"> 3(163) 027407 </div>
            </form>
          </div>
        </div>
      </nav>
      <section class="py-0" id="header">
      <div class="bg-holder" style="background-image:url(assets/img/gallery/3.jpeg); background-position:right top;background-size: 960px 660px;">
        </div>
        
        <!-- Buscador -->
        <div class="todo px-7">
              <div class="buscar">
                  <form name="formulario" role="form" method ="post">
                  <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre"  value="" placeholder ="NOMBRE"/>
                      <div class="btnn">
                      <i class="fas fa-search"></i>
                      </div>
                  </form>
              </div>
</div>              
    <?php
    if ($_SERVER ['REQUEST_METHOD']==='POST') 
    {
        include('Funciones.php');
        $vid=$_POST['nombre'];
        
        $miconexion=conectar_bd ('','mivalle');
        $resultado=consulta ($miconexion, "select * from servicio where trim(nombre) like '%{$vid}%'"); 
                        if($resultado->num_rows>0)
                        {
                            while ($fila = $resultado ->fetch_object())
                            {
                                echo $fila ->id." ".$fila ->nombre." ".$fila->direccion." ".$fila ->descripcion." ".$fila ->fecha."<br>";
                                                }
                                        }
                                else {
                                    echo "No existen registros";
                                    }
                        $miconexion -> close ();                       
    }?>

<br>
        <!--/.bg-holder-->
        <div class="container">
          <div class="pt-4 row align-items-center min-vh-75 min-vh-xl-100">
            <div class="col-md-8 col-lg-6 text-md-start text-center">
              <h1 class="display-1 lh-sm text-uppercase text-light">Disfruta de todo lo que tiene <br class="d-none d-xxl-block" /> Valledupar</h1>
              <div class="pt-2"><a class="btn btn-sm btn-outline-primary me-3" href="/public/login.php">Login</a> <a class="btn btn-sm btn-outline-primary" href="/public/signup.php">Signup</a> </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-black py-8 pt-0" id="store">
      <div class="bg-holder" style="background-image:url(assets/img/gallery/20.jpeg);background-position:left top;background-size: 870px;">
        </div>
        <!--/.bg-holder-->

        <div class="container-lg">
          <div class="row flex-center">
            <div class="col-6 order-md-0 text-center text-md-start"></div>
            <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start">
              <div class="col-4 position-relative ms-auto py-5"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
              <div class="carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row h-100">
                      <div class="col-12">
                        <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase text-center">Mi Valle</h5>
                        <p class="my-4 pe-xl-5">Plataforma digital, que te permite conocer todos los destinos turísticos de la ciudad de Valledupar, además te permitimos conocer la diferente variedad que encontramos en la cuidad; Como las discotecas, los bares, los restaurantes, los hoteles, también te brindamos una reseña de lo que ha sido la historia de la cuidad y de sus monumentos y glorietas. Te recomendamos  los mejores sitios donde puedes disfrutar con tu familia, pareja o amigos, donde puedes tener una mejor comodidad y seguridad. En nuestra plataforma encuentras direcciones y guía para estar más conectado a nuestra ciudad y también nuestra cultura.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100">
                      <div class="col-12">
                        <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase text-center">Mi Valle</h5>
                        <p class="my-4 pe-xl-5">Con nuestra pagina tus vacaciones estaran garantizadas, podras conocer todo Valledupar pobrar su gastronomia sus paisajes y historia.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100">
                      <div class="col-12">
                        <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase text-center">Mi Valle</h5>
                        <p class="my-4 pe-xl-5">Si nesecita algo de Valledupar no dudes comunicarte con nosotros, si nesecitas conocer a Valledupar y no sabes por donde empezar no dudes en comunicarte con nosotros</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-0 pb-6" id="collections">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mt-7">
              <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">Collections</h5>
            </div>
            <div class="col-12">
              <nav>
                <div class="nav nav-tabs watch-tabs mb-4 justify-content-end" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true">LATEST </button>
                  <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="false">POPULAR</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                  <div class="carousel slide" id="carouselLatest" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100 align-items-center">
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar.jfif" width="200px" height="200px"/>
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$650.00</h6>
                                <h4 class="text-light">ADRIATICA ADR</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar1.jfif "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$126.00</h6>
                                <h4 class="text-light">SEIKO SNZGO7K1</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar3.jfif "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$250.00</h6>
                                <h4 class="text-light">ROAMER RM 220837</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <div class="row h-100 align-items-center">
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar4.jfif "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$650.00</h6>
                                <h4 class="text-light">ADRIATICA ADR</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar5.jfif "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$126.00</h6>
                                <h4 class="text-light">SEIKO SNZGO7K1</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar6.jfif "width="200px" height="200px"/>
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$250.00</h6>
                                <h4 class="text-light">ROAMER RM 220837</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="3000">
                        <div class="row h-100 align-items-center">
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar7.jfif "width="200px" height="200px"  />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$650.00</h6>
                                <h4 class="text-light">ADRIATICA ADR</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar8.jfif "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$126.00</h6>
                                <h4 class="text-light">SEIKO SNZGO7K1</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar9.jfif "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$250.00</h6>
                                <h4 class="text-light">ROAMER RM 220837</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row h-100 align-items-center">
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar10.jfif "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$650.00</h6>
                                <h4 class="text-light">ADRIATICA ADR</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar11.jfif "width="200px" height="200px"/>
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$126.00</h6>
                                <h4 class="text-light">SEIKO SNZGO7K1</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/valledupar12.jfif "width="200px" height="200px"/>
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$250.00</h6>
                                <h4 class="text-light">ROAMER RM 220837</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselLatest" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselLatest" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                  <div class="carousel slide" id="carouselPopular" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100 align-items-center">
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img"  src="assets/img/gallery/Rio.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$650.00</h6>
                                <h4 class="text-light">ADRIATICA ADR</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img"src="assets/img/gallery/Rio1.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$126.00</h6>
                                <h4 class="text-light">SEIKO SNZGO7K1</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/Rio2.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$250.00</h6>
                                <h4 class="text-light">ROAMER RM 220837</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <div class="row h-100 align-items-center">
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/Rio3.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$650.00</h6>
                                <h4 class="text-light">ADRIATICA ADR</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/Rio4.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$126.00</h6>
                                <h4 class="text-light">SEIKO SNZGO7K1</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/Rio5.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$250.00</h6>
                                <h4 class="text-light">ROAMER RM 220837</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="3000">
                        <div class="row h-100 align-items-center">
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/Rio6.jpg "width="200px" height="200px"/>
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$650.00</h6>
                                <h4 class="text-light">ADRIATICA ADR</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img"src="assets/img/gallery/Rio7.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$126.00</h6>
                                <h4 class="text-light">SEIKO SNZGO7K1</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/Rio8.jpg"width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$250.00</h6>
                                <h4 class="text-light">ROAMER RM 220837</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row h-100 align-items-center">
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/rio9.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$650.00</h6>
                                <h4 class="text-light">ADRIATICA ADR</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img"src="assets/img/gallery/Rio10.jpg "width="200px" height="200px"/>
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$126.00</h6>
                                <h4 class="text-light">SEIKO SNZGO7K1</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="assets/img/gallery/Rio11.jpg "width="200px" height="200px" />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary">$250.00</h6>
                                <h4 class="text-light">ROAMER RM 220837</h4>
                              </div><a class="stretched-link" href="#"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPopular" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPopular" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6 bg-dark">

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center"><img src="assets/img/gallery/rado.png" alt="brands" /></div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center"><img src="assets/img/gallery/swatch.png" alt="brands" /></div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center"><img src="assets/img/gallery/omega-1.png" alt="brands" /></div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center"><img src="assets/img/gallery/zenith.png" alt="brands" /></div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="testimonial">

<div class="container">
  <div class="row">
    <div class="col-lg-7 mx-auto text-center my-5">
      <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">Conoce a los desarrolladores</h5>
    </div>
  </div>
  <div class="row flex-center h-100">
    <div class="col-xl-9">
      <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row h-100 justify-content-center">
              <div class="col-md-6 mb-4">
                <div class="card h-100 shadow card-span p-3 bg-black">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/Pedro.jpg" width="100px" height="100px" /> 
                      <div class="flex-1 ms-4">
                        <h6 class="fs-lg-1 mb-1 text-uppercase">Pedro Marquez</h6> 
                      </div>
                    </div>
                    <p class="mb-0 mt-4 fw-light lh-lg"> Estoy en proceso de aprendijaze en Ing. Sistema y ADSi. Me encanta la Tecnologia por ese motivo estoy aprendiendo multiples lenguajes de programacion, tambien estoy estudiando el idioma ingles para asi en un uturo expander mis conosimientos</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="card h-100 shadow card-span p-3 bg-black">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/AlexCGDesign.png" width="100px" height="100px" />
                      <div class="flex-1 ms-4">
                        <h6 class="fs-lg-1 mb-1 text-uppercase">Manuel</h6>
                      </div>
                    </div>
                    <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <div class="row h-100 justify-content-center">
              <div class="col-md-6 mb-4">
                <div class="card h-100 shadow card-span p-3 bg-black">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/Juan.jpeg" width="100px" height="100px" />
                      <div class="flex-1 ms-4">
                        <h6 class="fs-lg-1 mb-1 text-uppercase">Juan carlos</h6>
                      </div>
                    </div>
                    <p class="mb-0 mt-4 fw-light lh-lg">Nacido en San Diego (Cesar) Estudiante del Servicio Nacional de Aprendizaje (SENA) específicamente el programa de Análisis y desarrollo de sistemas de información (ADSI) 17 años de edad.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="card h-100 shadow card-span p-3 bg-black">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/pipe.jfif" width="100px" height="100px" />
                      <div class="flex-1 ms-4">
                        <h6 class="fs-lg-1 mb-1 text-uppercase">Andres Felipe Beltran Mendoza</h6>
                      </div>
                    </div>
                    <p class="mb-0 mt-4 fw-light lh-lg">Vivo con mis padres y mi hermano, tengo 18 años, estudio ADSI y en el futuro quiero estudiar fisioterapia.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row h-100 justify-content-center">
              <div class="col-md-6 mb-4">
                <div class="card h-100 shadow card-span p-3 bg-black">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/reyes.jpeg" width="100px" height="100px" /> 
                      <div class="flex-1 ms-4">
                        <h6 class="fs-lg-1 mb-1 text-uppercase">Andres Reyes</h6>
                      </div>
                    </div>
                    <p class="mb-0 mt-4 fw-light lh-lg">Nacido en Barranquilla(Atlántico) Estudiante del Servicio Nacional de Aprendizaje (SENA) específicamente el programa de Análisis y desarrollo de sistemas de información (ADSI) 19 años de edad</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="card h-100 shadow card-span p-3 bg-black">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/Robinson.jpeg" width="100px" height="100px" />
                      <div class="flex-1 ms-4">
                        <h6 class="fs-lg-1 mb-1 text-uppercase">Robinson Jose</h6>
                      </div>
                    </div>
                    <p class="mb-0 mt-4 fw-light lh-lg">Tengo 19 años, nací en Valledupar, soy estudiante de ADSI en el sena, además estoy aprendiendo el idioma inglés.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5 flex-center">
          <div class="col-auto position-relative z-index-2">
            <ol class="carousel-indicators">
              <li class="active mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="0"></li>
              <li class="mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
              <li class="mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0 pt-7" id="contact">

<div class="container">
  <div class="row">
    <div class="col-6 col-sm-4 col-xl-3 mb-3">
      <h4 class="lh-lg fw-bold text-light">Mi Valle</h4>
    </div>
    <div class="col-6 col-sm-4 col-xl-3 mb-3">
      <h5 class="lh-lg fw-bold text-light">MENU</h5>
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Shipping Info</a></li>
        <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Refunds</a></li>
        <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">How to Order</a></li>
        <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">How to Track</a></li>
        <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Size Guides</a></li>
      </ul>
    </div>
    <div class="col-6 col-sm-4 col-xl-3 mb-3">
      <h5 class="mb-5"></h5>
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Contact Us</a></li>
        <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">my account</a></li>
      </ul>
    </div>
    <div class="col-12 col-xl-3">
      <h5 class="lh-lg fw-bold text-light text-uppercase">Signup For our Latest News</h5>
      <div class="row input-group-icon mb-5">
        <div class="col-12">
          <form class="row row-cols-lg-auto g-0 align-items-center">
            <div class="col-8 col-lg-9">
              <label class="visually-hidden" for="colFormLabel">Username</label>
              <div class="input-group">
                <input class="rounded-end-0 form-control" id="colFormLabel" type="email" placeholder="email address" />
              </div>
            </div>
            <div class="col-4 col-lg-3">
              <button class="btn btn-primary rounded-start-0" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="border-bottom border-700"></div>
  <div class="row flex-center my-3">
    <div class="col-md-6 order-1 order-md-0">
      <p class="my-2 text-800 text-center text-md-start"> Made with&nbsp;
        <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#EB6453" viewBox="0 0 16 16">
          <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
        </svg>&nbsp;by&nbsp;<a class="text-500" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
      </p>
    </div>
    <div class="col-md-6">
      <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a href="#!"> <span class="me-4" data-feather="instagram"></span></a><a href="#!"> <span class="me-4" data-feather="youtube"></span></a><a href="#!"> <span class="me-4" data-feather="twitter"></span></a></div>
    </div>
  </div>
</div>
<!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="vendors/@popperjs/popper.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/is/is.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="vendors/feather-icons/feather.min.js"></script>
<script>
feather.replace();
</script>
<script src="assets/js/theme.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">
</body>

</html>