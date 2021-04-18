<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('Order now')}}</title>
</head>
<body>

@extends('layout')
        @section('content')

        <div class = "mob" onclick = "men()"><label  id = "t" for = "toggle" style="color:black;">
            <div id = "m"></div>
             <div id = "m"></div>
              <div id = "m"></div>
        </label></div>
        
        <div class="container" style = "display: none">
        <ul id="menu">
<li id="home1" style = "display:block;" onclick= "window.location.reload()" ><a style = "color:white;" href="{{route('home')}}">{{__('HOME')}}</a></li>
<li id="desserts1" style = "display:block;"  ><a style = "color:white;" href="{{route('desserts')}}">{{__('DESSERTS')}}</a></li>
<li id="birthdays1" style = "display:block;" > <a style = "color:white;"  href="{{route('birthdays')}}">{{__('BIRTHDAYS')}}</a></li>
<li id="weddings1" style = "display:block;" ><a style = "color:white;" href="{{route('weddings')}}" >{{__('WEDDINGS')}}</a></li>
<li id="about1" style = "display:block;" ><a style = "color:white;" href="{{route('about')}}">{{__('ABOUT US')}}</a></li>
<li id="contact1" style = "display:block;"  ><a style = "color:white;" href="{{route('order')}}">{{__('ORDER NOW')}}</a></li>
     </ul>
 </div> 

 <div id = "bas" style = "margin-top: -15px;">
        <div class = " headers " style = "height: 57px; min-width:1300px; margin-left: 80px;">
            <div class="log" onclick="window.location.reload()"></div>
            <p id = "desserts"  ><a style = "color:white;" href="{{route('desserts')}}">{{__('DESSERTS')}}</a></p>
            <p id = "birthdays" ><a style = "color:white;" href="{{route('birthdays')}}">{{__('BIRTHDAYS')}}</a></p>
            <p id = "weddings"  ><a style = "color:white;" href="{{route('weddings')}}">{{__('WEDDINGS')}}</a></p>
            <p id = "about"  ><a style = "color:white;" href="{{route('about')}}" >{{__('ABOUT US')}}</a></p>
            <p id = "contact" ><a style = "color:white;"href="{{route('order')}}">{{__('ORDER NOW')}}</a></p>
        </div>

        

        <div class = "bg1" style="height:200px;">
            <h3 id = "gggg">{{__('Order now')}}</h3>
        </div>

        <div id = "inputs-content" style="margin-left:300px;">
		<form  action="{{ route('upload.store') }}" method="POST">
			@csrf
      <h2 id = "ii" style = "color:#cc7894; margin-top: 50px;">{{__('Customer information')}}</h2>
    <div class = "caa">
			<input id="cak" type="text" name="name" placeholder="Enter your name and surname..." ><br>
			<input id="cak" type="email" name="email" placeholder="Enter your e-mail address..."><br>
			<input id="cak" type="text" name="phone" placeholder="Enter your telephone number..."><br>
    </div>
    <h2 id = "ii" style = "color:#cc7894; margin-top: 20px;">{{__('Upload your cake design')}}</h2>
    <input id="cak"type="file" name="image" placeholder="Choose image" style ="color:#cc7894; margin-top:10px;" multiple ><br>
    <div id = "inf">
  <h2 style = "color:#cc7894;" >{{__('Information about your order')}}</h2>
    </div>
      <textarea rows = "8" cols = "70" name="info"></textarea>
			<button type="submit" id = "submit" style="width:300px; height:40px; margin-left: 250px; font-size:20px;">Upload your order</button><br>
		  <button type="submit" id = "submit" style="width:300px; height:40px; margin-left: 250px; font-size:20px;"><a style = "color:white;" href = "{{route('sending')}}">Submit your order</a></button><br>
    </form>
		
	</div>



        <p id = "cittt" style = "color:grey; font-size: 20px;">{{__('According to Britannicas site,')}} 
            <q cite = "https://www.britannica.com/topic/cake" style = "color:pink;">{{__('Cake, in general, any of a variety of breads, shortened or unshortened, usually shaped by the tin in which it is baked; more specifically, a sweetened bread, often rich or delicate.In the codified cuisine of France, all cakes, or gâteaux, derive from one of eight basic doughs: short pastry, flake pastry, sweet pastry, savarin, brioche, baba, chou pastry, and genoise. To these are added an infinite variety of flavouring and decorative ingredients, such as marzipan, sugar icing, spices, fruits, and cremes. The torte is a very rich cake found throughout Europe, often of numerous thin layers and containing nuts, fruit, creme, and chocolate in combination. The claim to invention of the world-famous chocolate Sachertorte is disputed between two Vienna hotels.')}}</q>
        </p>

<div class="foot" >
                        <div id="footer" style="width: 24rem; height:20rem;" >
                            
                                <div class="textwidget">
                                    
