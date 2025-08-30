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
        
        <?php $__env->startComponent('components.avatar'); ?>
        
        <?php echo $__env->renderComponent(); ?>
<main class="px-4 py-6 sm:px-6 lg:px-8">
<div class="mb-6">
 <div class="flex items-center justify-center border-2 border-dashed rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <h3 class="text-2xl  text-gray-400 dark:text-gray-500">
                            Profile
                        </h3>
                    </div>
            
                <div class="grid grid-cols-2 gap-4 mb-4">
                    
                    <div class="flex items-center justify-evenly rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                        <div>
                            <h1 class="text-2xl font-bold mb-2"><?php echo e(auth()->user()->name); ?></h1>
                            <p class="text-gray-600 dark:text-gray-400"><?php echo e(auth()->user()->email); ?></p>
                            <p class="text-gray-600 dark:text-gray-400">Joined on
                                <?php echo e(auth()->user()->created_at->format('d M Y')); ?>

                            </p>
                        </div>
                        <div class="text-2xl text-gray-400 dark:text-gray-500 relative">
                            <img class="h-24  rounded-full z-10"
                                src="<?php echo e(auth()->user()->avatar ? 'avatars/' . auth()->user()->avatar : 'https://ui-avatars.com/api/?name=' . auth()->user()->name . '&background=random'); ?>"
                                alt="user photo">

                            <button onclick="openAvatarModal()" type="button" data-modal-target="popup-modal"
                                data-modal-toggle="popup-modal"
                                class="absolute bottom-0 right-0 bg-gray-200 dark:bg-gray-700 rounded-full p-1 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </button>

                        </div>

                    </div>
                </div>
                <div class=" relative flex items-center justify-left  min-h-48  mt-60 rounded-sm bg-gray-50 dark:bg-gray-800">


                    <p class="text-2xl  text-green-400 dark:text-gray-500" id="bio-text">
                        <?php if(auth()->user()->bio): ?>
                            <?php echo e(auth()->user()->bio); ?>

                        <?php else: ?>
                            <span class="text-gray-500 dark:text-gray-400">No bio available. Click the edit icon to add
                                one.</span>
                        <?php endif; ?>
                    </p>

                    <a href="<?php echo e(route('profile.editBio')); ?>"
                        class="absolute right-4 top-4 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                        </svg>

                    </a>
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
</main>
</div>
</div>
   
  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68f9ae8a329c4b4cf9a58610fa4776b7)): ?>
<?php $attributes = $__attributesOriginal68f9ae8a329c4b4cf9a58610fa4776b7; ?>
<?php unset($__attributesOriginal68f9ae8a329c4b4cf9a58610fa4776b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68f9ae8a329c4b4cf9a58610fa4776b7)): ?>
<?php $component = $__componentOriginal68f9ae8a329c4b4cf9a58610fa4776b7; ?>
<?php unset($__componentOriginal68f9ae8a329c4b4cf9a58610fa4776b7); ?>
<?php endif; ?>
        


<?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/profile/index.blade.php ENDPATH**/ ?>