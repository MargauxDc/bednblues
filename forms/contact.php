<?php
 
  $receiving_email_address = 'info@bednblues.be';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_naam = $_POST['naam'];
  $contact->from_email = $_POST['email'];
  $contact->onderwerp = $_POST['onderwerp'];


  $contact->add_message( $_POST['naam'], 'Naam');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['bericht'], 'Bericht', 10);

  echo $contact->send();
?>