<h2 id = "f">{{__('Bakery hours')}}</h2>
<pre style = "font-size:16px; margin-left: -20px;">
         <strong>{{__('Monday')}}</strong>    10am - 5pm
         <strong>{{__('Tues-Fry')}}</strong>  9:30am - 5:30pm
         <strong>{{__('Saturday')}}</strong>  10am - 2pm
         <strong>{{__('Sunday')}}</strong>    {{__('Closed')}}
     </pre>

                                </div>
                            
                        </div>
                        
                        <div id="footer" style="width: 24rem; height:20rem;" >
                            
                                <div class="textwidget">
                                    
<h2 id = "f">{{__('Bakery location')}}</h2>
<address id = "add">
         {{__('Ryskulov Avenue')}}<br>
        {{__('Almaty, Kazakhstan')}}<br>
        ABB 150
     </address>
                                </div>
                            
                        </div>
                        
                        <div id="footer" style="width: 24rem; height:20rem;" >
                            
                                <div class="textwidget">
                                    
<h2 id = "f">{{__('Place an order')}}</h2>
<pre style = "font-size:16px;">
      <strong>{{__('Phone')}}</strong>   8 (7172) 345 7678
      <strong>{{__('Text')}}</strong>    8 (7172) 345 7688
      <strong>{{__('Email')}}</strong>   ordercake@mail.com
  </pre>

                                </div>
                           
                        </div>
                    </div>

<h3 style="text-align: center; font-family:Verdana, sans-serif; font-size: 15px;">{{__('Author: Yembergenova Assel, 190103021')}}</h3>

