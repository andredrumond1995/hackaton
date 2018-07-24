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

<br>
<center>


  <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Manaus');
    $date = strftime('%A, %d de %B de %Y', strtotime('today'));

    //$date = date('d/m/Y', time());
  ?>

<style>
#gravar {

background-image:url('https://icon-icons.com/icons2/868/PNG/256/microphone_retro_icon-icons.com_67975.png');
background-repeat:no-repeat;
}
</style>
<div style="float:left; width:25.0%;" class="container">
  <a id="gravar" type="button" style="height:280px; width:270px;"   class="btn btn-primary btn-lg btn-block" href="#" onmouseover="startDictation()">
    </a>
</div>
  <div style="width:1200px;resize:both;">
  <div style="float:right; width:75.0%;" class="container">
  	<div class="row">
  		<div class="col-md-12">
  <!--Windows-->
  <div >
        <div class="panel-heading">

        </div>
        <div class="panel-body">


            <?php foreach ($atividades as $key => $value) {

             ?><a type="button" class="btn btn-primary btn-lg btn-block" href="#" onmouseover="responsiveVoice.speak('<?php echo $value->nome;?>','Brazilian Portuguese Female')"><?php echo $value->nome?></a>

           <?php } ?>




    </div>
    </div>
    </div>
    </div>
    </div>
  </div>




<center>

  <!-- CSS Styles -->
<style>
  .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  .speech img {float: right; width: 40px }
</style>

<!-- Search Form -->
<form id="labnol" method="post" action="<?php echo base_url();?>index.php/atividades_c/insert">
  <div class="speech">
    <input onclick="startDictation()" type="hidden" name="q" id="transcript" placeholder="Speak" />
  </div>
</form>

<!-- HTML5 Speech Recognition API -->
<script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "pt-BR";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>
  <br>
  <br>
  <br>


<script>

</script>
</body>
</html>
