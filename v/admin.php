<link rel="stylesheet" href="./assets/css/bootstrap-grid.css" />
<link rel="stylesheet" href="./assets/css/bootstrap.css" />


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <hr class="my-4">
        <h1 class="display-4">Management</h1>
        <hr class="my-4">
        <p class="lead">You can create, update and suppress project</p>
        <?php
        foreach ($listView as $item) {


            ?>
            <!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
            <div class="image fit">
                <center><a id="test" href="?p=project"><img src="images/pic01.jpg" alt=""/><?=$item->getName();?></a></center>
            </div>

            <?php
        }
        ?>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <hr class="my-4">
        <h1 class="display-4">Project</h1>
        <hr class="my-4">
        <a href="?p=addProject&add" class="btn btn-link">| Add project |</a>
        <a href="?p=updateProject&update" class="btn btn-link">| Update project |</a>
        <a href="?p=deleteProject&delete" class="btn btn-link">| Delete project |</a>

    </div>
</div>
<script src="./assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
      $("#test").mouseover(function () {
          
      });
    });
</script>