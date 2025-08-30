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
                <h1 class="text-xl font-bold mb-4"><?php echo e(isset($post) ? 'Edit' : 'Create'); ?> Post</h1>

                <form method="POST"
                    action="<?php echo e(isset($post) ? route('posts.edit.post', $post->id) : route('posts.create.post')); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php if(isset($post)): ?>
                        <?php echo method_field('PATCH'); ?>
                    <?php endif; ?>

                    <input type="text" name="title" value="<?php echo e(old('title', $post->title ?? '')); ?>"
                        class="w-full p-2 border rounded mb-4" placeholder="Title">

                    <textarea name="content" rows="5" class="w-full p-2 border rounded mb-4 "
                        placeholder="Content"><?php echo e(old('content', $post->content ?? '')); ?></textarea>


                <div class="w-full  bg-white  overflow-hidden items-center">

                        <input id="upload" type="file" name="image" class="invisible" />
                        <div id="image-preview"
                        class=" p-6 mb-4 -mt-6 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
                            <label for="upload" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
                                <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than
                                    <b class="text-gray-600">2mb</b>
                                </p>
                                <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG,
                                        PNG, or GIF</b> format.</p>
                                <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                            </label>
                        </div>
                    </div>

                    <select name="category_id" class="w-full p-2 border rounded mb-4">
                    <option value="">Select Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php if(old('category_id', $post->category_id ?? '') == $category->id): ?>
                            selected <?php endif; ?>><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </select>

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                        <?php echo e(isset($post) ? 'Edit' : 'Create'); ?> Post
                    </button>
                </form>
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
<?php endif; ?><?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/posts/create.blade.php ENDPATH**/ ?>