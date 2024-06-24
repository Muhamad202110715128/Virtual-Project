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
    <link rel="stylesheet" href="css/foto.css">
    <div class="container-fluid">
        <div class="row d-flex">
            
            <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Undangan <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
            <div class="col-12">
                <div class="invite-message">
                    <div class="invite-title border-bottom text-start mb-5">
                      <h4>Undangan Aktif</h4>
                    </div>
                    <div class="invite-content text-center">
                        <div class="card d-flex justify-content-center text-center mb-5">
                            <div class="card-body">
                                <img src="img/OBJECTS.png" alt="">
                                <div class="d-flex justify-content-center">
                                    <a href="index.html" class="btn btn-primary mt-5 mb-3">Simpan dan lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-post d-flex justify-content-center">
                        <div class="post d-flex border-bottom">
                            <div class="post-edit d-flex">
                                <img src="img/Frame 1000003056.png" alt="">
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#"><i data-feather="trash-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="img-post d-flex justify-content-center">
                        <div class="post d-flex border-bottom">
                            <div class="post-edit d-flex">
                                <img src="img/Frame 1000003056-1.png" alt="">
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#"><i data-feather="trash-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="img-post d-flex justify-content-center">
                        <div class="post d-flex border-bottom">
                            <div class="post-edit d-flex">
                                <img src="img/Frame 1000003056-2.png" alt="">
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#"><i data-feather="trash-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <a href="/proses" class="btn btn-primary my-5">Simpan dan lanjut</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\VI\resources\views/Upload-Foto.blade.php ENDPATH**/ ?>