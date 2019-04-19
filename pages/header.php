<?php
function active($current_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);
  if($current_page == $url){
      echo 'current'; //class name in css
  }
}
?>

<header>
  <div class="div-logo">
      <a href="#"><img src="\RaphRuffier\img\LogoR_blanc.png" alt="logo"></a>
  </div>
  <nav>
    <ul class="snip1189" id="list-nav">
      <li class="<?php active("index.php")?>"><a href="\RaphRuffier\index.php">HOME</a></li>
      <li class="<?php active("Videos.php")?>"><a href="\RaphRuffier\pages\Videos.php">VIDEOS</a></li>
      <li class="<?php active("Photos.php")?>"><a href="\RaphRuffier\pages\Photos.php">PHOTOS</a></li>
      <li class="<?php active("Pricing.php")?>"><a href="\RaphRuffier\pages\Pricing.php">PRICING</a></li>
      <li class="<?php active("Contact.php")?>"><a href="\RaphRuffier\pages\Contact.php">CONTACT</a></li>
    </ul>
  </nav>
  <div id="hamburger">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</button>
</header>
