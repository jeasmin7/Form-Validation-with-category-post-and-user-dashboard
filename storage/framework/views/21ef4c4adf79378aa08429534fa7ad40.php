<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
       Public Blog
         <?php $__env->endSlot(); ?>

          <?php $__env->startComponent('dashboard.sidebar'); ?>

        <?php echo $__env->renderComponent(); ?>
        <?php $__env->startComponent('dashboard.navbar'); ?>

        <?php echo $__env->renderComponent(); ?>      
<main class="px-4 py-6 sm:px-6 lg:px-8">
<div class="mb-6">
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="grid  gap-4 mb-4">
        <div class="flex items-center justify-center  rounded-sm bg-gray-50 dark:bg-gray-800">
        <div class="text-2xl text-green-600 dark:text-green-600">
        <h1 class="text-xl font-bold mb-4">Create Category</h1>
        <form method="POST" action="<?php echo e(route('categories.create.post')); ?>">
             <?php echo csrf_field(); ?>
             <input type="text" name="name" value="<?php echo e(old('name')); ?>"
              placeholder="Category name" class="w-full p-2 border rounded mb-4">
             <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
               Create
              </button>
        </form>
         </div>
         </div>

        </div>             
    </div>
</div>
</main>
</div>
</div>
   
  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal845139bba49d1dc226f212a38c4815bd)): ?>
<?php $attributes = $__attributesOriginal845139bba49d1dc226f212a38c4815bd; ?>
<?php unset($__attributesOriginal845139bba49d1dc226f212a38c4815bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal845139bba49d1dc226f212a38c4815bd)): ?>
<?php $component = $__componentOriginal845139bba49d1dc226f212a38c4815bd; ?>
<?php unset($__componentOriginal845139bba49d1dc226f212a38c4815bd); ?>
<?php endif; ?>
        


<?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/categories/create.blade.php ENDPATH**/ ?>