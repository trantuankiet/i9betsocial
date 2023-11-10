<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.create-video'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('build/libs/dropzone/dropzone.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Ecommerce <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Create video <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div> 
<?php endif; ?>

<form method="POST" action="<?php echo e(route('add-video')); ?>" id="createvideo-form" autocomplete="off" class="needs-validation" novalidate>
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Video Title</label>
                            <input type="text" class="form-control" id="video-title-input" name="title" placeholder="Enter video title" required>
                            <div class="invalid-feedback">Please Enter a video title.</div>
                        </div>
                        <div class="mb-3">
                            <label>Video Link</label>
                            <input type="text" class="form-control" id="video-link-input" name="link" placeholder="Enter video link" required>
                            <div class="invalid-feedback">Please Enter a video link.</div>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="video-popular-input">Popular</label>
                            <input class="form-check-input" type="checkbox" id="video-popular-input" name="popular" value="1">
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</form>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')); ?>"></script>

<script src="<?php echo e(URL::asset('build/libs/dropzone/dropzone-min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/ecommerce-video-create.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\i9betsocial\resources\views/apps-ecommerce-add-video.blade.php ENDPATH**/ ?>