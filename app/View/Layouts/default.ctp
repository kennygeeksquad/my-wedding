<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $title_for_layout; ?></title>
  <meta name="description" content="<?php echo $meta_for_layout; ?>" />
  <link href="/favicon.ico" type="image/x-icon" rel="icon" />
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/global.css">
</head>
<body>
  <?php echo $this->Session->flash(); ?>
  <main>
    <?php echo $this->fetch('content'); ?>
  </main>
  <?php #echo $this->element('sql_dump'); ?>
</body>
</html>
