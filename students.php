<?php
require_once('header.php');
require_once('check_log.php');
?>
<div class="container">
    <div class="row d-flex">
        <div class="col">
            <div class="mt-5 mb-2">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modal_registerStu">
                            REGISTER
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal_registerStu">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title">Register Student</h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                            </div>
                            <div class="modal-body">
                                <!-- <div class="alert alert-danger" id="stu_reg_message" role="alert"></div> -->
                                <p id="stu_reg_message"></p>
                                <div class="mb-3">
                                    <input class="form-control" id="stuName" type="text" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="stuEmail" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Mobile Number" id="stuMob">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="stuReg" placeholder="Registration Number">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Department Name" id="stuDept">
                                </div>
                                <div class="mb-3 row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Batch" id="stuBatch">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Room No." id="stuRoom">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_stureg_close">Close</button>
                                <button type="button" class="btn btn-primary" id="btn_stureg">Register</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- edit modal starts-->
                <div class="modal fade" id="modal_updateStu">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title">Update Info.</h5>

                            </div>
                            <div class="modal-body">
                                <p id="stu_up_message"></p>
                                <div class="mb-3">
                                    <input class="form-control" id="upstuName" type="text" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="upstuEmail" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Mobile Number" id="upstuMob">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="upstuReg" placeholder="Registration Number">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Department Name" id="upstuDept">
                                </div>
                                <div class="mb-3 row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Batch" id="upstuBatch">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Room No." id="upstuRoom">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="hidden" id="upstuId">
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_stuup_close">Close</button>
                                <button type="button" class="btn btn-primary" id="btn_stuup">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edit modal ends -->
            </div>


        </div>
    </div>
    <div id="stu_view_table">

    </div>
</div>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>