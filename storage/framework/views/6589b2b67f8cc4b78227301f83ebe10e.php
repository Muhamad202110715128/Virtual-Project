<?php if (isset($component)) { $__componentOriginalf0361e0f784f1c47d65dc35a3b4c459c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf0361e0f784f1c47d65dc35a3b4c459c = $attributes; } ?>
<?php $component = App\View\Components\Register::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('register'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Register::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="col-lg-4 side-image bg-primary">
        <?php if (isset($component)) { $__componentOriginal618d885400054997ff66cba6e7eda029 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618d885400054997ff66cba6e7eda029 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.LR','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('LR'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> Pembayaran <?php $__env->endSlot(); ?>
             <?php $__env->slot('paragraph', null, []); ?> "Untuk menyelesaikan transaksi, silakan pilih metode pembayaran yang Anda inginkan. Transaksi Anda akan diproses dengan aman." <?php $__env->endSlot(); ?>
             <?php $__env->slot('additionalText', null, []); ?>  <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618d885400054997ff66cba6e7eda029)): ?>
<?php $attributes = $__attributesOriginal618d885400054997ff66cba6e7eda029; ?>
<?php unset($__attributesOriginal618d885400054997ff66cba6e7eda029); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618d885400054997ff66cba6e7eda029)): ?>
<?php $component = $__componentOriginal618d885400054997ff66cba6e7eda029; ?>
<?php unset($__componentOriginal618d885400054997ff66cba6e7eda029); ?>
<?php endif; ?>
        <img class="cover" src="img/fill out (3).png" alt="">
        <?php if (isset($component)) { $__componentOriginal33d6a0c21dfb8d1ca2f579dbc4f6fc5c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33d6a0c21dfb8d1ca2f579dbc4f6fc5c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.rectangle','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('rectangle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33d6a0c21dfb8d1ca2f579dbc4f6fc5c)): ?>
<?php $attributes = $__attributesOriginal33d6a0c21dfb8d1ca2f579dbc4f6fc5c; ?>
<?php unset($__attributesOriginal33d6a0c21dfb8d1ca2f579dbc4f6fc5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33d6a0c21dfb8d1ca2f579dbc4f6fc5c)): ?>
<?php $component = $__componentOriginal33d6a0c21dfb8d1ca2f579dbc4f6fc5c; ?>
<?php unset($__componentOriginal33d6a0c21dfb8d1ca2f579dbc4f6fc5c); ?>
<?php endif; ?>
    </div>
    <div class="col-lg-8 right px-3">
    <div class="input-box w-100">
        <div class="steper">
         <div class="progress_header">
             <p class="completed"><span class="step"><i data-feather="check"></i></span>Daftar</p>
             <p class="completed"><span class="step">2</span>Verifikasi</p>
         </div>
        </div> 
        <div class="form-outer">
         <form action="#">
            <div class="page">
                <header class="page-title">Daftar</header>
                <p>Silahkan daftar terlebih dahulu untuk melanjutkan  ke step berikutnya</p>
                <div class="tranfer d-flex justify-content-center">
                    <div class="tranfer-title d-flex justify-content-center border-bottom">
                        <h4 class="mx-3">Tranfer</h4><span></span>
                        <i class="fa-solid fa-building-columns mt-2"></i>
                    </div>
                </div>
                <div class="metode">
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/bni.png" alt="">
                                <h4>BNI</h4>
                            </div>
                                <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/bri.png" alt="">
                                <h4>BRI</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/bca.png" alt="">
                                <h4>BCA</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/mandiri.png" alt="">
                                <h4>Mandiri</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                </div>
                <div class="tranfer d-flex justify-content-center">
                    <div class="tranfer-title border-bottom">
                    <h4>Lainnya</h4><span></span>
                    </div>
                </div>
                <div class="metode">
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/" alt="">
                                <h4>Dana</h4>
                            </div>
                                <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/" alt="">
                                <h4>Shoope</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pay d-flex justify-content-between">
                            <div class="bank d-flex">
                                <img src="img/" alt="">
                                <h4>Alphamart</h4>
                            </div>
                            <input type="checkbox" id="check">
                        </div>
                    </div>
                    
                </div>
                <div class="invite-bottuns d-flex justify-content-center mt-5">
                    <a type="button" class="create btn btn-primary" href="/mbanking">Selanjutnya</a>
                </div>
            </div>
         </form>
        </div> 
     </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf0361e0f784f1c47d65dc35a3b4c459c)): ?>
<?php $attributes = $__attributesOriginalf0361e0f784f1c47d65dc35a3b4c459c; ?>
<?php unset($__attributesOriginalf0361e0f784f1c47d65dc35a3b4c459c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0361e0f784f1c47d65dc35a3b4c459c)): ?>
<?php $component = $__componentOriginalf0361e0f784f1c47d65dc35a3b4c459c; ?>
<?php unset($__componentOriginalf0361e0f784f1c47d65dc35a3b4c459c); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\VI\resources\views/Payment.blade.php ENDPATH**/ ?>