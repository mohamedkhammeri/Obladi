<?php
include_once 'includes/header.inc.php';
require_once '../core/ProduitC.php';

?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Products
      <small>Shop</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Products</a></li>
      <li class="active">Shop</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Photo</th>
                  <th>Categorie</th>
                  <th>Sous type</th>
                  <th>Prix</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $prods=afficherProduitShop();
                
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include_once 'includes/footer.inc.php';
?>
