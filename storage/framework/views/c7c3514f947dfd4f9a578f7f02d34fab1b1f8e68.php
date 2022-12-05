

<?php $__env->startSection('page'); ?>
    <a href="/home">Back to home</a>

    <article>
      <h2><?php echo e($book['title']); ?></h2>
      <h5>Author : <?php echo e($book['author']); ?></h5>
      <p><?php echo e($book['body']); ?></p>
  </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\digilabLaravel\resources\views/books.blade.php ENDPATH**/ ?>