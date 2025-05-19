
<?php $__env->startSection('content'); ?>
<div class="main-panel" style="background-color: #f9fdf9;">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="background-color: #e6f7e6; border: 1px solid #c8e6c9;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #2e7d32;">Update Category</h4>
                        <form action="<?php echo e(route('updatecategory', $category->categoryid)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="exampleInputcategoryname" style="color: #1b5e20;">Category Name</label>
                                <input type="text" name="category" class="form-control" id="exampleInputcategoryname" value="<?php echo e($category->categoryname); ?>" placeholder="Category Name" style="background-color: #ffffff; border: 1px solid #aed581;">

                                <label for="exampleInputimage" style="color: #1b5e20; margin-top: 10px;">Image</label>
                                <input type="hidden" value="<?php echo e($category->categoryimage); ?>" name="oldimage">
                                <input type="file" name="categoryimage" class="form-control" id="exampleInputimage" style="background-color: #ffffff; border: 1px solid #aed581;" placeholder="Image">
                            </div>

                          <center>  <button type="submit" class="btn btn-success" style="background-color: #4caf50; border-color: #4caf50; color: #ffffff; margin-top: 10px;">Submit</button>
                            <input type="reset" class="btn btn-danger" style="background-color: #e57373; border-color: #e57373; color: #ffffff; margin-top: 10px;" value="Cancel"></center>
                        </form>

                        <?php if(session('success')): ?>
                            <script>
                                alert('<?php echo e(session('success')); ?>');
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<style>
/* General Background */
.light-green-bg {
    background-color: #f9fdf9;
}

/* Card Styling */
.light-green-card {
    background-color: #e6f7e6;
    border: 1px solid #c8e6c9;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Labels and Titles */
.text-dark-green {
    color: #2e7d32;
    font-weight: bold;
}
.form-label {
    color: #1b5e20;
    font-weight: bold;
    margin-top: 10px;
}

/* Form Controls */
.form-control {
    background-color: #ffffff;
    border: 1px solid #aed581;
    border-radius: 4px;
    padding: 10px;
}

/* Buttons */
.green-btn {
    background-color: #4caf50;
    border-color: #4caf50;
    color: #ffffff;
    margin-top: 10px;
}

.red-btn {
    background-color: #e57373;
    border-color: #e57373;
    color: #ffffff;
    margin-top: 10px;
}

/* Hover Effects */
.green-btn:hover {
    background-color: #388e3c;
    border-color: #388e3c;
}

.red-btn:hover {
    background-color: #d32f2f;
    border-color: #d32f2f;
}
</style>

<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/Editcategory.blade.php ENDPATH**/ ?>