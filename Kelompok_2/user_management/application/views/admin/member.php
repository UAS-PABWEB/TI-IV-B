<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Member since</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th>Member since</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Pictures</th>
                            <th>Add Comment</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                        <?php foreach ($users as $u) : ?>
                            <tr>
                                <td><?= date('d F Y', $u['date_created']); ?></td>
                                <td><?= $u['email']; ?></td>
                                <td><?= $u['name']; ?></td>
                                <td><?= $u['role_id']; ?></td>
                                <!-- <td>
                                    <a href="" class="badge badge-primary">Add</a>
                                    <a href="" class="badge badge-success">Edit</a>
                                    <a href="" class="badge badge-danger">delete</a>
                                </td> -->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->