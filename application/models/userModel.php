<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class userModel extends CI_Model {

  function isLoggedIn() {
    //Look for a session token.
    if(isset($_SESSION['user'])) {
      return true;
    } 
    return false;
  }
}

?>