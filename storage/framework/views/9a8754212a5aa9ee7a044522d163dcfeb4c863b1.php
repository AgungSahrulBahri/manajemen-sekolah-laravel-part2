<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-4">
            <div class="card">

                <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card-body">

                    <center class="m-t-30"> <img src="<?php echo e(asset('images/users/5.jpg')); ?>" class="img-circle" width="150">

                        <h4 class="card-title m-t-10"><?php echo e($t['nama']); ?></h4>

                        <h6 class="card-subtitle"><?php echo e($t['jk']); ?></h6>

                        <h6 class="card-subtitle"><?php echo e($t['nis']); ?></h6>

                        <h6 class="card-subtitle"><?php echo e($t['kelas']); ?> <?php echo e($t['jurusan']); ?></h6>

                    </center>

                </div>

                <div>

                    <hr> </div>

                <div class="card-body"> 
                     <small class="text-muted">Tanggal Lahir </small>

                    <h6><?php echo e($t['ttl']); ?></h6> 

                    <small class="text-muted">Phone </small>

                    <h6><?php echo e($t['phone']); ?></h6> 
                    
                    <small class="text-muted">Address</small>

                    <h6><?php echo e($t['alamat']); ?></h6>

                    <div class="map-box">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                    </div> <small class="text-muted p-t-30 db">Social Profile</small>

                    <br>

                    <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>

                    <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>

                    <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>

                    <button type="button" class="btn ml-1 mr-1 btn-info text-white align-left" onclick="location.href ='javascript:history.go(-1)'">Back</button>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                          <h3 colspan="3">Tidak dapat menampilkan detail data</h3>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-8">
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            
            <div class="card">
                <div class="card-body">
                <h5>Mata pelajaran <br><?php echo e($t['nama']); ?></h5>
                    <div class="table-responsive">
                        <table class="table color-table warning-table">
                         <thead>

                        <tr>

                            <th>#</th>

                            <th>Kode Mapel</th>

                            <th>Nama Mapel</th>
                        </tr>

                        </thead>
                         <?php
                        $i=1
                        ?>
                        <?php $__currentLoopData = $t->mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <tbody>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                            <td><?php echo e($m->kode); ?></td>
                            <td><?php echo e($m->nama); ?></td>
                            </tr>
                           
                        </tbody>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user1/Dokumen/project-laravel/LaravelPert5/resources/views/student/siswa-detail.blade.php ENDPATH**/ ?>