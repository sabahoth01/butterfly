//This file is for changes that may occur in the future,, zero need!!

<?php
if(empty($_POST['firstname'])  || empty($_POST['name']) || empty($_POST['message'])
|| !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$firstname = strip_tags(htmlspecialchars($_POST['firstname']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "";// email
$subject = "Butterfly new message:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $firstname $name\n\nEmail: $email\n\nMessage: $message";
$header = "From: $email ";
$header .= "Reply-To: $email";

if(!mail($to, $subject, $body, $header)){
  http_response_code(500);}
  else{
  mail($to,$subject,$body,$header);}

  //secure against email injection
  function IsInjected($str)
  {
      $injections = array('(\n+)',
             '(\r+)',
             '(\t+)',
             '(%0A+)',
             '(%0D+)',
             '(%08+)',
             '(%09+)'
             );

      $inject = join('|', $injections);
      $inject = "/$inject/i";

      if(preg_match($inject,$str))
      {
        return true;
      }
      else
      {
        return false;
      }
  }

  if(IsInjected($visitor_email))
  {
      echo "Bad email value!";
      exit;
  }
?>

///Formulaire

<!-- Formulaire -->
          <form class="row my-3" name="contact">
            <div class="col-6 my-2">
              <label for="firstname" class="form-label  fs-5">Prénom</label>
              <input name="firstname" type="text" class="form-control" id="firstname" required>
            </div>
            <div class="col-6 my-2">
              <label for="name" class="form-label fs-5">Nom</label>
              <input name="name" type="text" class="form-control" id="name" required>
            </div>
            <div class="col-12 my-2">
              <label for="email" class="form-label fs-5">Email address</label>
              <input name="email" type="email" class="form-control" id="email" required>
            </div>
            <div class="col-12 my-2">
              <label for="message" class="form-label fs-5">Message</label>
              <textarea name="message" class="form-control" id="message" rows="10" required></textarea>
            </div>
            <div class="col-12 my-2">
              <button v-on:click="submit()" type="submit" data-bs-toggle="submit" data-bs-target="#submit" class="btn btn-form w-100 fs-5">Envoyer</button>
            </div>
          </form>

        <!-- Modal success message -->
        <div class="modal fade" id="submit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Votre message a été envoyé avec succès!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>