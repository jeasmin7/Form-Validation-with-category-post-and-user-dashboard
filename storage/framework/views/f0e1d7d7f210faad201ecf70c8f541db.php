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

            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                
                <div class="flex items-center justify-center  mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class=" w-full p-4 sm:rounded-lg">
                        <?php if($categories->count() > 0): ?>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-50 bg-gray-700 uppercase rounded dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr
                                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <?php echo e($category->name); ?>

                                            </th>
                                            
                                            <td class="px-6 py-4 flex gap-2">
                                                <form action="<?php echo e(route('categories.delete', $category->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit"
                                                        class="text-white font-medium bg-red-500 px-4 py-2 rounded">Delete</button>
                                                </form>
                                                <a href="<?php echo e(route('categories.edit.get', $category->id)); ?>"
                                                    class="font-medium text-white bg-green-500 px-4 py-2 rounded">Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        <?php else: ?>
                            <div class="text-center text-gray-500 dark:text-gray-400">
                                No category available.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
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
        



<?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/categories/index.blade.php ENDPATH**/ ?>