<?php
include('menu.php');
?>

<h1>ajout etudiant</h1>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ajout Etudiant</h5>
        <form action="" method="post">
          <div class="row">
            <div class="col-sm-6">
              <label for="">Prénom</label>
              <input type="text" name="" id="" class="form-control" />
            </div>
            <div class="col-sm-6">
              <label for="">Nom</label>
              <input type="text" name="" id="" class="form-control" />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for="">Ine</label>
              <input type="text" name="" id="" class="form-control" />
            </div>
            <div class="col-sm-6">
              <label for="">Email</label>
              <input type="text" name="" id="" class="form-control" />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for="">Telephone</label>
              <input type="text" name="" id="" class="form-control" />
            </div>
            <!-- <div class="col-sm-6">
                  <label for="">Email</label>
                  <input type="text" name="" id="" class="form-control" />
                </div> -->
          </div>
          <div class="row mt-4">
            <div class="form-group">
              <button type="submit" class="btn btn-success form-control">
                Enregistrer
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>