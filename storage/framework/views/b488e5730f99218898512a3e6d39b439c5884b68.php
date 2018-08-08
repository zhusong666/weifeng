<?php echo $__env->make('home.layouts._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home.layouts._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>



<?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('home.layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>