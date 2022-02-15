@extends('bar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- Site Metas -->
      <title>Citas</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Site Icons -->
      <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
      <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Site CSS -->
      <link rel="stylesheet" href="style.css">
      <!-- Colors CSS -->
      <link rel="stylesheet" href="css/colors.css">
      <!-- ALL VERSION CSS -->
      <link rel="stylesheet" href="css/versions.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css">
      <!-- Modernizer for Portfolio -->
      <script src="js/modernizer.js"></script>
      <!-- [if lt IE 9] -->
</head>
<body class="clinic_version">
    <div id="preloader">
        <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
     </div>
    <div id="service" class="services wow fadeIn">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                 <div class="inner-services">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                       <div class="serv">
                          <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                          <h4>Laboratorio</h4>
                          <p>Procesamiento de muestras</p>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                       <div class="serv">
                          <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                          <h4>Cardiología</h4>
                          <p>Analisis cardiacos</p>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                       <div class="serv">
                          <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                          <h4>Especialista</h4>
                          <p>Citas con especialistas neurologo, dermatologo, etc</p>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                       <div class="serv">
                          <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                          <h4>Pediatria</h4>
                          <p>Asistencia infantil y/o adolescente</p>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                       <div class="serv">
                          <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                          <h4>Farmacia</h4>
                          <p>Entrega de medicamentos y farmacos</p>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                       <div class="serv">
                          <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                          <h4>Examenes sanguineos</h4>
                          <p>Extraccion y analisis especializados de sangre</p>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 <div class="appointment-form">
                    <h3><span>+</span> Agendamiento de citas</h3>
                    <div class="form">
                       <form action="Agenda">
                          <fieldset>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                   <div class="form-group">
                                      <input type="text" id="name" placeholder="Nombre"  />
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="row">
                                  <div class="form-group">
                                     <input type="text" id="name" placeholder="Apellidos"  />
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                <div class="row">
                                   <div class="form-group">
                                    <select class="form-control">
                                        <option>Tipo de doc.</option>
                                        <option>TI</option>
                                        <option>CC</option>
                                        <option>CE</option>
                                     </select>
                                   </div>
                                   <div class="form-group">
                                    <input type="text" id="name" placeholder="Documento"  />
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                   <div class="form-group">
                                      <input type="email" placeholder="Correo " id="email" />
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                <div class="row">
                                   <div class="form-group">
                                      <select class="form-control">
                                       <option>Cita para</option>
                                         <option>Laboratorio</option>
                                         <option>Pediatria</option>
                                         <option>Analisis de sangre</option>
                                         <option>Cardiología</option>
                                         <option>Especialista</option>
                                         <option>Reclamar medicamentos-Farmacia</option>
                                      </select>
                                   </div>
                                   <div class="form-group">
                                      <select class="form-control">
                                         <option>Horario</option>
                                         <option>AM</option>
                                         <option>PM</option>
                                      </select>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                   <div class="form-group">
                                      <select class="form-control">
                                         <option>Sede</option>
                                         <option>Barranquilla</option>
                                         <option>Soledad</option>
                                         <option>Soledad2000</option>
                                         <option>Malambo</option>
                                      </select>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                   <div class="form-group">
                                      <textarea rows="4" id="textarea_message" class="form-control" placeholder="Motivo de consulta."></textarea>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                   <div class="form-group">
                                      <div class="center"><button type="submit">Solicitar cita</button></div>
                                   </div>
                                </div>
                             </div>
                          </fieldset>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
</body>
</html>
