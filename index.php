<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The math program, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Isaac Ip" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>The math program, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The math program, in PHP</span>
      </div>
    </header>
    <?php echo '<h6>The dimensions of a rectangle are: 5 cm and 3 cm.</h6>'; ?>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_and_perimeter.png" alt="Area and Perimeter Calculations" />
      </div>
      <div class="page-content-php">
        <?php echo '<p>The area is:</p>'; ?>
        <?php echo '<p>The perimeter is:</p>'; ?>
        <!-- Simple Textfield for integers-->
        <form action="answer.php" method="GET">
          <br />

      </div>
      <br />
    </main>
  </div>
</body>

</html>