<?php $__env->startSection('title', 'Detalhes'); ?>
<?php $__env->startSection('Conteudo'); ?>

    <div class="">

        <div class="bg-white">
            <div class="pt-6">
                <nav aria-label="Breadcrumb">
                    <ol role="list"
                        class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                        <li>
                            <div class="flex items-center">
                                <a href="<?php echo e(route('site.index')); ?>" class="mr-2 text-sm font-medium text-gray-900">Home</a>
                                <svg viewBox="0 0 16 20" width="16" height="20" fill="currentColor" aria-hidden="true"
                                    class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <a href="<?php echo e(route('site.categoria', $produto->categoria->id)); ?>"
                                    class="mr-2 text-sm font-medium text-gray-900"><?php echo e($produto->categoria->nome); ?></a>
                                <svg viewBox="0 0 16 20" width="16" height="20" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>

                        <li class="text-sm">
                            <a href="#" aria-current="page"
                                class="font-medium text-gray-500 hover:text-gray-600"><?php echo e($produto->nome); ?></a>
                        </li>
                    </ol>
                </nav>

                <!-- Image gallery -->
                <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-8 lg:px-8">
                    
                    
                    
                    <img src="<?php echo e($produto->imagem); ?>" alt="Model wearing plain white basic tee."
                        class="row-span-2 aspect-4/5 size-full object-cover sm:rounded-lg lg:aspect-3/4" />
                </div>

                <!-- Product info -->
                <div
                    class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"><?php echo e($produto->nome); ?></h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl tracking-tight text-gray-900">R$
                            <?php echo e(number_format($produto->preco, 2, ',', '.')); ?>

                        </p>


                        <form action="<?php echo e(route('site.addcarrinho')); ?>" method="POST" enctype="multipart/form-data"
                            class="mt-10">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($produto->id); ?>"> <input type="hidden"
                                name="slug" value="<?php echo e($produto->slug); ?>"> <input type="hidden" name="nome"
                                value="<?php echo e($produto->nome); ?>">
                            <input type="hidden" name="preco" value="<?php echo e($produto->preco); ?>">
                            <input type="number" min="1" name="qnt" value="1">
                            <input type="hidden" name="imagem" value="<?php echo e($produto->imagem); ?>">
                            <button type="submit"
                                class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">Adicionar
                                ao Carrinho</button>
                        </form>
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900"><?php echo e($produto->descricao); ?></p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h3 class="text-sm font-medium text-gray-900">Categoria:</h3>

                            <div class="mt-4">
                                <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                    <li class="text-gray-400"><span
                                            class="text-gray-800"><?php echo e($produto->categoria->nome); ?></span></li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900">Portado Por: </h2>

                            <div class="mt-4 space-y-6">
                                <p class="text-sm text-indigo-600"><?php echo e($produto->user->first_name); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/fhilippe.many/Documents/Web_Ecommerce/resources/views/site/details.blade.php ENDPATH**/ ?>