<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container">

    <div class="row m-0 p-0">
        <div class="col-12 col-md-12 col-sm-12 card p-3 p-sm-5 text-sm-center">
            <h1 class="text-primary">Gallery</h1>
            <small class="text-secondary">Gallery : Asean University Health Promotion Network</small>
            <hr>
            <div class="row my-4 m-0 p-0">
                <div class="col-12 m-0 p-0">
                    <table id="g_table" class="p-0 m-0 table table-hover w-100" width="100%">
                    </table>
                </div>
            </div>

            <a href="single_gallery.php?id="></a>

        </div>


    </div>


</div>

<?php include 'include/script.php' ?>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-Mugh.com/api/get_gallery.php",
            data: {},
        }).done(function(data) {
            let tableData = []
            data = data.result;
            for (var i = 0; i < data.length; i++) {
                tableData.push([
                    `${data[i].id}`,
                    `${data[i].name}`,
                    `${data[i].date}`,
                    `<a href="./single_gallery.php?id=${data[i].id}" class=" btn btn-success "><small class="m-0 p-0 font-weight-bold ">
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
                        title: "ชื่ออัลบั้ม",
                        className: "align-middle",

                    },

                    {
                        title: "วันเดือนปี",
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


</body>