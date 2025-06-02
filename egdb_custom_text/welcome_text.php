<div class="header-content">
  <br>
  <h1 class="text-center">Welcome to <span style="color:#bb6;">Olive</span>Atlas</h1>
  <h4>The gene expression atlas for Olive tree (<i>Olea europaea L.</i>)</h4>
  <br>
  <a href="/easy_gdb/about.php" class="btn-find-out-more no-link-style" style="background-color:#994; border: 1px solid #fff;"><b><span style="color:#fff;">Find out more</span></b></a>
</div>


<style>

  .page_container {
    padding-left: 0px !important;
    padding-right: 0px !important;
    height: 95vh;
    background: url("<?php echo $images_path.'/olive_landing.jpg' ?>") no-repeat center center/cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 5%;
    position: relative;
    background-size: cover;
    text-align: center;
    box-sizing: border-box;
  }

  .header-content {
      max-width: 1200px;
      margin-bottom: 50px;
  }

  h1 {
      font-size: 5em;
      font-weight: bold;
      margin: 0;
      line-height: 1.2;
      color: #fff;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
  }

  h4 {
      font-size: 1.5em;
      margin: 25px 0;
      line-height: 1;
      color: #fff;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
  }

  .btn-find-out-more {
      display: inline-block;
      padding: 15px 30px;  
      background-color: #459919;   
      color: white;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      font-size: 18px;
  }

  .btn-find-out-more:hover, 
  .btn-find-out-more:focus {
      text-decoration: none;  
      color: white;  
      background-color: #69a925;  
  }

  .no-link-style {
      text-decoration: none;  
      color: inherit;  
  }

  .no-link-style:active, .no-link-style:focus, .no-link-style:visited {
      color: inherit;
      text-decoration: none;   
      outline: none;  
  }

  #gdb_footer {
    margin-top: 0px !important;
/*    position: fixed !important;*/
    bottom: 0 !important;
  }


</style>