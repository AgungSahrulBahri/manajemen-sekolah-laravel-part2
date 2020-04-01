<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Guru</h4>
                
            <a href="<?php echo e(route('mapel.create')); ?>" class="btn btn-primary float-right">Tambah Data</a>
                
            </div>

            <div class="table-responsive">
                <table class="table color-table warning-table">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Kode Mapel</th>

                            <th>Nama Mapel</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>
                    <?php
                        $i=1
                    ?>
                        <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                        <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($m->kode); ?></td>
                        <td><?php echo e($m->nama); ?></td>
                            <td class="text-nowrap">
                            <form action="<?php echo e(route('mapel.destroy', $m->id)); ?>" method="post">
                                <a href="<?php echo e(route('mapel.edit', $m->id)); ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <?php echo csrf_field(); ?>
                                
                                
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" value="<?php echo e($m->id); ?>" name="name">
                                <input class="btn btn-xs btn-info" type="submit" value="Hapus" onclick="return confirm('Are you sure?')">
                                
                            <a href="<?php echo e(route('mapel.show', $m->id)); ?>" data-toggle="tooltip" data-original-title="Detail"> <i class="fa fa-drivers-license"></i> </a>
                            
                            </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user1/Dokumen/project-laravel/LaravelPert5/resources/views/mapel/index.blade.php ENDPATH**/ ?>