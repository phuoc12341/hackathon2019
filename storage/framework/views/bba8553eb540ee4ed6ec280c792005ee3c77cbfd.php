<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Category</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="<?php echo e(route('categories.update', ['category' => $category->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <input name="id" type="hidden" value="<?php echo e($category->id); ?>">
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control" value="<?php echo e($category->title); ?>" placeholder="Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                                <div class="form-group">
                                                <label for="des">Description</label>
                                                <input type="text" name="des" id="des" class="form-control" value="<?php echo e($category->des); ?>" placeholder="Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                                <div class="form-group">
                                                <label for="img">Image</label>
                                                <input type="text" name="img" id="img" class="form-control" value="<?php echo e($category->img); ?>" placeholder="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PHUC\Desktop\lienquan\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>