<?php
include "../../includes/header.php";
include "../../connection/config.php";
?>
<!-- Wrapper -->
<div id="wrapper" class="fixed-sidebar fixed-navbar">
    <!-- available options: fixed-sidebar, fixed-navbar, fixed-footer, mini-sidebar -->

    <?php
    include "../../includes/admin_sidebar.php";
    ?>

    <!-- Main -->
    <div id="main">
        <?php
        include "../../includes/nav.php";
        ?>

        <!-- Main body -->
        <div id="main-body">

            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fw-black">Add User</h3>
                        <form class="row g-3" id="add_user" >
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="inputEmail3">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputPassword3" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="inputPassword3">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputAddress" >
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputAddress2" >
                            </div>
                            <div class="col-sm-6">
                                <label for="inputCity" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="inputCity">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputState" class="form-label">Gender</label>
                                <select id="inputState" name="gender" class="form-select">
                                    <option selected>Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label for="inputCity" class="form-label">Photo</label>
                                <input type="file" name="photo" class="form-control" id="inputCity">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputState" class="form-label">Role</label>
                                <select id="inputState" name="role" class="form-select">
                                    <option selected>Select Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                    <option value="3">Member</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputCity" class="form-label">Religion</label>
                                <input type="text" name="religion" class="form-control" id="inputCity">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputCity" class="form-label">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control" id="inputCity">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputCity" class="form-label">Joining Date</label>
                                <input type="date" name="joining_date" class="form-control" id="inputCity">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputCity" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="inputCity">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main body -->

        <?php
        include "../../includes/mini_footer.php";
        ?>

    </div>
    <!-- /Main -->

</div>
<!-- /Wrapper -->
<?php
include "../../includes/footer.php";
?>