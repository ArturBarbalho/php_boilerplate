<?php

class Functions{
  public static function Layout($page,$parameter=null){
    include("../views/layouts/html_header.php");
    include("../views/$page.php");
    include("../views/layouts/html_footer.php");
  }
}