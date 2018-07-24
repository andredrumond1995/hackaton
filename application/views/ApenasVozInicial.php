<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type = "text/css"
           href = "<?php echo base_url(); ?>assets/css/homepagestyle.css">
           <script type="text/javascript" src="<?php echo base_url();?>assets/js/homepagejs.js"></script>
  <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
</script>
</head>

<body>
  <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Manaus');
    $date = strftime('%A, %d de %B de %Y', strtotime('today'));

    //$date = date('d/m/Y', time());
  ?>
  <script>
  window.onload = function(){

    responsiveVoice.speak('Olá, você tem as seguintes atividades para hoje','Brazilian Portuguese Female')
    responsiveVoice.speak('<?php echo $date;?>','Brazilian Portuguese Female')
    responsiveVoice.speak('Ouça com atenção à partir de agora, no canto superior esquerdo, você deverá passar o mouse para inserir atividades e para saber quais atividades você possui no sistema, baste passar o mouse ao lado direito superior e ir descendo.','Brazilian Portuguese Female')
  }
</script>
</body>
</html>
