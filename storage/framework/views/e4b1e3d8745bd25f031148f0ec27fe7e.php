<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <link rel="stylesheet" href="css/seting.css">
    
    <!-- head -->
    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Setting <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>

    <!-- Invite Active -->
    <section id="set-profile">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <a href="/set" class="card-title">Edit profile</a>
                        <a href="/prefence" class="card-title">Preferences</a>
                        <a href="/security" class="card-title-active">Security</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h4>Two-factor Authentication</h4>
                            <?php if (isset($component)) { $__componentOriginal1fd6ff9b5da3afaf7da51a8a10514b1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1fd6ff9b5da3afaf7da51a8a10514b1c = $attributes; } ?>
<?php $component = App\View\Components\Prefence::resolve(['ids' => ['check1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('prefence'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Prefence::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Enable or disable two factor authentication <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1fd6ff9b5da3afaf7da51a8a10514b1c)): ?>
<?php $attributes = $__attributesOriginal1fd6ff9b5da3afaf7da51a8a10514b1c; ?>
<?php unset($__attributesOriginal1fd6ff9b5da3afaf7da51a8a10514b1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1fd6ff9b5da3afaf7da51a8a10514b1c)): ?>
<?php $component = $__componentOriginal1fd6ff9b5da3afaf7da51a8a10514b1c; ?>
<?php unset($__componentOriginal1fd6ff9b5da3afaf7da51a8a10514b1c); ?>
<?php endif; ?>
                            <form>
                                <div class="form-title">
                                    <h4>Change Password</h4>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary my-5">Save</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\VI\resources\views/Set-security.blade.php ENDPATH**/ ?>