<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $title_for_layout; ?></title>
  <meta name="description" content="<?php echo $meta_for_layout; ?>" />
  <link href="/favicon.ico" type="image/x-icon" rel="icon" />
  <link href='http://fonts.googleapis.com/css?family=Calligraffitti|Raleway:400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/grid.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <?php echo $this->Session->flash(); ?>
  <main id="skrollr-body">
    <?php echo $this->fetch('content'); ?>
  </main>
  <?php #echo $this->element('sql_dump'); ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/skrollr.js"></script>
  <script type="text/javascript" src="js/global.js"></script>
</body>
</html>
