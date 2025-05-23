<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NAMEK - Cucina Giapponese, Thai e Cinese</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
  <link rel="stylesheet" href="css/body.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/hero.css" />
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/chisiamo.css" />
  <link rel="stylesheet" href="css/toggle.css" />
  <link rel="stylesheet" href="css/offerta.css" />
  <link rel="stylesheet" href="css/mediaq.css" />

  <style>
  @media (max-width: 768px) {
    .header {
      display: flex !important;
      flex-direction: row !important;
      justify-content: space-between !important;
      align-items: center !important;
      height: 70px !important;
      padding: 0 16px !important;
    }

    .logo {
      margin: 0 !important;
      padding: 0 !important;
      height: 100% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: flex-start !important; /* <<< STAI A SINISTRA */
      flex: 0 0 auto !important;
    }

    .logo img {
      display: block !important;
      position: relative !important;
      top: 12px !important; /* <<< ABBASSA IL LOGO */
      height: auto !important;
      max-height: 60px !important;
    }

    /* ZERO MODIFICHE AL TOGGLE */
  }
</style>


</head>
<body>

<header class="header">
  <div class="logo">
    <img src="img/logo2-.png" alt="NAMEK" />
  </div>

  <div class="menu-toggle" id="menuToggle" aria-label="Menu" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <nav class="navigation" id="main-navigation">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="galleria.php">Galleria</a></li>
      <li><a href="contatti.php">Contatti</a></li>
    </ul>
  </nav>
</header>

