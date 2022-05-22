<?php include './include/header.php'; ?>

<?php include './include/navbar.php'; ?>


<div class="row m-0 p-0">
    <div class="col-12 col-md-12 col-sm-12 card p-3 p-sm-5 text-sm-center">
        <h1 class="text-primary font-weight-bold">Activity</h1>
        <small class="text-secondary">Activity : Asean University Health Promotion Network</small>
        <hr>
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
            url: "https://www.info-Mugh.com/api/get_activity.php",
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
                        title: "ลำดับที่",
                        className: "align-middle",
                        width: "10%",
                    },
                    {
                        title: "หัวข้อกิจกรรม",
                        className: "align-middle",

                    },

                    {
                        title: "วันเดือนปี",
                        className: "align-middle",

                    },
                    {
                        title: "เวลา",
                        className: "align-middle",

                    },
                    {
                        title: "เรียกดู",
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
                language: {
                    "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
                    "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
                    "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": 'ค้นหา',
                    "paginate": {
                        "previous": "ก่อนหน้านี้",
                        "next": "หน้าต่อไป"
                    }
                }
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