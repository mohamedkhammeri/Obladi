<?php
/*
if(isset($_POST['idUpdate'])){
  header("location: updateProductShop.php?idUpdate={$_POST['idUpdate']}");
}*/

include_once 'includes/header.inc.php';
require_once '../core/ProduitC.php';
require_once '../entities/Produit.php';

if(isset($_POST['idSup'])){
  supprimerProduit($_POST['idSup']);
}

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
          <div class="box-header form-inline">
            <h3 class="box-title">List Products</h3>
            <style media="screen">
              @media (max-width: 751px){
                #searshForm{
                  margin-bottom:20px;
                  margin-left:0;
                }
              }
            </style>
            <div id="searshForm" class="input-group col-md-3" style="margin-left:20px;">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="button" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
            <span class="pull-right">
              <button id="addBtn" type="button" class="btn btn-success" name="button">
                <i class="fa fa-plus"></i>Add
              </button>
            </span>
          </div>
          <div class="box-body">
            <table id="" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Photo</th>
                  <th>Categorie</th>
                  <th>Sous type</th>
                  <th>Prix</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $prods=afficherProduitShop();

                foreach ($prods as $prod) {
                  ?>
                  <tr>
                    <td><?php echo $prod['titre'] ?></td>
                    <td><?php echo $prod['description'] ?></td>
                    <td><?php echo $prod['photo'] ?></td>
                    <td><?php echo $prod['categorie'] ?></td>
                    <td><?php echo $prod['soustype'] ?></td>
                    <td><?php echo $prod['prix'] ?> DT</td>
                    <td>
                      <form class="" action="" method="post">
                        <input type="hidden" name="idSup" value="<?php echo $prod['id'] ?>">
                        <button type="submit" name="" type="button" class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                          Supprimer
                        </button>
                      </form>

                      <form class="" action="updateProductShop.php" method="get">
                        <input type="hidden" name="idUpdate" value="<?php echo $prod['id'] ?>">
                        <button type="submit" name="" type="button" class="btn btn-warning">
                          <i class="fa fa-pencil"></i>
                          Modifier
                        </button>
                      </form>

                    </td>
                  </tr>

                  <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
//ecoute d clic
  document.getElementById('addBtn').addEventListener('click',function () {
    window.location.href='addProductShop.php';
  });
</script>

<?php
include_once 'includes/footer.inc.php';
?>
