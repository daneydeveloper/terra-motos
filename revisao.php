<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, user-scalable=no" />
      <meta name="description" content="A Maior concessionária Yamaha do Estado. Veiculos Novos, Seminovos, Peças e Acessórios, Finamento e muito mais. Entre em contato conosco"/>
      <meta name="keywords" content="yamaha, revisão, yamaha seminovos, peças e acessórios yamaha, yamaha em fortaleza"/>
      <meta property="og:type" content="website"/>
      <meta property="og:title" content="Terra Motos Ceará - Yamaha"/>
      <meta property="og:site_name" content="Terra Motos Ceará"/>
      <title>Terra Motos Ceará - Yamaha</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
      <!-- flaticon -->
      <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
      <!-- mega menu -->
      <link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />
      <!-- mega menu -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
      <!-- main style -->
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <!-- responsive -->
      <link rel="stylesheet" type="text/css" href="css/responsive.css" />
      <!-- Style customizer -->
      <link rel="stylesheet" href="#" data-style="styles">
      <link rel="stylesheet" type="text/css" href="css/style-customizer.css" />
   </head>
   <body>

      <?php include_once('includes/header.php');?>
      
      <section class="contact-2 page-section-ptb white-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-offset-1 col-md-10">
                  <div class="section-title">
                     <h2>Agende Sua Revisão</h2>
                     <div class="separator"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-offset-2 col-lg-8 col-md-8">
                  <div class="gray-form row">
                     <div class="col-lg-12 col-md-12">
                        <form class="form-horizontal" id="contactform" role="form" method="post" action="http://themes.potenzaglobalsolutions.com/html/cardealer/php/contact-form.php">
                           <p>Preencha o formulário que em breve um de nossos consultores entrará em contato e confirmará o agendamento.</p>
                           <div class="contact-form">
                              <div class="form-group">
                                 <input id="name" type="text" placeholder="Name*" class="form-control"  name="name">
                              </div>
                              <div class="form-group">
                                 <input type="email" placeholder="Email*" class="form-control" name="email">
                              </div>
                              <div class="form-group">
                                 <input type="text" placeholder="Phone*" class="form-control" name="phone">
                              </div>
                              <div class="form-group">
                                 <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                              </div>
                              <input type="hidden" name="action" value="sendEmail"/>
                              <button id="submit" name="submit" type="submit" value="Send" class="button red"> Send your message </button>
                           </div>
                        </form>
                        <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <?php include_once('includes/footer.php');?>

      <!-- jquery  -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!-- bootstrap -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- mega-menu -->
      <script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>
      <!-- select -->
      <script type="text/javascript" src="js/select/jquery-select.js"></script>
      <!-- style customizer  -->
      <script type="text/javascript" src="js/style-customizer.js"></script>
      <!-- custom -->
      <script type="text/javascript" src="js/custom.js"></script>
   </body>
</html>