<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<head>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/divfadeaway.js"></script>
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Roboto:400);
body {
  background-color:#fff;
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
}

.container {
    padding: 25px;
    position: fixed;
}

.form-login {
    background-color: #EDEDED;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}

h4 {
 border:0 solid #fff;
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}

    </style>
</head>

<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<form method="post" action="<?php echo base_url();?>index.php/Adm_c/checklogin">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">

            <div class="form-login">

              <!-- início flash data para mensagem de error caso login esteja errado-->
              <center>
              <?php if($this->session->flashdata('success')){ ?>
                      <div id="divbootstrapmsg" style="width:230px;" class="alert alert-success">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                          <strong>Successo!</strong> <?php echo $this->session->flashdata('success'); ?>
                      </div>
                  <?php }else if($this->session->flashdata('error')){  ?>
                      <div id="divbootstrapmsg" style="width:230px;" class="alert alert-danger">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                          <strong>Erro!</strong> <?php echo $this->session->flashdata('error'); ?>
                      </div>
                  <?php }else if($this->session->flashdata('warning')){  ?>
                      <div id="divbootstrapmsg" class="alert alert-warning">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                          <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                      </div>
                  <?php }else if($this->session->flashdata('info')){  ?>
                      <div id="divbootstrapmsg" class="alert alert-info">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                          <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                      </div>
                  <?php } ?>
                </center>

            <!-- fim flash data para mensagem de error caso login esteja errado-->
            <h4>Administração:</h4>
            <input type="text" id="senha" name="login" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" id="senha" name="senha" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login"
                <i class="fa fa-sign-in"></i></a>

            </span>
            </div>
            </div>

        </div>
    </div>
</div>
</form>
