<?php $this->extend('layout/frontend'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 p-4">
            <?php
            if(session()->getFlashdata('status'))
            {
                echo"<h4>".session()->getFlashdata('status')."</h4>";
            }
            ?>

            <div class="card ">
                <div class="cardheader p-2">
                    <h4>
                        Edit Employees detail
                        <a href="<?= base_url('employee') ?>" class="btn btn-danger btn-sm float-end">Back</a>
                    </h4>
                </div>
               
                <div class=" cardbody p-2">
                     <form action="<?= base_url('employee/update/'.$employee['id']) ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" name="first_name" value="<?= $employee['first_name']?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" name="last_name" value="<?= $employee['last_name']?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>phone number</label>
                                <input type="text" name="cno" value="<?= $employee['cno']?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?= $employee['email']?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="designation" value="<?= $employee['designation']?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-4"> Update Changes</button>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
            
        </div>
    </div>
</div>

</div>
</div>
<?= $this->endSection() ?>