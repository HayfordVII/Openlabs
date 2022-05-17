<?php 
   session_start();
?>
   


<html lang="en">
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="download.png" type="image/x-icon">
    <title>Home-Section | Openlabs</title>
</head>
<body> 

<header >
  <div class="container" >
    <nav class="nav">
      <a href="#home" class="logo"><img src="imgs/Openlabs-min.png" alt="" height="70px"></a>
        

      <?php if(isset($_SESSION["useruid"])){ ?>
        <ul class="nav-list">
          <li>
            <a href="home-emp.php" class="nav-link">Home</a>
          </li>
          <li>
            <a href="home-emp.php#services" class="nav-link">Services</a>
          </li>
          <li> 
              <a href="home-emp.php#carrer" class="nav-link">Carrer Path</a>
          </li>
          <li>
              <a href="home-emp.php#about" class="nav-link">About Us</a>
          </li>
          <li>
              <a href="home-emp.php#contact" class="nav-link">Contact</a>
          </li>
        </ul>
        <div class="header_right_2" style="border-left: 1px solid grey;">
          <div class="nav_link">
            <div class="nav_icon">
              <img src="image.png" alt="non" style="height:30px;object-fit: contain;border-radius:50px; ;">
            <div class="nav_text dropdown drop">
              <i class="bi bi-caret-down-fill dropdown" style="font-size: 1rem  !important; float: center;"></i>
              <div class="dropdown-content">
                  <div class="dropdown_profile">
                      <img src="image.png" style="height:50px;object-fit: contain;border-radius:50px;" alt="noimage">
                      <div class="dropdown_profile_info" style="padding-left:10px;">
                          <div class="act_title">
                            <a href=""><?=$_SESSION['name']?></a>
                          </div>
                          <div class="acoount_name">
                            <a href=""><?=$_SESSION['course']?></a>
                          </div>
                      </div>
                  </div>
                  <div class="profile_view_button">
                      <a href="home.php">View profile</a> 
                  </div>
                  <div class="bdr_bottom"></div>
                  <div class="title" style="color:black;">Account</div>
                  <div class="list"><a href="messages">Messages</a></div>
                  <div class="list"><a href="notifications">Notifications</a></div>
                  <div class="list"><a href="">Log out out</div></a>
                </div>
              </div>
      <?php } else {?>

        <div class="header_right_2" style="border-left: 1px solid grey;">
          <ul class="nav-list">
            <li>
                <a href="log-in/login.php" class="nav-link">Log in</a>
            </li>
            <li>
                <a href="log-in/Sign-Page.php" class="nav-link">Sign up</a>
            </li>
          </ul>
        
      <?php }  ?>


    
            </div>
          </div>
                   
                   
        </div>
    </nav>
  </div>
</header>
