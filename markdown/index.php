<!DOCTYPE html>
<html>
<head>
    <title>Markdown</title>
    <?php include "../php/header.php"; ?>
</head>
<body>

    <?php include "../php/nav.php"; ?>

    <div class="container-fluid background-primary-three" style="height: 30%;">
        <div class="container" style="height: 50%;">

        </div>
        <div class="container text-center" style="height: 50%;">
            <h1 style="color: #FFF;">Markdown</h1>
        </div>

        <div class="container">
            <h2 class="text-center">Coming soon :)</h2>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Markdown Preview</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <?php include "../php/scripts.php"; ?>

</body>
</html>