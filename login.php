
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>The Login Page</title>
     <link rel="stylesheet" href="bootstrap.css" media="screen">
     <link rel="stylesheet" href="style.css" media="screen" >

   </head>
   <body>
     <h1>Login into your account</h1>

     <div class="container">
       <div class="row">

  <div class="col-sm-4"></div>

         <div class="col-md-4">

  <div class="login-div">

           <form role="form">
         <div class="form-group">
           <p>
             <input type="email" id="email" class="form-control" placeholder="Email...."></p>
             </div>

             <div class="form-group">
            <p>
              <input type="password" id="password" class="form-control" placeholder="Password....."></p>
                 </div>

           <button type="submit" onclick=log(); name="login" class="btn btn-warning btn-lg btn-block" value="login">Login into Account</button>
       </form>
     </div>


         </div>
         <div class="col-sm-4"></div>

         </div>
      </div>


      <h1>Welcome User</h1>

      <div class="container">
        <div class="row">

     <div class="col-sm-3"></div>

        <div class="col-md-6">

            <div class="user-div">

     <p id="user-para"> Welcome to Firebase web Login.<br>
     You are currently logged-in</p>

            <button type="submit" onclick=log(); name="logout" class="btn btn-warning btn-lg btn-block" value="logout">Logout </button>
          </div>

          </div>
          <div class="col-sm-4"></div>

          </div>
       </div>



      <div class="footer">&copy; 2018 MySample Login Form. All rights reserved | Design by
      			<a href="http://Remy.com">Remy</a>
      		</div>



          <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase.js"></script>
          <script>
            // Initialize Firebase
            var config = {
              apiKey: "AIzaSyD9VCrWGD4KJm5yl405n0Ckck2plYHF5ek",
              authDomain: "final-pro-a1.firebaseapp.com",
              databaseURL: "https://final-pro-a1.firebaseio.com",
              projectId: "final-pro-a1",
              storageBucket: "final-pro-a1.appspot.com",
              messagingSenderId: "78790287064"
            };
            firebase.initializeApp(config);
          </script>

<script src="index.js"></script>

   </body>
</html>
