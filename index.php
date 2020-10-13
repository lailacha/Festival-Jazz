<?php
require_once("controler/controller.php");

require_once("model/sqlConnect.php");
include("view/v_header.php");




if (isset($_REQUEST['action'])) {
     if ($_REQUEST['action'] == 'musicien') {
          musiciens();
     } else
     if ($_REQUEST['action'] == 'acc') {
          accueil();
     }
} else
     accueil();


include("view/v_footer.php");
