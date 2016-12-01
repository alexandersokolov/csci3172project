<?php

 ?>

 <div class="ui middle aligned center aligned grid">
     <div class="column">
         <h2 class="ui teal image header">

             <div class="content" id="logHeader">
                 Login to your account
             </div>
         </h2>
         <form class="ui large form" name="logForm" method="post">
             <div class="ui stacked segment">

                 <div id="failureMessage" class="ui negative message">
                     <div class="header">
                         We're sorry an error occured
                     </div>
                     <p>Username or password is incorrect</p>
                 </div>




                 <div class="field" id="emailField">
                     <div class="ui left icon input">
                         <i class="user icon"></i>
                         <input type="text" name="email" placeholder="Username">
                     </div>
                 </div>
                 <div class="field" id="passwordField">
                     <div class="ui left icon input">
                         <i class="lock icon"></i>
                         <input type="password" name="password" placeholder="Password">
                     </div>
                 </div>
                 <div class="ui fluid large teal submit button" id="logButton" onclick="validateLog()">Login</div>
             </div>


         </form>

         <div class="ui message">
             New to us? <a href="register.php">Sign Up</a>
         </div>
     </div>
