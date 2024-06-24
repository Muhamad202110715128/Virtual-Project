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
             <?php $__env->slot('title', null, []); ?> Hi Welcome Back <?php $__env->endSlot(); ?>
             <?php $__env->slot('paragraph', null, []); ?> Untuk tetap terhubung dengan kami, <?php $__env->endSlot(); ?>
             <?php $__env->slot('additionalText', null, []); ?>  silakan login dengan informasi pribadi Anda <?php $__env->endSlot(); ?>
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
        <img class="cover" src="img/fill-out-pana-1.png" alt="">
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
             <p class="completed"><span class="step">1</span>Daftar</p>
             <p><span class="step">2</span>Verifikasi</p>
         </div>
        </div> 
        <div class="form-outer">
         <form action="#">
             <div class="page">
                 <header class="page-title">Daftar</header>
                 <p>Silahkan daftar terlebih dahulu untuk melanjutkan  ke step berikutnya</p>
                 <div class="input-field">
                     <label for="nama">Nama</label>
                     <input type="text" class="input" id="nama" placeholder="Masukan Nama" required="" autocomplete="off"> 
                 </div> 
                 <div class="input-field">
                     <label for="whatsap">Nomor Whatsap</label>
                     <input type="number" class="input" id="whatsap" placeholder="Masukan Nomor Whatsap" required="">
                 </div>
                 <div class="input-submit">
                     <a href="/verifikasi" class="submit">next</a>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\VI\resources\views/Register.blade.php ENDPATH**/ ?>