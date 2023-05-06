<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
      crossorigin="anonymous">
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
      crossorigin="anonymous"></script>
    <script src="./scripts/main.js" crossorigin="anonymous"></script>
    <style>
        .db, .db *{
          border: solid 1px green;
        }
    </style>
</head>
<body style="background:black;">
<?php
    include './tools/common.php';
    $location = CommonTools::get_current_redirect();
    $background = CommonTools::get_current_style();
?>    

<div class="container vh-100">
  <div class="row h-50 bg-dark text-light">
    <div class="col-12 h-100 d-flex align-items-end">
      <div class="w-100 d-flex flex-column align-items-center">
        <div>You're getting redirected to my portfolio...</div>
        <div>🚀 Traveling in <span id="seconds"> ... </span> 🚀</div>
        <div> <a href="<?PHP echo $location;?>"> <?PHP echo $location;?> </a> </div>
      </div>
    </div> 
  </div>
  <div class="row h-50">
    <div class="col-12 h-100 <?php echo $background;?> d-flex align-items-center">
      <div class="w-100 d-flex flex-column align-items-center">
        <div><a 
          class="btn btn-dark"
          href="<?php echo $location;?>"
          >Go directly</a></div>
      </div>
    </div> 
  </div>
</div>

<script>
  const redirect = "<?php echo $location;?>";
  wait(
    ()=> document.location.replace(redirect),
    (e) => setSeconds(e),
    5
    );
</script>

</body>
</html>
