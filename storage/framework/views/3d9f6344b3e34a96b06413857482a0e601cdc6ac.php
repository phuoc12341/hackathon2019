<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title d-inline">List Product</h4>
                            
                            <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success btn-fill pull-right">Create Category</a>
                            
                            <p class="card-category">Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $listCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->id); ?></td>
                                        <td><?php echo e($category->title); ?></td>
                                        <td><?php echo e($category->des); ?></td>
                                        <td><img src="<?php echo e($category->img); ?>" height="50" width="50"></td>
                                        <td>
                                        <a class="btn btn-warning" href="<?php echo e(route('categories.edit', ['category' => $category->id])); ?>"><i class="fas fa-pen-square"></i></a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger deleteButton"  data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PHUC\Desktop\lienquan\resources\views/admin/category/index.blade.php ENDPATH**/ ?>