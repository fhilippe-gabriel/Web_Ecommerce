<?php $__env->startSection('title', 'Carrinho'); ?>
<?php $__env->startSection('Conteudo'); ?>



    <?php if(count($itens) == 0): ?>

        <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
        <div class="bg-white">

            <div class="relative isolate px-6 pt-14 lg:px-8">

                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">

                    <div class="text-center">
                        <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Vamos as
                            compras</h1>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Ta esperando o que? Vamos
                            encher esse carrinho.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="<?php echo e(route('site.index')); ?>"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Comprar</a>
                            <a href="#" class="text-sm/6 font-semibold text-gray-900">Login <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php else: ?>
        <div class="py-24 sm:py-32 bg-white">
            <div class=" mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p
                        class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-indigo-600 sm:text-5xl lg:text-balance">
                        Seu carrinho possui: <?php echo e(count($itens)); ?> itens</p>

                    <p class="mt-6 text-lg leading-8 text-2xl font-light text-pretty text-gray-600">
                        <?php if($mensagem = @session('sucesso')): ?>
                            <?php echo e($mensagem); ?>

                        <?php endif; ?>
                    </p>

                </div>


                <div class="bg-white">
                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                        <h2 class="sr-only">Products</h2>
                        <div
                            class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                            <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="">
                                    <a href="#" class="">
                                        <img src="<?php echo e($item->attributes->image); ?>"
                                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                            class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
                                        <h3 class="mt-4 text-sm text-gray-700"><?php echo e($item->name); ?>


                                        </h3>
                                        <p class="mt-1 text-lg font-medium text-gray-900">
                                            <?php echo e(number_format($item->price, 2, ',', '.')); ?>

                                        </p>
                                    </a>



                                    
                                    <form id="remove-item-<?php echo e($item->id); ?>" action="<?php echo e(route('site.removecarrinho')); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                                    </form>

                                    
                                    <div class="mt-2 flex items-center gap-2">
                                        
                                        <form action="<?php echo e(route('site.atualizacarrinho')); ?>" method="POST"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <p class="mt-1 text-lg font-medium text-gray-900">
                                                <input type="number" name="quantity" value="<?php echo e($item->quantity); ?>"
                                                    min="1"
                                                    class="quantity-input w-16 text-center border border-gray-300 rounded px-2 py-1 appearance-none [-webkit-appearance:none] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                                    data-item-id="<?php echo e($item->id); ?>">
                                            </p>
                                        </form>
                                        <button type="submit" form="remove-item-<?php echo e($item->id); ?>"
                                            class="text-red-500 border-1 border-red-300 border-solid rounded-md p-2 flex items-center justify-center hover:bg-red-50 hover:border-red-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                </div>

                <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                    <div class="flex justify-between text-base font-medium text-gray-900">
                        <p>Subtotal</p>
                        <p class="subtotal-amount">$<?php echo e(number_format(\Cart::getTotal(), 2, '.', ',')); ?></p>
                    </div>
                    <div class="mt-6">
                        <a href="#"
                            class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-xs hover:bg-indigo-700">Checkout</a>
                    </div>
                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                        <p>
                            or

                            <a href="<?php echo e(route('site.index')); ?>" type="button" command="close" commandfor="drawer"
                                class="font-medium text-indigo-600 hover:text-indigo-500">
                                Continue Shopping
                                <span aria-hidden="true"> &rarr;</span>

                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>









    


<?php $__env->stopSection(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInputs = document.querySelectorAll('.quantity-input');

        quantityInputs.forEach(input => {
            input.addEventListener('change', function() {
                const itemId = this.getAttribute('data-item-id');
                const newQuantity = this.value;

                // Desabilitar input durante a atualização
                this.disabled = true;

                // Fazer requisição AJAX
                fetch('/atualizar', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: new URLSearchParams({
                            id: itemId,
                            quantity: newQuantity
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Reabilitar input
                        this.disabled = false;

                        // Atualizar subtotal
                        updateSubtotal();
                    })
                    .catch(error => {
                        console.error('Erro:', error);
                        this.disabled = false;
                        // Reverter valor em caso de erro
                        this.value = this.defaultValue;
                    });
            });
        });

        function updateSubtotal() {
            // Fazer requisição para obter o novo total
            fetch('/carrinho/total', {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const subtotalElement = document.querySelector('.subtotal-amount');
                    if (subtotalElement) {
                        subtotalElement.textContent = '$' + data.total.toFixed(2).replace(/\./g, ',');
                    }
                })
                .catch(error => {
                    console.error('Erro ao atualizar subtotal:', error);
                });
        }
    });
</script>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/fhilippe.many/Documents/Web_Ecommerce/resources/views/site/carrinho.blade.php ENDPATH**/ ?>