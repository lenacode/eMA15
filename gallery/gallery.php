<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
     <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>eMovie Academy 2015</title>

<!--    <link rel="logo" type="image/png" href="images/logo.png">-->
    <link rel="shortcut icon" href="img/favicon.ico">


    <!--Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">



	<!--Open Graph
	=============================================-->
  	<meta property="og:title" content="eMovie Academy - EESTEC International workshop"/>
 	<meta property="og:url" content="http://ema.eestec-sa.ba/"/>
	<meta property="og:site_name" content="eMovie Academy - EESTEC International workshop"/>
	<meta property="og:description" content="EESTEC LC Sarajevo international workshop of making short documentary movies."/>
	<meta property="og:image" content="http://ema.eestec-sa.ba/images/share.png"/>
    <!--CSS
    ================================================== -->       
    <!--Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">  
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="css/elastic_grid.css"> 
    <!-- Default Theme css file -->
    <link id="orginal" href="css/default-theme.css" rel="stylesheet">
    <!-- Main css file -->
    <link href="style.css" rel="stylesheet">
    <link href="css/gallery.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- Gallery -->
    <link rel="stylesheet" type="text/css" href="gallery/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="gallery/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="gallery/css/component.css" />
    <script src="gallery/js/modernizr.min.js"></script>
      
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
      

      <style>
* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	}

body {
	font-family:"Helvetica Neue", Arial, sans-serif;
	}

.mosaicflow__column {
	float:left;
	}

.mosaicflow__item {
	position:relative;
	}
	.mosaicflow__item img {
		display:block;
		width:100%;
		max-width:500px;
		height:auto;
		}
	.mosaicflow__item p {
		position:absolute;
		bottom:0;
		left:0;
		width:100%;
		margin:0;
		padding:5px;
		background:hsla(0,0%,0%,.5);
		color:#fff;
		font-size:14px;
		text-shadow:1px 1px 1px hsla(0,0%,0%,.75);
		opacity:0;
		-webkit-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		   -moz-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		     -o-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		        transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		}
	.mosaicflow__item:hover p {
		opacity:1;
		}
	</style>

    
<!--
      <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      background: #EEE;
      font: 10px/13px 'Lucida Sans',sans-serif;
    }
    .wrap {
      overflow: hidden;
      margin: 10px;
    }
    .box {
      float: left;
      position: relative;
      width: 20%;
      padding-bottom: 20%;
    }
    .boxInner {
      position: absolute;
      left: 10px;
      right: 10px;
      top: 10px;
      bottom: 10px;
      overflow: hidden;
    }
    .boxInner img {
      width: 100%;
    }
    .boxInner .titleBox {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      margin-bottom: -50px;
      background: #000;
      background: rgba(0, 0, 0, 0.5);
      color: #FFF;
      padding: 10px;
      text-align: center;
      -webkit-transition: all 0.3s ease-out;
      -moz-transition: all 0.3s ease-out;
      -o-transition: all 0.3s ease-out;
      transition: all 0.3s ease-out;
    }
    body.no-touch .boxInner:hover .titleBox, body.touch .boxInner.touchFocus .titleBox {
      margin-bottom: 0;
    }
    @media only screen and (max-width : 480px) {
      /* Smartphone view: 1 tile */
      .box {
        width: 100%;
        padding-bottom: 100%;
      }
    }
    @media only screen and (max-width : 650px) and (min-width : 481px) {
      /* Tablet view: 2 tiles */
      .box {
        width: 50%;
        padding-bottom: 50%;
      }
    }
    @media only screen and (max-width : 1050px) and (min-width : 651px) {
      /* Small desktop / ipad view: 3 tiles */
      .box {
        width: 33.3%;
        padding-bottom: 33.3%;
      }
    }
    @media only screen and (max-width : 1290px) and (min-width : 1051px) {
      /* Medium desktop: 4 tiles */
      .box {
        width: 25%;
        padding-bottom: 25%;
      }
    }
  </style>
-->
 
  </head>


<body class="no-touch">
     <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->

            <!-- TEXT BASED LOGO >
            <a class="navbar-brand" href="#">eMovie<span>Academy</span></a>
            
            <!-- IMG BASED LOGO  -->
            <a class="navbar-brand" style="padding-top:0px;margin-top:0px;"><img width="50" src="images/logo.png" alt="logo"></a>    
          </div>

          
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">

              <li><a href="#about">About</a></li>
              <li><a href="#sarajevo">Sarajevo</a></li> 
              <li><a href="#news">News</a></li> 
              </ul>
          </div>     
         </div>
        </nav>  
      </div>
      <!-- END MENU -->

    </header>
    <!--=========== End HEADER SECTION ================--> 
<br/><br/><br/><br/><br/>
         <?php 
            $dirname = "images/gallery";
            $files = scandir($dirname);
            $out = array_shift($files);
            $out = array_shift($files);

            $imenagalerija= array($files[0] => "galerija jedan",$files[1] => "galerija dva",$files[2] => "galerija tri",$files[3] => "galerija cetiri",$files[4] => "galerija pet",$files[5] => "galerija sest");
            $opisgalerija= array($files[0] => "opis za galeriju jedan",$files[1] => "opis za galeriju dva",$files[2] => "opis za galeriju tri",$files[3] => "opis za galeriju cetiri",$files[4] => "opis za galeriju pet",$files[5] => "opis za galeriju sest");
        ?>
       <?php $i = 0; foreach($files as $directoryname):?>
             
