<?php include 'header.php'; ?>
<script src="../Resorce/droupdown.js"></script>
<div class="container  overflow-auto mt-5">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar text-center">
                                    <?php
                                    if (isset($_SESSION['image'])) {
                                        echo "<img src='../Admin/" . $_SESSION['image'] . "' class='rounded-circle z-depth-2' alt='...' height='95px' width='95px'>";
                                    } else {
                                        echo "<img src='../Resorce/default-avatar.jpg' class='rounded-circle z-depth-2' alt='...' height='50px' width='50px'>";
                                    }
                                    ?>
                                </div>
                                <h5 class="user-name text-center">
                                    <?php if (isset($_SESSION['Name'])) {
                                        echo  $_SESSION['Name'];
                                    } ?>
                                </h5>
                                <!-- <h6 class="user-email">yuki@Maxwell.com</h6> -->
                            </div>
                            <!-- <div class="about">
                                <h5>About</h5>
                                <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <form action="">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" value="<?php echo  $_SESSION['Name'] ?>"
                                            id="fullName" placeholder="Enter full name" readonly>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Roll">Roll</label>
                                        <input type="text" value="<?php if (isset($_SESSION['roll'])) {
                                                                        echo  $_SESSION['roll'];
                                                                    } ?>" class="form-control" id="eMail"
                                            placeholder="Enter email ID" readonly>
                                    </div>
                                </div> -->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="TeacherID">TeacherID</label>
                                        <input type="text" class="form-control" id="TeacherID" value="<?php if (isset($_SESSION['id'])) {
                                                                        echo  $_SESSION['id'];
                                                                    } ?>"
                                            placeholder="Enter phone number" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Department">Department</label>
                                        <input type="text" class="form-control" id="Department" value="<?php if (isset($_SESSION['department'])) {
                                                                        echo  $_SESSION['department'];
                                                                    } ?>"
                                            placeholder="Department" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone No.</label>
                                        <input type="text" class="form-control" id="class" value="<?php if (isset($_SESSION['phone'])) {
                                                                        echo  $_SESSION['phone'];
                                                                    } ?>"
                                            placeholder="Website url" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right mt-3">
                                    <button type="button" id="submit" name="submit"
                                        class="btn btn-secondary">Cancel</button>
                                    <button type="button" id="submit" name="submit"
                                        class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div> -->
                        </form>
                        <form method="POST" action="">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">Street</label>
                                        <input type="text" value="<?php if (isset($_SESSION['street'])) {
                                                                        echo  $_SESSION['street'];
                                                                    } ?>" class="form-control" id="Street"
                                            placeholder="Enter Street" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">City</label>
                                        <input type="text" value="<?php if (isset($_SESSION['city'])) {
                                                                        echo  $_SESSION['city'];
                                                                    } ?>" class="form-control" id="ciTy"
                                            placeholder="Enter City" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">State</label>
                                        <input type="text" value="<?php if (isset($_SESSION['state'])) {
                                                                        echo  $_SESSION['state'];
                                                                    } ?>" class="form-control" id="sTate"
                                            placeholder="Enter State" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Zip Code</label>
                                        <input type="text" value="<?php if (isset($_SESSION['zip'])) {
                                                                        echo  $_SESSION['zip'];
                                                                    } ?>" class="form-control" id="zIp"
                                            placeholder="Zip Code" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="text-right mt-3">
                                    <a href="address.php"><button type="button" id="submit" name="submit"
                                        class="btn btn-secondary">Add Info</button></a>
                                    <button type="button" id="submit" name="submit"
                                        class="btn btn-primary">Update</button>
                                </div> -->
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
