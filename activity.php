<?php include './include/header.php'; ?>

<?php include './include/navbar.php'; ?>


<div class="row m-0 p-0">
    <div class="col-12 bg-primary py-5 text-center text-white">
        <div class="py-2 align-center">
            <h1 class="font-weight-bold">Activity</h1>
            <small >Activity : Mahidol University Global Health</small>
           
        </div>
        <!-- <small>Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./</small> -->
    </div>
    <div class="col-12 col-md-12 col-sm-12 card p-3 p-sm-5 text-sm-center">

        <div class="row my-4 m-0 p-0">
            <div class="col-12 m-0 p-0">
                <table id="g_table" class="p-0 m-0 table table-hover w-100" width="100%">
                </table>
            </div>
        </div>

    </div>


</div>


<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-mugh.com/api/get_activity.php",
            data: {},
        }).done(function(data) {
            console.log(data)
            let tableData = []
            data = data.result;
            for (var i = 0; i < data.length; i++) {
                tableData.push([
                    `${data[i].id}`,
                    `${data[i].title}`,
                    `${data[i].end_date}`,
                    `${data[i].start_time} - ${data[i].end_time}`,
                    `<a href="./single_activity.php?id=${data[i].id}" class=" btn btn-success "><small class="m-0 p-0 font-weight-bold ">
                <i class="fas fa-eye"></i> ดูเพิ่มเติม</small></a>
              `,

                ]);
            };

            initDataTables(tableData);
        }).fail(function() {

        })

        function initDataTables(tableData) { // สร้าง datatable
            $('#g_table').DataTable({
                data: tableData,
                columns: [{
                        title: "NO.",
                        className: "align-middle",
                        width: "10%",
                    },
                    {
                        title: "TITLE",
                        className: "align-middle",

                    },

                    {
                        title: "DATE",
                        className: "align-middle",

                    },
                    {
                        title: "TIME",
                        className: "align-middle",

                    },
                    {
                        title: "VIEW",
                        className: "align-middle",

                    },



                ],


                initComplete: function() {},
                fnDrawCallback: function() {
                    $('.toggle-event').bootstrapToggle();
                },
                responsive: {
                    details: {

                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },
               
            })
        }
    })
</script>

<div class="d-none d-sm-block">
    <?php include './include/footer.php'; ?>
</div>
<?php

include 'include/script.php';

?>
</body>