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
             <p><span class="step">2</span>Verifikasi</p>
         </div>
        </div> 
        <div class="form-outer">
         <form action="#">
            <div class="page">
                <div class="bill">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-center">
                                <img src="img/haicel-black 1.png" alt="">
                            </div>
                            <p class="card-subtitle mb-2 text-body-secondary"><small>16/5/2024,  17.03.11</small></p>
                            <div class="card-pembayaran d-flex justify-content-center">
                                <i class="check" data-feather="check"></i>
                                <h3>Pembayaran berhasil</h3>
                            </div>
                            <div class="detail-pembelian">
                                <div class="pembelian d-flex justify-content-between">
                                    <p>Pemesan</p>
                                    <p>ramma@gmail.com</p>
                                </div>
                                <div class="pembelian d-flex justify-content-between">
                                    <p>Nama Paket</p>
                                    <p>Gold</p>
                                </div>
                                <div class="pembelian d-flex justify-content-between">
                                    <p>Masa Aktif</p>
                                    <p>30 hari</p>
                                </div>
                                <div class="pembelian d-flex justify-content-between">
                                    <p>Metode Pembayaran</p>
                                    <p>BCA</p>
                                </div>
                            </div>
                            <div class="rincian">
                                <h5>Rincian Pembayaran</h5>
                                <div class="harga d-flex justify-content-between">
                                    <p>Harga Paket</p>
                                    <p>Rp50.000</p>
                                </div>
                            </div>
                            <div class="total d-flex justify-content-between">
                                <p>Total</p>
                                <h3>Rp50.000</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-submit">
                    <a href="/type" class="submit">next</a>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\VI\resources\views/transfer.blade.php ENDPATH**/ ?>