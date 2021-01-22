<!--Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE HTML>
    <html>
    <head>
    <title>Trang quan ly admin| Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="{{asset('/backend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{asset('/backend/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{asset('/backend/js/jquery-2.1.1.min.js')}}"></script> 
    <!--icons-css-->
    <link href="{{asset('/backend/css/font-awesome.css')}}" rel="stylesheet"> 
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    </head>
    <body>	
    <div class="login-page">
        <div class="login-main">  	
             <div class="login-head">
                    <h1>ĐĂNG NHẬP</h1>
                    
                </div>
                <div> 
                    <?php
                    $message = Session::get('message');
                    if($message)
                    {
                        echo'<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?></div>
                
                <div class="login-block">
                    <form action="{{URL::to('/admin-dasborad')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="admin_email" placeholder="Điền Email" required="">
                        <input type="password" name="admin_password" class="lock" placeholder="ĐiềnMật khẩu" required="">
                        <div class="forgot-top-grids">
                            <div class="forgot-grid">
                                <ul>
                                    <li>
                                        <input type="checkbox" id="brand1" value="">
                                        <label for="brand1"><span></span>Nhớ tôi</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="forgot">
                                <a href="#">Quên mật khẩu?</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <input action="{{URL::to('/admin-dasborad')}}" method="POST"  type="submit" name="Sign In" value="Đăng nhập">	
                        <h3>Not a member?<a href="signup.html"> Đăng kí ngay</a></h3>				
                        <h2>Hoặc Đăng nhập với</h2>
                        <div class="login-icons">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>						
                            </ul>
                        </div>
                    </form>
                    <h5><a href="index.html">Quay lại</a></h5>
                </div>
          </div>
    </div>
    <!--inner block end here-->
    <!--copy rights start here-->
    <div class="copyrights">
     
    </div>	
    <!--COPY rights end here-->
    
    <!--scrolling js-->
            <script src="js/jquery.nicescroll.js"></script>
            <script src="js/scripts.js"></script>
            <!--//scrolling js-->
    <script src="js/bootstrap.js"> </script>
    <!-- mother grid end here-->
    </body>
    </html>
    
    
                          
                            
    