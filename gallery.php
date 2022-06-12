<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container-fluid">

    <div class="row m-0 p-0">
        <div class="col-12 bg-primary py-5 text-center text-white">
            <div class="py-2">
                <h1>Gallery</h1>
                <small>Gallery : Mahidol University Global Health</small>

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
            url: "https://www.info-mugh.com/api/get_gallery.php",
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
                <i class="fas fa-eye"></i> ViewMore</small></a>
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
                    },
                    {
                        title: "TITLE",
                    },

                    {
                        title: "DATETIME",
                    },
                    {
                        title: "VIEW",
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


</body>