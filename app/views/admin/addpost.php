<?php require_once("header.php"); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>add post</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- error -->
            <?php if (!empty($errors)) :  ?>
                <div style="background-color: rgba(255,0,0, .1); ">
                    <h5>Alert!</h5>
                    <?php foreach ($errors as $e) {
                        echo "<p> - $e </p>";
                    } ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">add</h3>
                        </div>
                        <div class="card-body">
                            <form action="postAdd" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">title</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">artical</label>
                                        <textarea name="artical"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose img</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <input type="submit" value="save" name="save" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once("footer.php"); ?>