<!--
    <div class="box">
      <div class="boxInner">
        
        <div class="titleBox"><div class="<?php echo "gallery".$i;?>"><?php echo $imenagalerija[$directoryname]; ?></div></div>
      </div>
    </div>
-->
    <div class="mosaicflow" data-item-height-calculation="attribute">
		<div class="mosaicflow__item">
          <a href="javascript:;" ><img src="<?php echo $dirname."/".$files[$i]."/tab.JPG"; ?>"  alt=""></a>
          
			<p></p>
		</div>
    </div>
    <?php $i = $i+1; endforeach;?>
    
     <!--=========== BEGAIN FOOTER ================-->
     <footer id="footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_left">
               <p style="color: white;">INFO:<br> EESTEC LC SARAJEVO <br>Elma Sinanović, CP <br> 				elma.sinanovic@eestec-sa.ba <a></a></p>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_right">
               <ul class="social_nav">
                 <li><a href="https://www.facebook.com/eestecsarajevo?fref=ts"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="https://twitter.com/eestecSarajevo"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://instagram.com/eestec_lc_sarajevo/"><i class="fa fa-instagram"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
      </footer>
      <!--=========== END FOOTER ================-->



     <!-- Javascript Files
     ================================================== -->
    
    <script src="gallery/js/classie.js"></script>
		<script src="gallery/js/photostack.js"></script>
		
  

    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.ui.map.js"></script>
     <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script> 
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.superslides.min.js" type="text/javascript"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- for portfolio filter gallery -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/elastic_grid.min.js"></script>
    
    <script src="mosaic/jquery.mosaicflow.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
    
        <script type="text/javascript">
            $(document).ready(function() {
            $(".fancybox").fancybox();
            });
        </script>
    
    
  <script type="text/javascript">
    $(function(){
      // See if this is a touch device
      if ('ontouchstart' in window)
      {
        // Set the correct body class
        $('body').removeClass('no-touch').addClass('touch');
        
        // Add the touch toggle to show text
        $('div.boxInner img').click(function(){
          $(this).closest('.boxInner').toggleClass('touchFocus');
        });
      }
    });
  </script>
    
<script>
    
    
		
            
             $(".gallery0").click(function() {
                $.fancybox.open([
                    {
                        href : 'images/gallery/gallery1/1.JPG'
                    }, {
                        href : 'images/gallery/gallery1/2.JPG'
                    }, {
                        href : 'images/gallery/gallery1/3.JPG'
                    }, {
                        href : 'images/gallery/gallery1/4.JPG'
                    }, {
                        href : 'images/gallery/gallery1/5.JPG'
                    }, {
                        href : 'images/gallery/gallery1/6.JPG'
                    }

                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });
            
                  $(".gallery1").click(function() {
                $.fancybox.open([
                    {
                        href : 'images/gallery/gallery2/1.JPG'
                    }, {
                        href : 'images/gallery/gallery2/2.JPG'
                    }, {
                        href : 'images/gallery/gallery2/3.JPG'
                    }, {
                        href : 'images/gallery/gallery2/4.JPG'
                    }, {
                        href : 'images/gallery/gallery2/5.JPG'
                    }, {
                        href : 'images/gallery/gallery2/6.JPG'
                    }

                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });
    
                      $(".gallery2").click(function() {
                $.fancybox.open([
                    {
                        href : 'images/gallery/gallery2/1.JPG'
                    }, {
                        href : 'images/gallery/gallery2/2.JPG'
                    }, {
                        href : 'images/gallery/gallery2/3.JPG'
                    }, {
                        href : 'images/gallery/gallery2/4.JPG'
                    }, {
                        href : 'images/gallery/gallery2/5.JPG'
                    }, {
                        href : 'images/gallery/gallery2/6.JPG'
                    }

                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });
			
                      $(".gallery3").click(function() {
                $.fancybox.open([
                    {
                        href : 'images/gallery/gallery2/1.JPG'
                    }, {
                        href : 'images/gallery/gallery2/2.JPG'
                    }, {
                        href : 'images/gallery/gallery2/3.JPG'
                    }, {
                        href : 'images/gallery/gallery2/4.JPG'
                    }, {
                        href : 'images/gallery/gallery2/5.JPG'
                    }, {
                        href : 'images/gallery/gallery2/6.JPG'
                    }

                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });
    
                      $(".gallery4").click(function() {
                $.fancybox.open([
                    {
                        href : 'images/gallery/gallery2/1.JPG'
                    }, {
                        href : 'images/gallery/gallery2/2.JPG'
                    }, {
                        href : 'images/gallery/gallery2/3.JPG'
                    }, {
                        href : 'images/gallery/gallery2/4.JPG'
                    }, {
                        href : 'images/gallery/gallery2/5.JPG'
                    }, {
                        href : 'images/gallery/gallery2/6.JPG'
                    }

                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });
    
                          $(".gallery5").click(function() {
                $.fancybox.open([
                    {
                        href : 'images/gallery/gallery2/1.JPG'
                    }, {
                        href : 'images/gallery/gallery2/2.JPG'
                    }, {
                        href : 'images/gallery/gallery2/3.JPG'
                    }, {
                        href : 'images/gallery/gallery2/4.JPG'
                    }, {
                        href : 'images/gallery/gallery2/5.JPG'
                    }, {
                        href : 'images/gallery/gallery2/6.JPG'
                    }

                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });
		</script>


</body>

</html>
