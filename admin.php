<?php session_start();

//if(isset($_SESSION['korisnik'])) && $_SESSION['korisnik']->naziv == "admin") {
  require_once 'config/konekcija.php';
  require_once "views/head.php";
  require_once "views/admin/admin_header.php";
  //require_once 'models/post/post.php';
  //require_once 'models/post/delete_post.php';

if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'login':
      require_once "views/main/log_in.php";
      break;

    case 'admin':
      require_once "views/slider.php";
      require_once "views/help_desk.php";
      require_once "views/fun_fact.php";
      require_once "views/partner.php";
      require_once "views/pricing_area.php";
      require_once "views/testimonials.php";
      require_once "views/mobile_app_area.php";
      break;

    case "blog":
      require_once 'models/post/post.php';
      require_once 'views/admin/post.php';
      break;

      case 'cars':
      require_once 'views/main/car.php';
      break;

    default:
      require_once 'views/404.php';
      break;
  }
} else { if(!isset($_GET['page']))
      require_once 'views/404.php';

}
require_once 'views/footer.php';
// } else {
//   header("Location: index.php?page=home");
// }
