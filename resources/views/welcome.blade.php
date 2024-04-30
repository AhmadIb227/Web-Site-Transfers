<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Transfers</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="bower_components/sweetalert2/dist/sweetalert2.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Tajawal&display=swap');
            body {
            margin: 0;
            padding: 0;
            font-family: 'Tajawal', sans-serif;
            }
            html {
            font-size: 10px;
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
            }
            p {
                color: black;
                font-size: 1.4rem;
                margin-top: 5px;
                line-height: 2.5rem;
                font-weight: 300;
                letter-spacing: 0.05rem;
            }
            .hreo {
                justify-content: center;
                margin: 0 auto;
                align-items: center;
             
            }
            header .lists {
            width: 70%;
            text-align: center;
            margin: 0 auto; /* أضف هذه الخاصية لمحاذاة القوائم في المركز */
            }
            header .lists ul {
                padding: 0;
                display: flex; /* استبدل القاعدة الحالية بـ flex */
                justify-content: space-around; /* أضف هذه الخاصية لتوزيع العناصر بالتساوي */
                list-style: none; /* أضف هذه الخاصية لإزالة نقاط القائمة */
            }

            header .lists ul li {
                position: relative;
            }

            header .lists ul li a {
                padding: 10px;
                color: #0e0c0c;
                font-size: 20px;
                text-decoration: none;
                font-family:Georgia, 'Times New Roman', Times, serif
            }

            header .lists ul li::before {
                position: absolute;
                content: "";
                background-color: #754e9d;
                width: 0;
                height: 2px;
                bottom: -12px;
                left: 0;
            }

            header .lists ul li:hover::before {
                width: 100%;
                transition: .3s ease-in-out;
                -webkit-transition: .3s ease-in-out;
                -moz-transition: .3s ease-in-out;
            }
            header .lists ul li.dropdown {
                margin-right: 10px; /* أضف هذه الخاصية لإضافة هامش على الجانب الأيمن لقائمة الـ dropdown */
                margin-left: 10px; /* أضف هذه الخاصية لإضافة هامش على الجانب الأيسر لقائمة الـ dropdown */
            }
            /* .hero {
               
                display: flex;
                justify-content: center;
                align-items: center;
            } */

            /* .container {
                text-align: center;
            } */
            .dropdown {
                position: relative;
                display: inline-block;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 128, 133, 0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                text-decoration: none;
                display: block;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .section12 {
                display: flex;
                justify-content: center;
                justify-content: space-around;
                padding-top: 50px;
                padding-bottom: 50px;
                margin-left: 10%;
                margin-right: 10%;
            }

            .section .icons{
                display: flex;
                align-items: center;
            }

            .section .icons div h1{
                padding-bottom: 10px;
            }

            .section .icons p{
                font-size: 14px;
            }

            .section .icons img{
                margin-right: 30px;
                width: 50px;
                height: 50px;
            }
            .btn-grad {background-image: linear-gradient(to right, #6441A5 0%, #2a0845  51%, #6441A5  100%)}
            .btn-grad {
                margin: 3px;
                padding: 4px 12px;
                text-align: center;
                text-transform: uppercase;
                transition: 0.5s;
                background-size:  auto;
                color: white;            
                border-radius: 9px;
                display: block;
                cursor: pointer;
                text-decoration: none;
            }

            .btn-grad:hover {
                background-position: right center; /* change the direction of the change here */
                color: #fff;
                text-decoration: none;
            }

            .hero{
            text-align: center;
            position: relative;
            height: 600px;
            }  

            .hero .Group{
                position: absolute;
                left: 1060px;
                top: 256px;
                width: 100px;
                height: 65px;
            }

            .hero .Group1{
                position: absolute;
                left: 1088px;
                top: 330px;
                width: 35px;
                height: 35px;
            }

            .hero .Group2{
                position: absolute;
                left: 280px;
                top: 275px;
                width: 35px;
                height: 35px;
            }

            .hero .Group3{
                position: absolute;
                left: 310px;
                top: 340px;
                width: 25px;
                height: 25px;
            }

            .hero .lineargradent{
                position: absolute;
                width: 100%;
                height: 130px;
                top: 475px;
                background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 83.65%);
            }



            .hero .absolute{
                position: absolute;
                top: 90px;
            }
            .hero h1, p, .search{
                padding-top: 30px;
            }
            .hero img{
                width: 100%;
                height: 100%;
            }
            .hero h1{
                font-size: 31px;
                color: aliceblue;
                width: 700px;
            }
            .hero  p{
                font-size: 14px;
                color: aliceblue;
            }



            .absolute{
                text-align: center;
                justify-content: center;
                margin-left: 350px;
            }

            .absolute .search input{
                width: 250px;
                height: 50px;
                border-radius: 40px;
                padding-left: 10px;
                background-color: none;
                color: black;
                
            }

            .absolute .search img{
                width: 40px;
                height: 40px;
                z-index: 55;
                position: absolute;
                right: 230px;
                bottom: 5px;
                border-color: aliceblue;
            }
            

            #footer {
                color: #fff;
                text-align: center;
                padding: 30px 0;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .brand h1 {
                color:#000814;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 24px;
                margin-bottom: 10px;
            }
            .footer h2{
                color:#000814;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }

            .social-icon {
                margin-top: 20px;
            }

            .social-item {
                display: inline-block;
                margin-right: 10px;
            }

            .social-item img {
                width: 30px;
                height: 30px;
            }
        </style>
    </head>
    <body >
        <header class="header"> 
            <div class="lists">
                <ul>
                    @if (Auth::check())
                        <div  class="logout" >
                            welcome {{ Auth::user()->name }}
                            <a class="btn-grad" href="" onclick="event.preventDefault();document.getElementById('logoutform').submit();">
                                logout
                            </a>
                            <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none">@csrf</form>
                        </div>
                    @endif
                    <li><a href="transfers">Enter</a></li>
                    <div id="services-menu">
                        <li class="dropdown">
                            <a href="transfers/show" class="dropbtn">Show</a>
                                <div class="dropdown-content">
                                    <a href="transfers/show" class="yy" style="margin-top: 12px">Transfers</a>
                                    <a href="offices" class="mm">Offices</a>
                                </div>
                        </li>
                        <li class="dropdown">
                            <a href="transfers/show" class="dropbtn">Longuages</a>
                                <div class="dropdown-content">
                                    <a href="{{ route('language','en') }}" class="mm">English</a>
                                    <a href="{{ route('language','tr') }}" class="mm">Turcish</a>
                                    <a href="{{ route('language','sp') }}" class="mm">Ispani</a>
                                </div>
                        </li>
                    </div>
                    <li><a href="viewRates">Rates</a></li>
                    <li><a href="currency-rates">Currency</a></li>
                    <li><a href="verify">Sure</a></li>
                </ul>
            </div>
        </header >
        <section>
            <div class="hero">
                <img class="gg" src="12(1).jpg" alt="" style="margin-top: 9%">
                <img class="Group" src="image/Group 5.png" alt="">
                <img class="Group1" src="image/Group 4.png" alt="">
                <img class="Group2" src="image/Group 4.png" alt="">
                <img class="Group3" src="image/Group 4.png" alt="">
                <div class="lineargradent"></div>
               <div class="absolute" >
                    <h1 style="color:rgb(92, 88, 88) ; margin-top: -13%; font-size: 17px;font-family: Georgia, 'Times New Roman', Times, serif">
                        {{ __('mylan.h1') }}
                    </h1>
                    <p style="color: black ; margin-top:-   9%;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">                   
                         {{ __('mylan.h2') }}     
                    </p>
                    <div style="margin-top: 22%" class="search">
                        <input type="text" placeholder="Search  for Verify">
                        <img src="image/btn-search.png" alt="">
                    </div>
                </div>
    
            </div>
        </section>
        <section class="section12" style="margin-top: 9%;font-family: Georgia, 'Times New Roman', Times, serif" >
            <div class="icons">
                <img src="image/Group.png" alt="">
                <div>
                    <h1>The Student</h1>
                       Ahmad Ibrahem
                </div>
            </div>
    
            <div class="icons">
                <img src="image/Vector.png" alt="">
                <div>
                    <h1>The Manager</h1>
                       Abdulmahim Ismail
                </div>
            </div>
    
            <div class="icons">
                <img src="image/Vector (1).png" alt="">
                <div>
                    <h1> Lecturer Professor</h1>
                           Muhammad Ali
                </div>
            </div>
        </section>

        <section  class="footer" id="footer">
            <div class="footer container">
              <div class="brand">
                <h1 ><span>A</span>hmad <span>I</span>brahem</h1>
              </div>
              <h2>Web-Site-Transfers</h2>
              <div class="social-icon">
                <div class="social-item">
                  <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
                </div>
                <div class="social-item">
                  <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
                </div>
                <div class="social-item">
                  <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
                </div>
              </div>
              <p>Copyright © 2024 by Ahmad Ibrahem</p>
            </div>
          </section>
      
    </body>
</html>
