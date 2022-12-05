

<?php $__env->startSection('page'); ?>
    <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="mb-5">
            <h2>
              <a href="/books/<?php echo e($buku["slug"]); ?>"><?php echo e($buku['title']); ?></a>
            </h2>
            <h5>Author : <?php echo e($buku['author']); ?></h5>
            <p><?php echo e($buku['body']); ?></p>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\digilabLaravel\resources\views/home.blade.php ENDPATH**/ ?>