<?php $__env->startSection('content'); ?>

<div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Masukan Data Mapel</h4>

                                <form>
                                    <?php echo csrf_field(); ?>
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault01">Kode Mapel </label>

                                          <input type="text" class="form-control" id="validationDefault01" name="kode" placeholder="Example B21" value="<?php echo e($mapel->kode); ?>" required="">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Nama Mapel</label>

                                        <input type="text" class="form-control" id="validationDefault02" placeholder="Bahasa Indonesia  " value="<?php echo e($mapel->nama); ?>" required="" name="nama">

                                        </div>
                                             <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Guru Pengampu</label>
                                             <input type="text" class="form-control" id="validationDefault02" placeholder=""   value="<?php echo e($mapel->teacher_id); ?>" required="" name="teacher_id">
                                          <small style="color:red; ">Masukan nomer urut guru</small>
                                        </div>
                                    </div>
                                    
                                    
                                    <a href="<?php echo e(route('mapel.index')); ?>" class="btn btn-info">Back</a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user1/Dokumen/project-laravel/LaravelPert5/resources/views/mapel/show.blade.php ENDPATH**/ ?>