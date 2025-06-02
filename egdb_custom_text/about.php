<div class="width900">
  <br>

  <p class="p_font18" style="text-align:justify">
    <b>OliveAtlas</b> aims to provide interactive bioinformatics tools to explore gene expression data of olive tree.
    The current version of OliveAtlas includes data for most of the main organs of the olive tree variety Picual
    (leaves, flower, pollen, fruits, seeds, roots, stem, and meristem),
    and multiple responses to biotic and abiotic stresses such as cold, wound and infection of <i>Verticillium dahliaea</i>.
  </p>
  <p class="p_font18" style="text-align:justify">
    All the Picual expression data were analyzed based on the olive tree genome sequence published by <a href="https://doi.org/10.1002/tpg2.20010" target="_blank">Jiménez-Ruiz et al., 2020</a>
    and all data are linked to sequences and annotations available at the <a href="https://genomaolivar.dipujaen.es/" target="_blank">OliveTreeDB</a>.
  </p>

  <p class="p_font18" style="text-align:justify">
    <b>OliveAtlas</b> was developed by researchers from three Spanish research centers: the <a href="https://www.ihsm.uma-csic.es/" target="_blank">Institute for Mediterranean and Subtropical Horticulture "La Mayora" (IHSM-UMA-CSIC)</a>, 
    the <a href="https://www.eez.csic.es/" target="_blank">Estación Experimental del Zaidín (EEZ-CSIC)</a> and 
    the <a href="https://inuouja.com/en/home-2/" target="_blank">University Institute of Research on Olive Grove and Olive Oils (INUOUJA)</a>.
  </p>
  <br>
  <p style="text-align:justify">
    Please, <a id="contact_link" onclick="contt()"> <i class="fa fa-envelope" style="font-size:24px;color:#007bff"></i> Contact us</a>
  	if you have any question or request, or if you are interested in the addition of new data.
  </p>
  <br>



  <center>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"  style="margin-bottom:20px">
        <a href="https://www.ihsm.uma-csic.es/" target="_blank"><img class='rounded' src='<?php echo "$images_path/IHSM.jpg";?>' width="100%" alt='IHSM-UMA-CSIC'></a>
        <br>
        IHSM-UMA-CSIC
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"  style="margin-bottom:20px">
        <a href="https://www.eez.csic.es/" target="_blank"><img class='rounded' src='<?php echo "$images_path/EEZ.jpeg";?>' width="100%" alt='EEZ-CSIC'></a>
        <br>
        EEZ-CSIC
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"  style="margin-bottom:20px">
        <a href="https://inuouja.com/en/home-2/" target="_blank"><img class='rounded' src='<?php echo "$images_path/UJA.jpg";?>' width="100%" alt='INUOUJA'></a>
        <br>
        INUOUJA
      </div>
    </div>
  </center>

  <hr>
  <h2>Funding</h2>
  <p>
    This project was possible thanks to the next funding agencies and projects: 
    Junta de Andalucía (EMERGIA20_00286, P18-RT-1577, PYC20 RE 009 CSIC. EEZ y UMA20-FEDERJA-029), and 
    Ministerio de Ciencia e Innovación (MICINN) (RYC2020-030219-I, PID2021-125805OA-I00, 20224AT004, PID2020-113324GB-100, TED2021-130015B-C21 and TED2021-130015B-C22).
  </p>

  <center>
  <div>
    <img class='rounded funding_logo' src='<?php echo "$images_path/logos/RyC_logo.png";?>' height="90px" alt='Logo financiacion RyC'>
    <img class='rounded funding_logo' src='<?php echo "$images_path/logos/csic_logo.png";?>' height="70px" alt='Logo CSIC'>
    <img class='rounded funding_logo' src='<?php echo "$images_path/logos/junta_feder_logo.png";?>' height="90px" alt='Logo Junta de Andalucia'>
  </div>
  </center>

  <hr>
  <h2>How to cite OliveAtlas</h2>

  <?php 
    if ( file_exists(realpath("$custom_text_path/db_citation.php")) && filesize(realpath("$custom_text_path/db_citation.php")) >0) {
      include_once realpath("$custom_text_path/db_citation.php");
    }
  ?>

</div>

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
    margin-right:20px;
    margin-bottom:20px;
  }
 
  #contact_link {
    color: #007bff;
    cursor: pointer;
  }
  
</style>