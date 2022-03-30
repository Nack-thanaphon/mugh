<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container">
    <div class="row my-5 m-2 p-0   d-flex justify-content-between">


        <div class="col-12 col-md-7 card p-3 m-0">

            <h3 class="text-primary">คลังภาพถ่าย</h3>
            <small class="text-secondary">Gallery : Mahidol University Global Health</small>
            <div class="row my-4 m-0 p-0">

                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col" width="10%">Date</th>
                            <th scope="col" width="60%">Activity</th>
                            <th scope="col" width="30%">Preview</th>
                        </tr>
                    </thead>
                    <tbody id="gallery_tbl">

                    </tbody>
                </table>

            </div>

            <a href="single_gallery.php?id="></a>

        </div>

        <div class="col-12 col-md-4 card p-3 ">
            <?php include './include/aside.php'; ?>
        </div>
    </div>


</div>

<script>
    $(document).ready(function() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-mugh.com/api/get_gallery.php",
            data: {},
        }).done(function(data) {

            let html = '';
            data = data.result;
            for (var i = 0; i < data.length; i++) {
                html +=
                    `<tr>
                        <th scope="row"><span class="badge badge-pill badge-info">${data[i].date}</span></th>
                        <td>${data[i].name}</td>
                        <td>
                            <a class="btn-btn-success" href="single_gallery.php?id=${data[i].id}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
            
                    </tr>`


            };

            $('#gallery_tbl').append(html);

        }).fail(function() {

        })



    })
</script>

<div class="d-none d-sm-block">
    <?php include './include/footer.php'; ?>
</div>
<?php include 'include/script.php'; ?>


</body>