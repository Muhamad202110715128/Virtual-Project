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
                 <header class="page-title">Daftar</header>
                 <p>Silahkan daftar terlebih dahulu untuk melanjutkan  ke step berikutnya</p>
                 <div class="card">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title border-bottom">MBANKING</h5>
                          <p class="card-text">Cara bayar Virtual Account BCA lewat BCA Mobile </p>
                          <ul>
                            <li>Buka aplikasi BCA mobile</li>
                            <li>Pilih menu "m-Transfer"</li>
                            <li>Pilih menu "BCA Virtual Account"</li>
                            <li>Masukkan nomor BCA Virtual Account</li>
                            <li>Klik "Send"</li>
                            <li>Cek nominal yang muncul</li>
                            <li>Masukkan PIN m-BCA</li>
                            <li>Notifikasi transaksi berhasil akan muncul</li>
                          </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title border-bottom">ATM</h5>
                            <p class="card-text">Cara bayar Virtual Account BCA di ATM </p>
                            <ul>
                              <li>Masukkan Kartu ATM</li>
                              <li>Masukkan PIN ATM </li>
                              <li>Pilih menu “Penarikan Tunai/Transaksi Lainnya”</li>
                              <li>Pilih menu “Transaksi Lainnya”</li>
                              <li>Pilih menu “Transfer”</li>
                              <li>Pilih menu “Ke Rek BCA Virtual Account” </li>
                              <li>Masukkan nomor BCA Virtual Account dan klik “Benar”</li>
                              <li>Cek detail transaksi dan pilih “Ya”</li>
                              <li>Transaksi selesai</li>
                            </ul>
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex justify-content-center">
                              <img src="img/bca.png" alt="">
                          </div>
                          <p class="card-subtitle mb-2 text-body-secondary"><small>Virtual Account Number</small></p>
                          <div class="card-pembayaran d-flex justify-content-between">
                              <h5>13425265762426266</h5>
                              <button class="salin" onclick="showAlert()"><i data-feather="copy"></i></button>
                          </div>
                          <div class="detail-pembelian">
                              <div class="pembelian">
                                  <p>Nama Virtual Account</p>
                                  <h5>Haicel</h5>
                              </div>
                              <div class="pembelian">
                                  <p>Nominal yang akan dibayarkan</p>
                                  <h5>IDR 50.000</h5>
                              </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
                  
                <div class="invite-bottuns d-flex justify-content-center mt-5">
                    <a type="button" class="create btn btn-primary" href="/struck">Selanjutnya</a>
                </div>
             </div>
         </form>
        </div> 
     </div>
    </div>
    <script>
      function showAlert() {
          alert("Code Telah Di Salin");
      }
  </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf0361e0f784f1c47d65dc35a3b4c459c)): ?>
<?php $attributes = $__attributesOriginalf0361e0f784f1c47d65dc35a3b4c459c; ?>
<?php unset($__attributesOriginalf0361e0f784f1c47d65dc35a3b4c459c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0361e0f784f1c47d65dc35a3b4c459c)): ?>
<?php $component = $__componentOriginalf0361e0f784f1c47d65dc35a3b4c459c; ?>
<?php unset($__componentOriginalf0361e0f784f1c47d65dc35a3b4c459c); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\VI\resources\views/Mbanking.blade.php ENDPATH**/ ?>