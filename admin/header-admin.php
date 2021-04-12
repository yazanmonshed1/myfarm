<?php 
   include("../lib/variables.php");
   require_once("../etc/config.php");

   $user = new Users();

   if ($user->checkIfUserLogin() == 0) {
    header("location:../index.php");
   }

  $header= ' <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,700i,800,900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href= ../images/faveicon-icon.png "/>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/all.min.css"/>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-rtl.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
    
  <script src="js/script.js"></script>

</head>
<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <!--logo start-->
      <a href="../index.php" class="logo">
        <img src="../images/rtl-logo-Recovered3.png" alt="سكني">
      </a>
      <!--logo end-->';

      $header.='
      <ul class="sidebar-menu admin-menu" id="nav-accordion">
      <li class="menu-item">
        <a class="'.(($_SESSION["active"]=="profile")?"active":" ").'" href="index.php">
          <span>الصفحة الشخصيه</span>
        </a>
      </li>';

      if ($_SESSION['login']['user_status']==0 || $_SESSION['login']['user_status']==1) {
        $header.=
        '<li class="menu-iem">
          <a class="'.(($_SESSION["active"]=="residence")?"active":" ").'" href="residence.php">
            <span>السكنات</span>
          </a>
        </li>';
      }

      if ($_SESSION['login']['user_status']==0) {
        $header.=
        '<li class="menu-item">
          <a class="'.(($_SESSION["active"]=="users")?"active":" ").'" href="users.php">
            <span>المستخدمين</span>
          </a>
        </li>
        <li class="menu-item">
          <a class="'.(($_SESSION["active"]=="university")?"active":" ").'" href="university.php">
            <span>الجامعات</span>
          </a>
        </li>
        <li class="menu-item">
          <a class="'.(($_SESSION["active"]=="city")?"active":" ").'" href="city.php">
            <span>المحافظات</span>
          </a>
        </li>';
      }
      
      $header.='
    </ul>';

      
      
      $header.='
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../logout.php">تسجيل خروج</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->';

    echo $header;
?>
