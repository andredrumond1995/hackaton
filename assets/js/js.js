
   $(document).ready(function() {
      $("#setor").change(function(){
        var ckb_status = $("#setor").prop('checked');
        
        if (ckb_status){
          $(".divsetor").toggle();
          //alert(ckb_status);
          

        }else{
          $(".divsetor").toggle();
        }
      });
 });

$(document).ready(function () {
    $("input[name='divsetor']").change(function () {
        var maxAllowed = 1;
        var cnt = $("input[name='divsetor']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('Selecione apenas um setor.');
            //$("#warning").toggle();
        }
    });
});

   $(document).ready(function() {
      $("#marca").change(function(){
        var ckb_status = $("#setor").prop('checked');
        
        if (ckb_status){
          $(".divmarca").toggle();
          //alert(ckb_status);
          

        }else{
          $(".divmarca").toggle();
        }
      });
 });


$(document).ready(function () {
    $("input[name='divmarca']").change(function () {
        var maxAllowed = 1;
        var cnt = $("input[name='divmarca']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('Selecione apenas uma marca.');
            //$("#warning").toggle();
        }
    });
});

$(document).ready(function() {
      $("#status").change(function(){
        var ckb_status = $("#status").prop('checked');
        
        if (ckb_status){
          $(".divstatus").toggle();
          //alert(ckb_status);
          

        }else{
          $(".divstatus").toggle();
        }
      });
 });


$(document).ready(function () {
    $("input[name='divstatus']").change(function () {
        var maxAllowed = 1;
        var cnt = $("input[name='divstatus']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('Selecione apenas um status.');
            //$("#warning").toggle();
        }
    });
});


$(document).ready(function() {
      $("#categoria").change(function(){
        var ckb_status = $("#categoria").prop('checked');
        
        if (ckb_status){
          $(".divcategoria").toggle();
          //alert(ckb_status);
          

        }else{
          $(".divcategoria").toggle();
        }
      });
 });


$(document).ready(function () {
    $("input[name='divcategoria']").change(function () {
        var maxAllowed = 1;
        var cnt = $("input[name='divcategoria']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('Selecione apenas uma categoria.');
            //$("#warning").toggle();
        }
    });
});

$(document).ready(function() {
      $("#localizacao").change(function(){
        var ckb_status = $("#localizacao").prop('checked');
        
        if (ckb_status){
          $(".divlocalizacao").toggle();
          //alert(ckb_status);
          

        }else{
          $(".divlocalizacao").toggle();
        }
      });
 });

$(document).ready(function () {
    $("input[name='divlocalizacao']").change(function () {
        var maxAllowed = 1;
        var cnt = $("input[name='divlocalizacao']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('Selecione apenas uma localização.');
            //$("#warning").toggle();
        }
    });
});
