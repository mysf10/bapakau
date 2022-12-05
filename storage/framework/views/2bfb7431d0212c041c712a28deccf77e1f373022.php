<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Digilab | <?php echo e($title); ?></title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a class="navbar-brand" href="/home">Digilab</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php echo e(($title === "Profile") ? 'active' : ''); ?>" href="/profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo e(($title === "Borrowing") ? 'active' : ''); ?>" href="/borrow">Borrowing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo e(($title === "History") ? 'active' : ''); ?>" href="/history">History</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container mt-4">
    <?php echo $__env->yieldContent('page'); ?>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\digilabLaravel\resources\views/layouts/main.blade.php ENDPATH**/ ?>