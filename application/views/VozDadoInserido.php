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
  <?php if($inserido != NULL){

      $lastinserted = $inserido;


  }?>
  <script>
  window.onload = function(){
    responsiveVoice.speak('Você adicionou a atividade: ','Brazilian Portuguese Female');
    responsiveVoice.speak('<?php echo $lastinserted;?>','Brazilian Portuguese Female');

  }
  </script>
</body>
</html>