<style>
* {
  box-sizing: border-box;
}
h2 {
  display: block;
  font-size: 1.5em;
  font-weight: bold;
  text-align: center;
}
p {
  margin: 0 0 20px 0;
  text-align: center;
}
#button {
  color: #cc7894;
  font-weight: bold;
  text-decoration: none;
  cursor: pointer;
  border-color: transparent;
  background-color: #ffe4e1;
}
h1,
h2,
h3,
h5,
h6 {
  font-family: sans-serif;
  font-weight: 400;
  color: #000;
  margin: 0 0 20px 0;
}
#f {
  color: white;
  font-family: serif;
  font-size: 35px;
}
.boot {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: space-around;
  background-color: #ffe4e1;
  height: 350px;
}
.boot1,
.boot2,
.boot3 {
  margin-top: 30px;
}
.foot {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: space-around;
  background-color: #cc7894;
  height: 350px;
}
#footer {
  margin-top: 100px;
  color: white;
}
#m {
  width: 42px;
  height: 7px;
  background-color: #cc7894;
  margin: 6px 0;
}
.mob {
  display: none;
}
#us1,
#us2,
#us3,
#row {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: space-around;
  margin-top: 50px;
}
#us1,
#us2,
#us3,
#us {
  margin-top: 50px;
}
.c {
  background-color: white;
  margin-bottom: 50px;
}
.cit {
  width: 100%;
  height: 60%;
}
.ct {
  text-align: center;
  font-family: sans-serif;
  font-size: 20px;
}
.card-text {
  text-align: center;
}
.log {
  width: 141px;
  height: 220px;
  position: absolute;
  top: -80px;
  left: -45px;
  z-index: 200;
  background: url(https://doubletakecakes.ca/wp-content/themes/DoubleTakeCakes/images/dtc-logo.png) no-repeat;
  display: block;
  text-indent: -9999px;
}
#map {
  width: 1000px;
  height: 400px;
  margin-left: 150px;
  border: 5px solid #cc7894;
  display: none;
  margin-bottom: 20px;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
@media screen and (max-width: 800px) {
  #inputs-content {
    max-width: 400px;
    position: relative;
    left: -310px;
  }
  .caa {
    margin-left: 95px;
    max-width: 300px;
  }
  #cak1 {
    position: relative;
    left: -60px;
    max-width: 120px;
  }
  #cak2 {
    max-width: 100px;
    left: -47px;
    position: relative;
  }
  #cak {
    margin-left: 10px;
  }
  #inf {
    margin-left: 100px;
    width: 300px;
    font-size: 13px;
  }
  #inp {
    margin-left: 50px;
    max-width: 350px;
    max-height: 150px;
  }
  .ch1 {
    margin-left: 130px;
    margin-top: 20px;
  }
  #ii {
    margin-left: 70px;
    font-size: 20px;
  }
  #cake,
  #submit,
  #cak,
  #cak1,
  #cak2 {
    width: 270px;
    height: 27px;
    font-size: 13px;
  }
  .b1,
  .b2,
  .b3 {
    margin-bottom: 40px;
    width: 28rem;
    height: 24rem;
  }
  #submit {
    position: relative;
    left: -70px;
  }
  #map {
    max-width: 340px;
    margin-left: 0;
  }
  .textwidget {
    height: 10rem;
  }
  body {
    overflow-x: hidden;
  }
  textarea {
    width: 300px;
    height: 150px;
    position: relative;
    left: 60px;
  }
  #gggg {
    position: relative;
    left: -40px;
  }
  .bg1 {
    position: relative;
    top: 20px;
  }
  .textwidget {
    height: 15rem;
  }
  .gener {
    position: relative;
    top: -30px;
  }
  .mob {
    position: relative;
    left: 20px;
    display: initial;
    cursor: pointer;
  }
  #home1,
  #desserts1,
  #order1,
  #weddings1,
  #birthdays1,
  #about1,
  #contact1 {
    display: block;
  }
  .boot,
  .foot {
    height: 1200px;
  }
  .foot {
    margin-top: 20px;
  }
  .boot {
    margin-top: 30px;
  }
  .headers {
    display: none;
  }
  .bg {
    position: relative;
    top: 30px;
    background-size: cover;
  }
  #home1,
  #desserts1,
  #order1,
  #weddings1,
  #birthdays1,
  #about1,
  #contact1 {
    cursor: pointer;
    padding: 15px 8px;
    list-style-type: none;
    color: white;
    margin-bottom: 20px;
    margin-top: 20px;
    text-transform: uppercase;
    height: 60px;
    font-family: sans-serif;
  }
  .container {
    background-color: #cc7894;
    text-align: center;
    height: 500px;
    padding-top: 2px;
    padding-bottom: 2px;
    width: 100%;
    font-size: 25px;
    min-width: 350px;
    align-items: center;
    margin-top: 50px;
  }
}
#add {
  margin-left: 110px;
  font-size: 18px;
}
label {
  color: #cc7894;
  margin-left: -170px;
}
#submit {
  margin-bottom: 20px;
  margin-top: 50px;
  margin-left: 180px;
  padding-left: 40px;
  background-color: #cc7894;
  color: white;
  border-color: transparent;
  text-align: center;
}
h2 {
  text-align: center;
  padding-top: 20px;
  font-family: serif;
}
.gener {
  margin-bottom: 10px;
}
#home,
#desserts,
#order,
#weddings,
#birthdays,
#about,
#contact {
  cursor: pointer;
  padding: 5px 30px;
  display: inline;
  color: white;
  background-color: #cc7894;
  font-size: 18px;
  margin-bottom: 20px;
  margin-top: 20px;
}
#image {
  margin: 20px;
  width: 370px;
  height: 340px;
}
#image #divv {
  display: inline;
}
.b1 {
  background-image: url(https://doubletakecakes.ca/wp-content/uploads/2019/10/sweet-classic-cakes.jpg);
}
.b2 {
  background-image: url(https://doubletakecakes.ca/wp-content/uploads/2019/10/savoury-pastys.jpg);
}
.b3 {
  background-image: url(https://doubletakecakes.ca/wp-content/uploads/2019/10/english-eats-sweet.jpg);
}
* {
  box-sizing: border-box;
}
#cake {
  width: 30px;
}
h4 {
  color: grey;
  margin-left: 150px;
}
#div1 {
  color: grey;
}
#div {
  position: relative;
  color: #808080;
  height: 300px;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: space-around;
  margin-bottom: 10px;
  margin-top: 10px;
}
#us4 {
  padding: 50px 0 0;
  position: relative;
  height: 270px;
  color: white;
  font-family: sans-serif;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: space-around;
  background-color: #f6dfd5;
  font-size: 10px;
  text-align: center;
  margin-bottom: 10px;
  margin-top: 10px;
}
.gener {
  margin-top: 70px;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: space-around;
  margin-bottom: 40px;
}
h6 {
  font-size: 20px;
  font-family: sans-serif;
  margin-bottom: 20px;
  margin-top: 20px;
  text-align: center;
}
input {
  width: 400px;
  height: 40px;
  margin-left: 210px;
  border-color: #cc7894;
  font-size: 20px;
  text-align: center;
  font-family: sans-serif;
  margin-bottom: 10px;
  margin-top: 10px;
}
textarea {
  margin-left: 40px;
  border-color: #cc7894;
  font-size: 20px;
  font-family: sans-serif;
  margin-bottom: 20px;
  margin-top: 20px;
}
h1 {
  margin-top: 150px;
  text-align: center;
  text-shadow: 1px 1px black;
  color: white;
  font-family: sans-serif;
}
#toggle {
  margin-top: 20px;
  display: block;
}
.mob {
  margin-left: 50px;
}
.headers {
  text-align: right;
  padding-top: 17px;
  width: 50%;
  background-color: #cc7894;
  position: relative;
  top: 20px;
}
.bg1 {
  width: 100%;
  padding: 70px 0 40px 0;
  margin-top: 2px;
  background: url(https://doubletakecakes.ca/wp-content/themes/DoubleTakeCakes/images/bg.jpg) repeat;
  border-bottom: solid 1px #f1ebdc;
}
#gggg {
  font-size: 40px;
  margin-left: 200px;
  font-family: serif;
  color: black;
}
#inputs-content {
  border-radius: 10px;
  width: 800px;
  margin-left: 220px;
  align-items: center;
}

        </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         @endsection
</body>
</html>