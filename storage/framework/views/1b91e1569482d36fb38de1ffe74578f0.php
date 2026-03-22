<?php $__env->startSection('title', 'DashBoard'); ?>
<?php $__env->startSection('Conteudo'); ?>
    <?php echo $__env->make('admin.produtos', ['produtos' => $produtos], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/fhilippe.many/Documents/Web_Ecommerce/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>