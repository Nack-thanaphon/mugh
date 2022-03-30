<?php include 'include/header.php'; ?>

<?php include 'include/navbar.php'; ?>

<div class="container">
    <div class="row my-5 m-2 p-0   d-flex justify-content-between">
        <div class="col-12 col-md-7 card p-3 m-1">

            <h3 class="text-primary">จดหมายข่าว</h3>
            <small class="text-secondary">Newsletter : Mahidol University Global Health</small>
            <div class="row my-4 m-0 p-0" id="news_list">

                <table class="table table-bordered table-hover">
                    <thead class="thead-secondary">
                        <tr>
                            <th scope="col" style="width:10% ;">Publish</th>
                            <th scope="col" style="width:60% ;">Newsletter</th>
                            <th scope="col" style="width: 30%;">Download</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>
                                <div class="btn btn-primary">download</div>
                            </td>

                        </tr>

                    </tbody>
                </table>


            </div>
            <div class=" bg-white d-flex justify-content-between mb-3 p-1 ">

            </div>


        </div>

        <div class="col-12 col-md-4 card p-3 m-1">
            <?php include 'include/aside.php'; ?>
        </div>
    </div>


</div>



<?php

include 'include/script.php';
include "include/footer.php"; ?>