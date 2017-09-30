
<div class="container-fluid">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-block text-center">
                            <h2>Edit Profile Picture</h2>
                            <hr>
                                <a data-toggle="modal" href="#intern-picture-modal"><img height="200" id="prof_pic"></a>
                                <hr>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block text-center">
                            <h2>REMAINING HOURS</h2>
                            <hr>
                                
                            <h1 id="remaining"></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-block text-center">
                                <h2>Edit Information</h2>
                                <hr>
                                <form id="intern-info-form" method="post">
                                  <input type="hidden" name="id" value="<?= $this->uri->segment(3) ?>">
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <!-- <input type="text" name="fname" value="<?= $this->user->info('firstname') ?>" class="form-control"> -->
                                    <input type="text" name="fname" id="firstname" class="form-control">
                                    <div class="text-danger" id="fname_err"></div>
                                  </div>
                                  <div class="form-group">
                                    <label>Last Name</label>
                                    <!-- <input type="text" name="lname" value="<?= $this->user->info('lastname') ?>" class="form-control"> -->
                                    <input type="text" name="lname" id="lastname" class="form-control">
                                    <div class="text-danger" id="lname_err"></div>
                                  </div>
                                  <div class="form-group">
                                    <label>Email</label>
                                    <!-- <input type="text" name="email" value="<?= $this->user->info('email') ?>" class="form-control"> -->
                                    <input type="text" name="email" id="email" class="form-control">
                                    <div class="text-danger" id="email_err"></div>
                                  </div>
                                  <div class="form-group">
                                  <hr>
                                    <button type="Submit" class="btn btn-info"><i class="fa fa-save m-r-10"></i>Submit</button>
                                  </div>
                                </form>

                            </div>
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-block text-center">
                              <div id="success-message"></div>
                                <h2>Other Information</h2>
                                <hr>
                                <form id="intern-other-info-form" method="post">
                                  <div class="form-group">
                                    <input type="hidden" id="id" name="id" value="<?= $this->uri->segment(3) ?>">
                                    <label>School</label>
                                    <input type="text" name="school" id="school" class="form-control">
                                    <div class="text-danger" id="school_err"></div>
                                  </div>
                                  <div class="form-group">
                                    <label>Number of Hours</label>
                                    <input type="text" name="no_of_hrs" id="no-of-hrs" class="form-control">
                                    <div class="text-danger" id="no_of_hrs_err"></div>
                                  </div>
                                  <div class="form-group">
                                    <label>Course</label>
                                    <input type="text" name="course" id="course" class="form-control">
                                    <div class="text-danger" id="course_err"></div>
                                  </div>
                                  <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="text" name="bday" id="bday" class="form-control">
                                    <div class="text-danger" id="bday_err"></div>
                                  </div>
                                  <div class="form-group">
                                    <label>Year (School Year)</label>
                                    <input type="text" name="year" id="year" class="form-control">
                                    <div class="text-danger" id="year_err"></div>
                                  </div>
                                  <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="text" name="start_date" id="start-date" class="form-control">
                                    <div class="text-danger" id="start_date_err"></div>
                                  </div>
                                  <div class="form-group">
                                  <hr>
                                    <button type="Submit" class="btn btn-info"><i class="fa fa-save m-r-10"></i>Submit</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>

    </div>
</div>
<?php $this->load->view('users/partials/intern_picture') ?>