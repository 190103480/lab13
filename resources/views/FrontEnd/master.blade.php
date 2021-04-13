<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anelya's Cosmetics Store </title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly" defer></script>
    <link rel="stylesheet" href="style.css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOCR2vq2rmKi_tndcevVIcabPDjh0-pzVcWg&usqp=CAU">

  
</head>
<body onload="load()">

    <div class="nav">
        <label for="toggle" onmouseover="biglabel(this)" onmouseout="smalllabel(this)">&#9776;</label>
    </div>

   

    <div class="header1">COVID-19 Stay At Home</div>

    <div class="header2"><p id="header2"> FREE SHIPPING: DOMESTIC ORDERS OVER $40, INTERNATIONAL ORDERS OVER $60</p>
      <i id="icon" class="fa fa-shopping-cart" style="color:white"></i>
    </div>
 <input type="checkbox" name="" id="toggle">
    <div class = "header">
        <div id="main" onclick="window.location.reload()" onmouseover="big(this)" onmouseout="small(this)" style="text-align:center;font-size:25px;">ANELYA'S</div>
         
         <button onclick ="inn()" id="btn_white" class="btn btn-outline-dark">Log In</button>
        
    </div>

    
    <div class = "main">
        <img id="img" src="https://cdn.shopify.com/s/files/1/1133/5964/files/DT_2808x.jpg?v=1606507284" width="100%" alt="girls">   
        <img id="img1" src="https://m.buro247.my/images/kylie-jenner-cosmetics-sales-birthday-collection.jpg" alt="girls">    
      </div>
    </div>
    
   
 <div class="inn">
        <div class="in-content">
            <img onclick = "close_inn()" class="close" src="https://e7.pngegg.com/pngimages/844/786/png-clipart-maine-computer-icons-close-icon-logo-law.png" alt="close" width="25px">
            <img src="https://i.pinimg.com/564x/da/12/fd/da12fd9f13f5f1597018c27f52f2971c.jpg" alt="icon" width="30%">
            <input id ="username" type="text" name="username" placeholder="Username">
            <input id="pass" type="password"  name="pass" placeholder="Password">
            <button  onclick="login(username.value)" class="btn btn-outline-dark">Log In</button><br>
            <a href="#" class="link" onclick="createAccount()" id="linkCreateAccount">Don't have an account? Create account</a>
        </div>
    


     <div class="createAccount" id="createAccount">
        <div class="createA-content">
            <img onclick="closeCA()" class="closed"  src="https://e7.pngegg.com/pngimages/844/786/png-clipart-maine-computer-icons-close-icon-logo-law.png" alt="closed" width="25px">
            <img class="pct" src="https://i.pinimg.com/564x/da/12/fd/da12fd9f13f5f1597018c27f52f2971c.jpg" alt="" width="30%">
            <h2 class="title">Create Account</h2>
            <input  id="username2" type="text" name="username2" placeholder="Username">
            <input  id="telephone" type="text" name="telephone" placeholder="Telephone Number">
            <input  id="pass1" type="password" name="pass1" placeholder="Password">
            <button  onclick="closeCA()" class="btn btn-outline-dark">Continue</button><br>
            <a href="#" class="link" onclick="closeCA()" id="linkLogin">Already have an account? Log In</a>
        </div>
     </div>
 </div>

    <div class = "text">
      <h1 id="text"></h1>
        <p id="text1">Here you will see a lot of different cosmetics at low prices. <br>Be sure that we have only high - quality products that will help you become even more beautiful and confident!</p>
        <p id="text3"></p>
        <p id="text4"></p>
     </div>
       
     <section class="services">
        <div class="container">
          <div class="services__items">
            <div class="services__item">
              <img id="cont-img1" src="https://i.pinimg.com/564x/40/21/e7/4021e73de878411ce794608a3422f46b.jpg" alt="" width="100%">
              <div id = "serv_title1" class="services__item-title">
                COMPLETE BLUE COLLECTION BUNDLE
              </div>
              <div id="serv_text1" class="services__item-text">
                Included: <br>1 x Shampoo <br> 1 x Shower Gel <br> 1 x Body Mist <br>  1 x Body Cream <br>
              </div>
              <div id="costs1" class="costs">
                <b>12500tg</b>
              </div>
              <div id="overlay">
                <div class="popup">
                  <button class="closee"  onclick="swa2()"></button>
                  <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                </div>
              </div>
              <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
            <div class="services__item">
              <img id="cont-img2" src="https://i.pinimg.com/564x/22/31/40/223140a463203e26416f8ee470bea546.jpg" alt="" width="100%">
              <div id = "serv_title2" class="services__item-title">
                COMPLETE PINK COLLECTION BUNDLE
              </div>
              <div id="serv_text2" class="services__item-text">
                Included: <br>1 x Shampoo <br> 1 x Shower Gel <br> 1 x Body Lotion <br>  1 x Body Cream <br>
              </div>
              <div id="costs2" class="costs">
                <b>12500tg</b>
              </div>
              <div id="overlay">
                <div class="popup">
                  <button class="closee"  onclick="swa2()"></button>
                  <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                </div>
              </div>
              <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
            <div class="services__item">
              <img id="cont-img3" src="https://i.pinimg.com/564x/20/16/c1/2016c1c5378b0fb0ab92386fe81fe137.jpg" alt="" width="100%">
              <div id = "serv_title3" class="services__item-title">
                COMPLETE PURPLE COLLECTION BUNDLE
              </div>
              <div id="serv_text3" class="services__item-text">
                Included: <br>1 x Shampoo <br> 1 x Shower Gel <br> 1 x Body Lotion <br>  1 x Body Cream <br>
              </div>
              <div id="costs3" class="costs">
                <b>12500tg</b>
                </div>
                <div id="overlay">
                  <div class="popup">
                    <button class="closee"  onclick="swa2()"></button>
                    <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                  </div>
                </div>
                <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
          </div>
        </div>
      </section>

                          <br>

      <section class="services">
        <div class="container">
          <div class="services__items">
            <div class="services__item">
              <img id="cont-img4" src="https://i.pinimg.com/564x/c6/21/26/c62126adc0a143c4654c9b46cfb94430.jpg" alt="" width="100%">
              <div id = "serv_title4" class="services__item-title">
                COMPLETE BEAR COLLECTION BUNDLE
              </div>
              <div id="serv_text4" class="services__item-text">
                Icluded: <br> 1 x Shampoo <br> 1 x Shower Gel <br> 1 x Body Lotion <br> 1 x Antiseptic <br> 1 x Lip Balm <br> 2 x Body Cream <br> 2 x Spray <br> 
              </div>
              <div id="costs4" class="costs">
                <b>15500tg</b>
              </div>
                <div id="overlay">
                  <div class="popup">
                    <button class="closee"  onclick="swa2()"></button>
                    <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                  </div>
                </div>
                <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
            <div class="services__item">
              <img id="cont-img5" src="https://i.pinimg.com/564x/fc/56/fb/fc56fbee3fec786de193b15b67721b94.jpg" alt="" width="100%">
              <div id = "serv_title5" class="services__item-title">
                COMPLETE PENGUIN COLLECTION BUNDLE
              </div>
              <div id="serv_text5" class="services__item-text">
                Icluded: <br> 1 x Shampoo <br> 1 x Shower Gel <br> 1 x Body Lotion <br> 1 x Antiseptic <br> 1 x Lip Balm <br> 2 x Body Cream <br> 2 x Spray <br> 
              </div>
              <div id="costs5" class="costs">
                <b>15500tg</b>
              </div>
                <div id="overlay">
                  <div class="popup">
                    <button class="closee"  onclick="swa2()"></button>
                    <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                  </div>
                </div>
                <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
            <div  class="services__item">
              <img id="cont-img6" src="https://i.pinimg.com/564x/53/f4/0d/53f40d6612f37b32329f88ece3a5db08.jpg" alt="" width="100%">
              <div id = "serv_title6" class="services__item-title">
                COMPLETE DEER COLLECTION BUNDLE
              </div>
              <div id="serv_text6" class="services__item-text">
                Icluded: <br> 1 x Shampoo <br> 1 x Shower Gel <br> 1 x Body Lotion <br> 1 x Antiseptic <br> 1 x Lip Balm <br> 2 x Body Cream <br> 2 x Spray <br> 
              </div>
              <div id="costs6" class="costs">
                <b>15500tg</b>
              </div>
                <div id="overlay">
                  <div class="popup">
                    <button class="closee"  onclick="swa2()"></button>
                    <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                  </div>
                </div>
                <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
          </div>
        </div>
      </section>

      <br>

      <section class="services">
        <div class="container">
          <div class="services__items">
            <div class="services__item">
              <img id="cont-img7" src="https://i.pinimg.com/564x/af/f0/88/aff08847dac26f59545f20dafcfa140f.jpg" alt="" width="100%">
              <div id = "serv_title7" class="services__item-title">
                Victoria's Secret Body Mist
              </div>
              <div id="serv_text7" class="services__item-text">
                Bare Vanilla <br> Mint<br> Coconut Passion<br> Pineapple
              </div>
              <div id="costs7" class="costs">
                <b>8000tg</b>
              </div>
                <div id="overlay">
                  <div class="popup">
                    <button class="closee"  onclick="swa2()"></button>
                    <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                  </div>
                </div>
                <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
            <div  class="services__item">
              <img id="cont-img8" src="https://i.pinimg.com/564x/4a/00/77/4a0077f31a9939de82c5fec1bd3f310a.jpg" alt="" width="100%">
              <div id = "serv_title8" class="services__item-title">
                Victoria's Secret Body Mist
              </div>
              <div id="serv_text8" class="services__item-text">
                Amber Romance <br> Strawberry<br> Pure Seduction<br> Rose
              </div>
              <div id="costs8" class="costs">
                <b>8000tg</b>
              </div>
                <div id="overlay">
                  <div class="popup">
                    <button class="closee"  onclick="swa2()"></button>
                    <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                  </div>
                </div>
                <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
            <div  class="services__item">
              <img id="cont-img9" src="https://i.pinimg.com/564x/ed/36/3a/ed363ac6e68c9a9c1a051624166bff02.jpg" alt="" width="100%">
              <div id = "serv_title9" class="services__item-title">
                Victoria's Secret Body Mist
              </div>
              <div id="serv_text9" class="services__item-text">
                Love Spell <br> Violet <br> Peonies<br>Velvet Petals
              </div>
              <div id="costs9" class="costs">
               <b>8000tg</b>
              </div>
               <div id="overlay">
                <div class="popup">
                  <button class="closee"  onclick="swa2()"></button>
                  <h1 class="zag">Your order was successfully added to the shopping cart!!!</h1>
                </div>
              </div>
              <button id="order" onclick="swa()" type="button"><b>ADD TO CART</b></button>
            </div>
          </div>
        </div>
      </section>
     
     <div class="profile">
       <img id="user_img" src="https://www.pngfind.com/pngs/m/30-303845_female-silhouette-head-girl-icon-png-transparent-png.png" alt="icon" >
       <p id="user_name">Anel</p>
     </div>
    
     
     

   <div class="contacts" id="contacts">
       <div id="first">
       <h3>COVID-19 Update: A message to our Anelya's Cosmetics family</h1>
        <p>Our top priority is the health and safety of our employees and customers, so we completely redesigned our production and fulfillment center to comply with state recommended social distancing and PPE guidelines.</p>
      </div>
      <div id="second">
        <h3>What does this mean for you?</h3>
        <p><ul><li><b>Processing times may be delayed.</b>Generally processing times are within 3-5 business days* although currently those times vary due to the issues relating to COVID-19 and government orders and the impact to our business. Processing times may also be extended during holidays, launches/re-stocks, limited edition releases and promotions.</li>
          <li>We will notify you as soon as your order ships or if we foresee any issues with fulfilling your order.</li>
          <li><b>You can cancel for a full refund. </b>We have updated our return policy so you can cancel any unshipped order at any time for a full refund.</li>
        </ul></p>
      </div>
      <div id="third">
        <p>We appreciate your patience and understanding as we work through this together.Thank you so much for your support!</p>
      </div>
      <br>
      <div id="fourth">
        <h3>Shipping</h3>
        <p>On occasion Anelya's Cosmetics offers shipping promotions, at which time domestic customers receive free shipping if they spend over a certain amount. These promotions may change periodically. Anelya's Cosmetics ships to most countries worldwide via USPS for all domestic and international packages.<br>

          Shipping & Handling Charges are as follows:<br>
          
          $8.95 flat fee for domestic, all states within the USA (free shipping over $40)<br<>
          
          $14.95 flat fee for all international countries we ship to worldwide (free shipping over $60)<br>
          
          We are not responsible for any shipping deliveries that may be affected by customs, natural occurrences, transfers from USPS to the local carrier in your country or air and ground transportation strikes or delays, nor any extra fees, customs or back end charges once the package has exited the United States.<br>
          
          Packages undeliverable by USPS and/or their international shipping partners will be cancelled and refunded once received and processed at our shipping hub. </p>
      </div>
     </div>
  
    <div style="top:4100px; left:10px; width:700px; height:350px;">
    <h3 style="text-align:center">Percentage of country purchases</h3>
    <canvas id="myChart2" width="400" height="150"></canvas>
