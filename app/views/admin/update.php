<?php require_once("header.php"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>update</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">update</h3>
                        </div>
                        <div class="card-body">
                            <form action="/adminpost/updateData" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">title</label>
                                        <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="<?= $data['id']; ?> ">
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?= $data['title']; ?> ">
                                    </div>
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">artical</label>
                                        <textarea name="artical"><?= $data['artical']; ?></textarea>
                                    </div>
                                    <img src="/front/img/<?= $data['img']; ?>" width="100px" height="100px">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="img" value="<?=$data['img']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" value="update" name="update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once("header.php"); ?>