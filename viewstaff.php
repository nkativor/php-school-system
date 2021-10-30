<?php
include("include/header.php");
include("include/navbar.php");
 ?>

  <div class="container">
    <div class="row ">

      <div class="col-8">
        <div class="header">
          <h4 style="color:#713f8d">view staff details</h4>
        </div>
        <div class="content pt-3">
          <form class="" action="" method="post">
            <input type="text" name="search_btn" id="btn" class="form-control" style="width:200px" >
          </form><br>
          <div class="" id="box">

          </div>
        </div>
  </div>





<script>
  $(document).ready(function(){
    $("#btn").keyup(function(){
      var btn =$("#btn").val();
       if (btn!="") {
         $.post("search.php",{s:btn},function(data){
            $("#box").html(data);

         });
       }

    });
  });
</script>


 <?php
 include("include/footer.php");
  ?>
