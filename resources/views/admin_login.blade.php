<!--A Design by W3layouts
    Author: W3layout
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE html>
    
    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/30-05-2017/visitors-demo_Free/217035454/web/login.html by HTTrack Website Copier/3.x [XR&CO 2014], Sun, 27 Dec 2020 16:04:33 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('/backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('/backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('/backend/ss/font.css')}}" type="text/css"/>
    <link href="{{asset('/backend/css/font-awesome.css')}}gf" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <script src="/backend/js/jquery2.0.3.min.js"></script>
    </head>
    <body>
    <script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
    (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
              // format, zoneKey, segment:value, options
              _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
          }
    })();
    </script>
    <script>
    (function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
    }
    })();
    </script>
    <script>
    (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
              // format, zoneKey, segment:value, options
              _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
          }
    })();
    </script>
    <!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
    <div id="codefund"><!-- fallback content --></div>
    <script src="https://ethicalads.io/?ref=codefund" async="async"></script>
        
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-149859901-1');
    </script>
    
    <script>
         window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
         ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
         ga('require', 'eventTracker');
         ga('require', 'outboundLinkTracker');
         ga('require', 'urlChangeTracker');
         ga('send', 'pageview');
       </script>
    <script async src='../../../../../../js/autotrack.js'></script>
    
    <meta name="robots" content="noindex">
    <body><link rel="stylesheet" href="../../../../../../images/demobar_w3_4thDec2019.css">
        <!-- Demo bar start -->
      <div id="w3lDemoBar" class="w3l-demo-bar">
      
      
      <div class="w3l-template-options">
        
       
      </div>
    </div>
    
    <div class="log-w3">
    <!---728x90--->
    
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
        
        <form action="{{URL::to('/admin-dasborad')}}" method="POST">
            {{ csrf_field() }}
                <input type="email" class="ggg" name="admin_email" placeholder="E-MAIL" required="">
                <input type="password" class="ggg" name="admin_password" placeholder="PASSWORD" required="">
                <span><input type="checkbox" />Remember Me</span>
                <h6><a href="#">Forgot Password?</a></h6>
                    <div class="clearfix"></div>
                    <input action="{{URL::to('/admin-dasborad')}}" method="POST" type="submit" value="Sign In" name="login">
            </form>
            <p>Dont Have an Account ?<a href="registration.html">Create an account</a></p>
    </div>
    <div> <?php
        $message = Session::get('message');
        if($message)
        {
            echo'<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?></div></div>
    <!---728x90--->
    </div>
    <script src="/backend/js/bootstrap.js"></script>
    <script src="/backend/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/backend/js/scripts.js"></script>
    <script src="/backend/js/jquery.slimscroll.js"></script>
    <script src="/backend/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/backend/js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="/backend/js/jquery.scrollTo.js"></script>
    </body>
    
    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/30-05-2017/visitors-demo_Free/217035454/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 16:04:33 GMT -->
    </html>
    