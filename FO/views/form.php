<?php
require_once '../core/livraisonC.php';
include_once 'includes/header.inc.php';
$serviceActive="active";
include_once 'includes/navbar.inc.php';
include_once 'includes/beforeService.inc.php';
?>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <form id="myForm" method="post" action="ajoutlivraison.php">
        <label class="form_col" for="Code">Cin:</label>
        <input name="cin" id="Code" min="1" type="number" required>
        <br /><br />
        <label class="form_col" for="lastName">Nom :</label>
        <input name="nom" id="lastName" type="text" required pattern ='[A-z]{1,}' oninvalid="setCustomValidity('Veuillez entrer des lettres seulement')"
        oninput="setCustomValidity('')" required>
        <span class="tooltip">Un nom ne peut pas faire moins de 4 caractères</span>
        <br /><br />

        <label class="form_col" for="firstName">Prénom :</label>
        <input name="prenom" id="firstName" type="text" required pattern ='[A-z]{1,}' oninvalid="setCustomValidity('Veuillez entrer des lettres seulement')"
        oninput="setCustomValidity('')" >
        <span class="tooltip">Un prénom ne peut pas faire moins de 2 caractères</span>
        <br /><br />

        <label class="form_col" for="Email">Email :</label>
        <input name="mail" id="Email" type="Email" required>
        <br /><br />
        <label class="form_col" for="country">Ville:</label>
        <select name="ville" id="country" required>
          <option value="none">Sélectionnez votre region</option>
          <option value="en">Ariana</option>
          <option value="en">Les Berges  du lac</option>
          <option value="en">Menzah </option>
          <option value="en">Ariana </option>
          <option value="us"></option>
          <option value="fr"></option>
        </select>
        <span class="tooltip">Vous devez sélectionner votre region </span>
        <br /><br />
        <label class="form_col" for="Code">Code Postal:</label>
        <input name="postal" min="1" id="Code" type="number" required>
        <br /><br />
        <label class="form_col" for="etat">Etat:</label>
        <select name="etat" id="etat">
          <option>0</option>
        </select>
        <br /><br />
        <span class="form_col"></span>
        <input type="submit" name="ajouter" value="ajouter" />
        <input type="reset" value="Réinitialiser le formulaire" />
      </form>
    </div>
  </div>
</section>

<?php
$post_id = '1'; // yor page ID or Article ID
?>
<div class="container">
  <div class="rate">
    <div id="1" class="btn-1 rate-btn"></div>
    <div id="2" class="btn-2 rate-btn"></div>
    <div id="3" class="btn-3 rate-btn"></div>
    <div id="4" class="btn-4 rate-btn"></div>
    <div id="5" class="btn-5 rate-btn"></div>
  </div>
  <br>
  <div class="box-result">
    <?php
    $db=config::getConnexion();
    $query = $db->query("select * from star");
    while($data = $query->fetch())
    {
      $rate_db[] = $data;
      $sum_rates[] = $data['rate'];
    }
    if(@count($rate_db)){
      $rate_times = count($rate_db);
      $sum_rates = array_sum($sum_rates);
      $rate_value = $sum_rates/$rate_times;
      $rate_bg = (($rate_value)/5)*100;
    }else{
      $rate_times = 0;
      $rate_value = 0;
      $rate_bg = 0;
    }
    ?>
    <div class="result-container">
      <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
      <div class="rate-stars"></div>
    </div>
    <p style="margin:5px 0px; font-size:16px; text-align:center">Rated <strong><?php echo substr($rate_value,0,3); ?></strong> out of <?php echo $rate_times; ?> Review(s)</p>
  </div>
</div>

<script>
$(function(){
  $('.rate-btn').hover(function(){
    $('.rate-btn').removeClass('rate-btn-hover');
    var therate = $(this).attr('id');
    for (var i = therate; i >= 0; i--) {
      $('.btn-'+i).addClass('rate-btn-hover');
    };
  });

  $('.rate-btn').click(function(){
    var therate = $(this).attr('id');
    var dataRate = 'act=rate&post_id=<?php echo $post_id; ?>&rate='+therate; //
    $('.rate-btn').removeClass('rate-btn-active');
    for (var i = therate; i >= 0; i--) {
      $('.btn-'+i).addClass('rate-btn-active');
    };
    $.ajax({
      type : "POST",
      url : "ajax.php",
      data: dataRate,
      success:function(){}
    });
  });
});
</script>

<?php include_once 'includes/footer.inc.php'; ?>
