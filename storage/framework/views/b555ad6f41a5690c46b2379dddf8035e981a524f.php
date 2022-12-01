
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BAZA ENGINEER ONLINE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('branch.create')); ?>"> Create New Branch</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
           
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($branch->name); ?></td>
            <td><?php echo e($branch->detail); ?></td>
            <td>
                <form action="<?php echo e(route('branch.destroy',$branch->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('branch.show',$branch->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('branch.edit',$branch->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $branch->links(); ?>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('branch.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ntagwabira\Desktop\baza\resources\views/branch/index.blade.php ENDPATH**/ ?>