<script type="text/javascript">
     var ctx=document.getElementById("myChart2");
     var myChart2 = new Chart(ctx,{
       type:'doughnut',
       data : {
         labels: ["Kazakhstan","Russia","Ukraine","USA","South Korea"],
         datasets: [
           {label:'Pie chart example',
          data:[35,28,15,13,9],
        backgroundColor:['rgba(255,129,102,1)', 'rgba(234,162,235,1)', 'rgba(255,206,36,1)','rgb(230,197,205)','rgb(182,210,224)'], }
         ]
       },
       options:{
         scales:{
           yAxes:[{
             ticks:{
              beginAtZero:true
             }
           }]
         }
       }
     });
</script>

 </div>



<div style="top:4700px; left:10px; width:700px; height:350px;">
<h3 style="text-align:center">Percentage of purchases per section</h3>
<canvas id="myChart1" width="400" height="150"></canvas>
<script type="text/javascript">
     var ctx=document.getElementById("myChart1");
     var myChart1 = new Chart(ctx,{
       type:'pie',
       data : {
         labels: ["Eye","Lip","Skin","Perfume"],
         datasets: [
           {label:'Pie chart example',
          data:[35,40,20,5],
        backgroundColor:['rgba(255,129,102,1)', 'rgba(234,162,235,1)', 'rgba(255,206,36,1)','rgb(182,210,224)'], }
         ]
       },
       options:{
         scales:{
           yAxes:[{
             ticks:{
              beginAtZero:true
             }
           }]
         }
       }
     });
