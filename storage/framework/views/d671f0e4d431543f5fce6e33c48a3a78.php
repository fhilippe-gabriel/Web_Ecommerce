<?php if($paginator->hasPages()): ?>
<div class="flex items-center justify-between border-t border-white/10 px-4 py-3 sm:px-6">
  <div class="flex flex-1 justify-between sm:hidden">
    <?php if($paginator->onFirstPage()): ?>
      <span class="relative inline-flex items-center rounded-md border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-gray-400">Previous</span>
    <?php else: ?>
      <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="relative inline-flex items-center rounded-md border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-gray-200 hover:bg-white/10">Previous</a>
    <?php endif; ?>

    <?php if($paginator->hasMorePages()): ?>
      <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="relative ml-3 inline-flex items-center rounded-md border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-gray-200 hover:bg-white/10">Next</a>
    <?php else: ?>
      <span class="relative ml-3 inline-flex items-center rounded-md border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-gray-400">Next</span>
    <?php endif; ?>
  </div>

  <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
    <div class="p-2">
      <p class="text-sm text-gray-700">
        Mostrando
        <span class="font-medium"><?php echo e($paginator->firstItem()); ?></span>
        até
        <span class="font-medium"><?php echo e($paginator->lastItem()); ?></span>
        de
        <span class="font-medium"><?php echo e($paginator->total()); ?></span>
        resultados
      </p>
    </div>

    <div>
      <nav aria-label="Pagination" class="isolate inline-flex -space-x-px rounded-md">
        
        <?php if($paginator->onFirstPage()): ?>
          <span class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 inset-ring inset-ring-gray-700">
            <span class="sr-only">Previous</span>
            <!-- icon -->
            <svg viewBox="0 0 20 20" fill="currentColor" class="size-5" aria-hidden="true"><path d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"/></svg>
          </span>
        <?php else: ?>
          <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 inset-ring inset-ring-gray-700 hover:bg-white/5 focus:z-20">
            <span class="sr-only">Previous</span>
            <svg viewBox="0 0 20 20" fill="currentColor" class="size-5" aria-hidden="true"><path d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"/></svg>
          </a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(is_string($element)): ?>
            <span aria-disabled="true" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-400"><?php echo e($element); ?></span>
          <?php endif; ?>

          <?php if(is_array($element)): ?>
            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($page == $paginator->currentPage()): ?>
                <span aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-500 px-4 py-2 text-sm font-semibold text-white"><?php echo e($page); ?></span>
              <?php else: ?>
                <a href="<?php echo e($url); ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-200 inset-ring inset-ring-gray-700 hover:bg-white/5"><?php echo e($page); ?></a>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
          <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 inset-ring inset-ring-gray-700 hover:bg-white/5 focus:z-20">
            <span class="sr-only">Next</span>
            <svg viewBox="0 0 20 20" fill="currentColor" class="size-5" aria-hidden="true"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"/></svg>
          </a>
        <?php else: ?>
          <span class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 inset-ring inset-ring-gray-700">
            <span class="sr-only">Next</span>
            <svg viewBox="0 0 20 20" fill="currentColor" class="size-5" aria-hidden="true"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"/></svg>
          </span>
        <?php endif; ?>
      </nav>
    </div>
  </div>
</div>
<?php endif; ?>
<?php /**PATH /Users/fhilippe.many/Documents/Web_Ecommerce/resources/views/custom/pagination.blade.php ENDPATH**/ ?>