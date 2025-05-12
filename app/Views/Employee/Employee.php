<?= $this->extend('layout/frontend') ?>

<?= $this->section('page-content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="cardheader">
                    <h4>
                        Employees detail
                        <a href="<?= base_url('employeeadd') ?>" class="btn btn-primary btn-sm float-end">Add Employee</a>
                    </h4>
                </div>
                <div class="cardbody">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    First Name
                                </th>
                                <th>Last Name</th>
                                <th>Contact number</th>
                                <th>Email</th>
                                <th>Designation</th>
                                <th>Joining Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($employee as $row) : ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['first_name'] ?></td>
                                    <td><?= $row['last_name'] ?></td>
                                    <td><?= $row['cno'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['designation'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td>
                                        <a href="<?= base_url('Employee/edit/'.$row['id'])?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url('Employee/delete/'.$row['id'])?>" class="btn btn-success btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>