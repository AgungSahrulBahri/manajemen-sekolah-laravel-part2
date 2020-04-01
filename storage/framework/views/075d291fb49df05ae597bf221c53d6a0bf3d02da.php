<?php $__env->startSection('content'); ?>
    

<div class="row">

    <div class="col-12">
                <?php if(session('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                        </div>
                    <?php endif; ?>
     
    </div>
    
    <div class="col-12">
        
        <div class="card">
            
            <div class="card-body">
                <h4 class="card-title">Data Guru</h4>
                <button type="button" class="btn btn-primary float-right tambahModal" data-toggle="modal" data-target="#tambahModal">Tambah</button>
                
            </div>

            <div class="table-responsive">
                <table class="table color-table warning-table">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Kode Guru</th>

                            <th>Nama</th>

                            <th>No. Induk Guru</th>

                            

                            <th>Phone</th>

                            <th>Alamat</th>

                            <th>Tanggal Lahir</th>

                            <th>JK</th>

                            <th>Status</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>
                            <?php $i = 1 ?> 
                            <?php $__empty_1 = true; $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($teacher->kodeguru); ?></td>
                            <td><?php echo e($teacher->nama); ?></td>
                            <td><?php echo e($teacher->nig); ?></td>
                            
                            <td><?php echo e($teacher->phone); ?></td>
                            <td><?php echo e($teacher->alamat); ?></td>
                            <td><?php echo e($teacher->ttl); ?></td>
                            <td><?php echo e($teacher->jk); ?></td>
                            <td><?php echo e($teacher->status); ?></td>


                            <td class="text-nowrap">
                                <button type="button" class="btn ml-1 mr-1 btn-danger hapusModal" data-id="<?php echo e($teacher['id']); ?>">Hapus</button>
                               <button type="button" class="btn ml-1 mr-1 btn-warning editModal" data-id="<?php echo e($teacher['id']); ?>">Edit</button>
                                <button type="button" class="btn ml-1 mr-1 btn-info text-white" onclick="location.href ='<?php echo e(url('guru/'.$teacher['id'])); ?>'">Detail</button>
                                 
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td colspan="6">Tidak ada data</td>
                        <?php endif; ?>
                    </tbody>

                </table>

            </div>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>
  <?php echo $__env->make('teacher.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user1/Dokumen/project-laravel/LaravelPert5/resources/views/teacher/index.blade.php ENDPATH**/ ?>