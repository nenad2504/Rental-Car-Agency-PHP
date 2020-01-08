<?php session_start();
  require_once 'config/konekcija.php';
  require_once "views/head.php";
  require_once "views/header.php";

if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'register':
      require_once 'views/main/register.php';
      break;

    case 'login':
      require_once "views/main/log_in.php";
      break;

    case 'home':
      require_once "views/slider.php";
      require_once "views/help_desk.php";
      require_once "views/fun_fact.php";
      require_once "views/partner.php";
      require_once "views/pricing_area.php";
      require_once "views/testimonials.php";
      require_once "views/mobile_app_area.php";
      break;

    case 'about':
      require_once 'views/main/about.php';
      require_once 'views/facility.php';
      require_once 'views/partner.php';
      require_once 'views/testimonials.php';
      break;

    case 'services':
      require_once 'views/main/service.php';
      require_once 'views/partner.php';
      require_once 'views/testimonials.php';
      break;

    case 'cars':
      require_once 'views/main/car.php';
      break;

    case "blog":
      require_once 'models/post/post.php';
      require_once 'views/main/blog.php';
      require_once 'views/main/single_post.php';
      break;

      case "single_post":
        require_once 'models/post/post.php';
        require_once 'views/single_post_banner.php';
        require_once 'views/main/single_post.php';
        break;

    case "contact":
      require_once 'views/main/contact.php';
      require_once 'views/map_area.php';
      break;

    default:
      require_once 'views/404.php';
      break;
  }
} else { if(!isset($_GET['page']))
      require_once 'views/404.php';

}
require_once 'views/footer.php';
?>
