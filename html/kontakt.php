<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kopke</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/472910ecc6.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/kontakt.css" />
    <script src="../JavaScript/kontakt.js" defer></script>
  </head>
  <body>
  <?php
require('../Temp/nav.html');
require('../Temp/header.html');
?>
    <div class="content">
    <form id="formm" action="/" method="get" onsubmit="return(validate())">
    <div class="error-message"><h3>Fix Following Errors:</h3></div>
        <div class="form-wrapper">
          <div class="inputs">
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Skriv dit navn"
            />
            <br />
            <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder=" Skriv dit efternavn"
            />
            <br />
            <input
              type="email"
              name="mail"
              id="mail"
              placeholder="Skriv din email"
            />
            <br />
            <input
              type="text"
              name="message"
              id="message"
              placeholder="Skriv en besked"
            />
            <br />
          </div>

          <div class="textarea-and-button">
            <textarea
              name="textarea"
              id=""
              cols="50"
              rows="10"
              placeholder="Skriv en besked"
            ></textarea>
            <br />
            <button type="submit">send</button>
          </div>
        </div>
      </form>
    </div>
    <?php
require('../Temp/footeraddress.html');
?>
  </body>
</html>