</script>
    </div>


    <div style="position: absolute;top:4700px; left:730px; width:700px; height:350px;">
    <h3 style="text-align:center">Sales revenue 2017-2020</h3>
<canvas id="myChart" width="400" height="150"></canvas>

     <script type="text/javascript">
     var ctx=document.getElementById("myChart");
     var myChart = new Chart(ctx,{
       type:'bar',
       data :{
         labels: ["2017","2018","2019","2020"],
         datasets: [
           {label:'Revenue from sales',
          data:[50,80,95,100],
        backgroundColor:['rgba(255,129,102,1)', 'rgba(234,162,235,1)', 'rgba(255,206,36,1)','rgb(182,210,224)'], }
         ]
       },
       options:{
         scales:{
           yAxes:[{
             ticks:{
              beginAtZero:true
             }
           }]
         }
       }
     });
     </script>
    </div>


     <div class="footer">  
      <div class="container">
      <div class="row">   
      <div class="col-4">
          <p class="footer__social">Our Social Media Profiles:</p>
          <p class="footer__social-icons">
              
              <a href="https://twitter.com/kyliecosmetics" target="_blank">
              <i class="fa fa-twitter" aria-hidden="true" ></i>
              </a>
              
              <a href="https://www.facebook.com/KylieCosmetics/" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true" ></i>
              </a>
              
              <a href="https://www.instagram.com/kyliecosmetics/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true" ></i>
              </a>

            <p class="footer_text">COPYRIGHT © 2017 ORIGINAL COSMETICS BY ANELYA</p>
      </div>   
      </div>
      </div> 
      </div>
     
     
     
  
  
<script type="text/javascript" src="script.js"></script>
</body>
</html>