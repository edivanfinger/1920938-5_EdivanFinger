<?php 
  include("menu.php");
  include("../dados/doces.php");
?>



    <figure style="margin:40px; text-align: center">
      <blockquote class="blockquote">
        <p>Venha conhecer os melhores doces da cidade</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title">Pessoa famosa</cite>
      </figcaption>
    </figure>
    <br>

<div class="container">
  <div class="row">
    <?php
      $arr = $arrayDoces;
      for ($i = 0; $i <= count($arr)-1; $i++) {
        echo '<div style="margin-bottom: 20px" class="col-sm">'.
        '<div class="card" style="width: 18rem;">'.
          '<img class="card-img-top" style="height: 200px;" src="'.$arr[$i]['image'].'" alt="">'.
          '<div class="card-body">'.
            '<h5 class="card-title">'.$arr[$i]['title'].'</h5>'.
            '<p class="card-text">'.$arr[$i]['description'].'</p>'.
            '<button onclick="openModal('.$i.')" type="button" class="btn btn-primary">Ver doce</button>'.
          '</div>'.
        '</div>'.
      '</div>';
      }
    ?>
    
  </div>
</div>
<br>
<br>
<br>

<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div style="text-align: center">
          <img id="image" class="card-img-top" style="height: 400px; width: 400px">
          <br><br>
          <h6 id="description"></h6>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function openModal(i){
    var obj = <?php echo json_encode($arr); ?>;
    document.getElementById("title").innerHTML = obj[i]["title"]
    document.getElementById("description").innerHTML = obj[i]["complete"]
    document.getElementById("image").src = obj[i]["image"]
    
    $('#myModal').modal('show');
  }
 
</script>

<?php
  include("footer.php");
?>
