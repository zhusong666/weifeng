<?php echo $__env->make('admin.layouts._meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin.layouts._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin.layouts._menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.layouts._blank', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('admin.layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>