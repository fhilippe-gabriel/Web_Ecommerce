<?php $__env->startSection('title', 'Inicio'); ?>
<?php $__env->startSection('Conteudo'); ?>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group relative">
                        <img src="<?php echo e($produto->imagem); ?>" alt="Front of men&#039;s Basic Tee in black."
                            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-xl text-gray-800">
                                    <a href="<?php echo e(route('site.details', $produto->slug)); ?>">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        <?php echo e($produto->nome); ?>

                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    <?php echo e(Str::limit($produto->descricao, 120)); ?>

                                </p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">
                                R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?>

                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    



    <div class="mt-8 flex justify-center">

        <?php echo e($produtos->links('custom.pagination')); ?>

    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/fhilippe.many/Documents/Web_Ecommerce/resources/views/site/home.blade.php ENDPATH**/ ?>