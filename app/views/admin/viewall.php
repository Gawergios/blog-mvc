<?php require_once("header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>view all</h1>
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
                            <h3 class="card-title"><a class="btn btn-danger" href="<?= PATH; ?>adminpost/add"> add</a></h3>

                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>title</th>
                                            <th>artical</th>
                                            <th>created_at</th>
                                            <th>img</th>
                                            <th>user_id</th>
                                            <th>update</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($d as $data) : ?>
                                            <tr>
                                                <td><?= $data['id'];; ?></td>
                                                <td><?= $data['title']; ?></td>
                                                <td><?= $data['artical']; ?></td>
                                                <td><?= $data['created_at']; ?></td>
                                                <td><img width="50px" height="50px" src="<?= PATH; ?>front/img/<?= $data['img']; ?>"></td>
                                                <td><?= $data['user_id']; ?></td>
                                                <td><a class="btn btn-warning" href="update/<?= $data['id']; ?>"> update</a></td>
                                                <td><a class="btn btn-danger" href="delete/<?= $data['id']; ?>"> delete</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>title</th>
                                            <th>artical(s)</th>
                                            <th>created_at</th>
                                            <th>img</th>
                                            <th>user_id</th>
                                            <th>update</th>
                                            <th>delete</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
<?php require_once("footer.php"); ?>