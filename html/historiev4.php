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
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/472910ecc6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/historiev4.css?v=45" />
  <script src="../JavaScript/burgermenu.js"></script>

</head>

<body>
  <?php
  $title = "Planlæg din tur";
  require('../Temp/nav.html');
  require('../Temp/header.php');
  ?>
  <i class="fa-solid fa-bars" onclick="burger()"></i>
  <i class="fa-solid fa-x" onclick="burger()"></i>

  <div class="content">
    <section class="pictures-With-Text">
      <article>
        <div class="picture-wrapper">
          <div class="picture-left">
            <img src="../VisitKolding/Billedmateriale/madmarked.jpg" alt="" />
          </div>
          <div class="picture-right">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
            <p>
              Etiam bibendum, eros dignissim faucibus iaculis, arcu magna
              lacinia nisi, nec consequat leo metus vel diam. Aliquam erat
              volutpat. Integer eu ornare est, eget vehicula velit. Duis eget
              feugiat erat, eu blandit nisi. Nulla efficitur felis purus, quis
              varius dui bibendum id. Aliquam euismod suscipit lectus, vel
              maximus urna malesuada eget. Etiam ac aliquet dolor. Donec in
              aliquam dui, sed venenatis enim. Maecenas gravida nunc eget leo
              bibendum, id luctus felis commodo. Aenean ornare et metus ac
              efficitur. Quisque consectetur arcu rhoncus finibus aliquet.
            </p>
            <br />
            <p>
              Pellentesque nec nisl ut est sodales dictum. Praesent dictum
              viverra gravida. Sed tempus placerat elit sit amet fringilla.
              Cras consectetur lorem volutpat varius lacinia. Quisque sit amet
              erat lorem. Nulla eget auctor eros. Phasellus ipsum sem,
              dignissim vitae mi quis, lobortis volutpat urna. Donec fermentum
              cursus risus nec vestibulum. Vivamus hendrerit neque ipsum, a
              mollis magna venenatis sed. Sed gravida urna ex, eget dictum
              augue facilisis sed.
            </p>
            <br />
            <h2>Vestibulum ante ipsum primis in</h2>

            <p>
              faucibus orci luctus et ultrices posuere cubilia curae; Etiam
              tristique nibh urna, vitae vehicula enim mattis tristique.
              Vivamus sed turpis posuere, viverra arcu eget, dapibus justo.
              Praesent varius egestas tortor. Quisque pellentesque turpis eu
              lorem varius, eu commodo orci tempus. Proin quis sodales nibh,
              ac aliquam mi. Vivamus eget augue nulla. Cras purus orci,
              porttitor eu egestas eget, placerat sit amet purus. Proin id
              odio commodo, tincidunt ante sit amet, porta arcu. Etiam varius
              nisl sit amet magna aliquet, non pulvinar sapien vehicula.
            </p>
          </div>
        </div>
      </article>

      <article>
        <div class="picture-wrapper reverse">
          <div class="picture-left">
            <img src="../VisitKolding/Billedmateriale/madmarked.jpg" alt="" />
          </div>
          <div class="picture-right reversed-text">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
            <p>
              Etiam bibendum, eros dignissim faucibus iaculis, arcu magna
              lacinia nisi, nec consequat leo metus vel diam. Aliquam erat
              volutpat. Integer eu ornare est, eget vehicula velit. Duis eget
              feugiat erat, eu blandit nisi. Nulla efficitur felis purus, quis
              varius dui bibendum id. Aliquam euismod suscipit lectus, vel
              maximus urna malesuada eget. Etiam ac aliquet dolor. Donec in
              aliquam dui, sed venenatis enim. Maecenas gravida nunc eget leo
              bibendum, id luctus felis commodo. Aenean ornare et metus ac
              efficitur. Quisque consectetur arcu rhoncus finibus aliquet.
            </p>
            <br />
            <p>
              Pellentesque nec nisl ut est sodales dictum. Praesent dictum
              viverra gravida. Sed tempus placerat elit sit amet fringilla.
              Cras consectetur lorem volutpat varius lacinia. Quisque sit amet
              erat lorem. Nulla eget auctor eros. Phasellus ipsum sem,
              dignissim vitae mi quis, lobortis volutpat urna. Donec fermentum
              cursus risus nec vestibulum. Vivamus hendrerit neque ipsum, a
              mollis magna venenatis sed. Sed gravida urna ex, eget dictum
              augue facilisis sed.
            </p>
            <br />
            <h2>Vestibulum ante ipsum primis in</h2>

            <p>
              faucibus orci luctus et ultrices posuere cubilia curae; Etiam
              tristique nibh urna, vitae vehicula enim mattis tristique.
              Vivamus sed turpis posuere, viverra arcu eget, dapibus justo.
              Praesent varius egestas tortor. Quisque pellentesque turpis eu
              lorem varius, eu commodo orci tempus. Proin quis sodales nibh,
              ac aliquam mi. Vivamus eget augue nulla. Cras purus orci,
              porttitor eu egestas eget, placerat sit amet purus. Proin id
              odio commodo, tincidunt ante sit amet, porta arcu. Etiam varius
              nisl sit amet magna aliquet, non pulvinar sapien vehicula.
            </p>
          </div>
        </div>
      </article>
    </section>
  </div>
  <?php
  require('../Temp/footeraddress.html');
  ?>
</body>

</html>