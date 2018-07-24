<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://code.responsivevoice.org/responsivevoice.js"></script>
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="head">
        <div class="row-fluid">
            <div class="span12">
                <div class="span6">
                  <?php
                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Manaus');
                    $date = strftime('%A, %d de %B de %Y', strtotime('today'));

                    //$date = date('d/m/Y', time());
                  ?>
                    <h1 class="muted">DATA VISION</h1>
                </div>
                <div>
                  <p style="font-size:40px;"> <?php echo $date;?></p>
                </div>


            </div>
        </div>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li>
                            <a onmouseover="responsiveVoice.speak('Agendar atividade','Brazilian Portuguese Female')" href="#">Agendar atividade</a>
                        </li>

                        <li>
                            <a onmouseover="responsiveVoice.speak('Atualizar atividadese','Brazilian Portuguese Female')" href="#">Atualizar atividades</a>
                        </li>

                        <li>
                            <a onmouseover="responsiveVoice.speak('Deletar atividade','Brazilian Portuguese Female')" href="#">Deletar atividade</a>
                        </li>
                        <li>
                            <a onmouseover="responsiveVoice.speak('<?php echo $date;?>','Brazilian Portuguese Female')" href="#"><?php echo $date;?></a>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
