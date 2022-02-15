<?php require('./components/header.php');
require('./components/navbar.php');
require_once('./configs/database.php');
?>
<div class="container">
  <div class="row mt-5">
    <?php
    $req = $bdd->prepare("SELECT * FROM `players`");
    $req->execute();

    while ($result = $req->fetch(PDO::FETCH_ASSOC)) :
    ?>
      <div class="col-md-4">
        <div class="card text-white border bg-dark text-center" style="max-width: 18rem;">
          <img src="./dist/image/membre/<?php echo $result["image"] ?>.png" class="card-img-top" alt="Skin de <?php echo $result["pseudo"] ?>" style="text-decoration: none !important;">
          <div class="card-body">
              <h5 class="card-title text-center" style="text-decoration: none !important"><?php echo $result["pseudo"] ?></h5>
            <br>
            <a type="button" class="btn btn-dark active" href="./description.php?id=<?php echo $result["id"] ?>">En savoir plus >></a>
          </div>
        </div>
        <img src="" alt="">
      </div>
    <?php endwhile; ?>
  </div>
</div>
<?php require('./components/footer.php') ?>


<!--  -->