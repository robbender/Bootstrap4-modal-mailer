<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0962b4b017.js"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="styles.css">
    <title>PHP Mailer Practice</title>
  </head>
  <body>

    <!-- First Basic Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100" id="exampleModalLabel">Contact Us</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form role="form" action="contact.php" method="post" enctype="multipart/form-data" id="reused_form">
            <p> Send your message in the form below and we will get back to you as early as possible. </p>
            <div class="form-group">
              <label for="sender-first-name" class="col-form-label">First Name</label>
              <input type="text" class="form-control" id="sender-first-name" name="firstName" required maxlength="25">
            </div>
            <div class="form-group">
              <label for="sender-last-name" class="col-form-label">Last Name</label>
              <input type="text" class="form-control" id="sender-last-name" name="lastName" required maxlength="25">
            </div>
            <div class="form-group">
              <label for="sender-email" class="col-form-label">Email</label>
              <input type="email" class="form-control" id="sender-email" name="email" required maxlength="25">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text" name="message" required maxlength="6000" rows="7"></textarea>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary" id="btnContactUs">Send</button>
          <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Sent your message successfully!</h3>
          </div>
          <div id="error_message" style="width:100%; height:100%; display:none; ">
            <h3>Error</h3> Sorry there was an error sending your form.
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Basic Modal -->

    <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">PHP Mailer Practice</h2>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-light btn-xl" data-toggle="modal" data-target="#myModal">
        Contact Us
      </button>

      <!-- <a class="btn btn-light btn-xl" href="mailto:hello@robertbender.net">Contact Us</a> -->
      <!-- <a class="btn btn-light btn-xl" href="mailto:hello@robertbender.net">Contact Us</a> -->
    </div>
  </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
  </body>
</html>

<!-- To get php server running: php -S localhost:4000 -->
