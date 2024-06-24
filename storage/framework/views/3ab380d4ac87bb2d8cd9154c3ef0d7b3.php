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
    <div class="col-md-12 right px-3">
    <div class="input-box w-100">
        <div class="title d-flex justify-content-center my-5">
          <div class="content-title d-flex justify-content-center text-center">
            <p>Pilih kategori undangan</p>
          </div>
        </div> 
        <div class="form-outer">
         <form action="#">
             <div class="page ">
                  <div class="page-title d-flex justify-content-center text-center ">
                    <p>Ada banyak pilihan Preset sesuai kategori kebutuhanmu yang Bisa Kamu Pilih Sesuai Dengan Seleramu
                      <br class=""><span class="blue-text text-primary">Dan bisa Langsung Pakai !</span></p>
                  </div>
                  <div class="undangan-type d-flex justify-content-center mt-5 mb-4">
                      <div class="col-lg-6 type mb-3 me-3 " >
                        <a href="/invite-form">
                          <div class="card-undangan d-flex bg-primary">
                            <div class="col-md-8 ">
                              <div class="card-body">
                                <h5 class="card-title">Undangan Pernikahan</h5>
                                <p class="card-text">Buat moment di hari pernikahanmu dengan template yang elegan, exclusif, dan luxury dari HICHEL</p>
                              </div>
                            </div>
                            <div class="col-md-4 p-3">
                              <img src="img/image 1.png" class="img-fluid rounded-start" alt="...">
                            </div>
                          </div>
                        </a>
                      </div>
                    
                      <div class="col-lg-6 type mb-3 ms-2" >
                        <a href="/invite-form">
                          <div class="card-undangan d-flex" >
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Undangan Ulang Tahun</h5>
                                <p class="card-text">Rayakan ulang tahun dengan meriah dan ajak temanmu datang, dengan undanagn online dari HICHEL</p>
                              </div>
                            </div>
                            <div class="col-md-4  p-3">
                              <img src="img/image 1-1.png" class="img-fluid rounded-start" alt="...">
                            </div>
                          </div>
                        </a>
                      </div>
                  </div>
                  
                  <div class="undangan-type d-flex justify-content-center">
                    <div class="col-md-6 type mb-3" >
                      <a href="/invite-form">
                        <div class="card-undangan d-flex">
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Undangan Acara Keluarga</h5>
                              <p class="card-text">Acara keluarga lebih kompak dengan menyebar undangan yang dibuat dari HICHEL</p>
                            </div>
                          </div>
                          <div class="col-md-4 p-3">
                            <img src="img/image 1-2.png" class="img-fluid rounded-start" alt="...">
                          </div>
                        </div>
                      </a>
                    </div>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\VI\resources\views/Invite-type.blade.php ENDPATH**/ ?>