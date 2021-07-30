     <nav class="navbar navbar-inverse">
        <div class="container-fluid" style="background-color:rgb(60, 65, 53);">
        <div class="navbar-header">
            <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
        </div>
            <ul class="nav navbar-nav">
                <li><a href="home.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
            <?php
            if(isset($_SESSION['login_user']))
            {
            ?> 
                    <ul class="nav navbar-nav">
                        <li><a href="profile.php">PROFILE</a></li>
                    </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">
                                <div style="color: white;">
                            <?php
                                echo "<img class='img-circle profile_img' src='images/".$_SESSION['pic']."' height=26 width=26>";
                                    echo "  " . $_SESSION['login_user'];
                                ?>
                               </div>
                    </a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                    </ul>
             <?php
            }
            else
            {    
            ?>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN-UP</span></a></li>
                </ul>
             <?php
            }?>
            <ul class="nav navbar-nav navbar-right">
            </ul>
      </div>      
   </nav> 