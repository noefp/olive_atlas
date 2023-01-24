<p class="p_font18">
  The <b>OliveAtlas</b> was developed by researchers from three Spanish research centers: the <a href="https://www.ihsm.uma-csic.es/" target="_blank">Institute for Mediterranean and Subtropical Horticulture "La Mayora" (IHSM-UMA-CSIC)</a>, 
  the <a href="https://www.eez.csic.es/" target="_blank">Estación Experimental del Zaidín (EEZ-CSIC)</a> and 
  the <a href="https://inuouja.com/en/home-2/" target="_blank">Center for Advanced Studies in Olive Grove and Olive Oils, Universidad de Jaén (INUOUJA)</a>.
</p>
<br>
<p>
  Please, <a id="contact_link" onclick="contt()"> <i class="fa fa-envelope" style="font-size:24px;color:#007bff"></i> Contact us</a>
	if you have any question or request, or if you are interested in the addition of new data.
</p>
<br>



<center>
  <div class="row">
    <div class="col">
      <a href="https://www.ihsm.uma-csic.es/" target="_blank"><img class='rounded' src='<?php echo "$images_path/IHSM.jpg";?>' width="100%" alt='IHSM-UMA-CSIC'></a>
    </div>
    <div class="col">
      <a href="https://www.eez.csic.es/" target="_blank"><img class='rounded' src='<?php echo "$images_path/EEZ.jpeg";?>' width="100%" alt='EEZ-CSIC'></a>
    </div>
    <div class="col">
      <a href="https://inuouja.com/en/home-2/" target="_blank"><img class='rounded' src='<?php echo "$images_path/UJA.jpg";?>' width="100%" alt='INUOUJA'></a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      IHSM-UMA-CSIC
    </div>
    <div class="col">
      EEZ-CSIC
    </div>
    <div class="col">
      INUOUJA
    </div>
  </div>
</center>

<hr>
<h2>Funding</h2>
<p>
  This project was possible thanks to the next funding agencies and projects: 
  <!-- Junta de Andalucía Emergia program [EMERGIA20_00286],  -->
  Ministerio de Ciencia e Innovación (MICINN) [RYC2020-030219-I], [PID2021-125805OA-I00] and CSIC-MICINN [20224AT004]
</p>

<div style="margin:20px">
  <!-- <img class='rounded funding_logo' src='<?php// echo "$images_path/logos/junta_logo.png";?>' height="70px" alt='Logo Junta de Andalucia'> -->
  <img class='rounded funding_logo' src='<?php echo "$images_path/logos/RyC_logo.png";?>' height="90px" alt='Logo financiacion RyC'>
  <img class='rounded funding_logo' src='<?php echo "$images_path/logos/csic_logo.png";?>' height="70px" alt='Logo CSIC'>
</div>
<hr>
<h2>How to cite OliveAtlas</h2>


<script>
  function contt() {
      var addr = "noe_fernandez_po" + 'zo>cs' + "ic_es";
      addr = addr.replace(/_/g, ".");
      addr = addr.replace(">", "@");
      //alert("addr: no"+addr);
      window.location.href='mailto:'+addr+'?subject=OliveAtlas Contact';
  }
</script>
<style>
  
  .funding_logo {
    margin:20px;
  }
  #contact_link {
    color: #007bff;
    cursor: pointer;
  }
  
</style>