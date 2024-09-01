<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <style>
    .caption {
      text-align: center;
      font-weight: bold;
    }
    .contact-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      border: solid 2px black;
      background-color: wheat;
    }
    .contact-details {
      width: 40%;
      margin-right: 15px;
    }
    .contact-form {
      width: 50%;
      margin-right: -34%;
    }
    .contact-form label,
    .contact-form input,
    .contact-form textarea,
    .contact-form input[type="submit"] {
      display: block;
      margin-bottom: 10px;
    }
    .contact-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <section class="">
    <?php
    include 'header.php';
    ?>
    <section class="caption">
      <br><br>
      <h2 class="caption" style="text-align: center">Contact us</h2>
    </section>
  </section>
  <section class="listings">
    <div class="wrapper">
      <div class="contact-container">
        <div class="contact-details">
          <br> <br> <br> <br>
          <h3>Contact Details</h3>
          <p><b>Phone:</b> +7223051013</p>
          <br>
          <p><b>Email:</b> soniarunesh511@gmail.com</p>
          <br>
          <p><b>Address:</b> Sidhi, Madhya Pradesh, India</p>
        </div>
        <div class="contact-form">
          <h3>Send Us a Message</h3>
          <form action="/submit_contact_form" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </section> <!--  end listing section  -->
  <section class="">