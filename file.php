<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container">
    <div class="row my-5 m-2 p-0   d-flex justify-content-between">


        <div class="col-12 col-md-7 card p-3 m-0">

            <h3 class="text-primary">เอกสาร</h3>
            <small class="text-secondary">Newsletter : Mahidol University Global Health</small>
            <div class="row my-4 m-0 p-0" id="news_list">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="10%">Date</th>
                            <th scope="col" width="50%">Document name</th>
                            <th scope="col" width="40%">file</th>
                        </tr>
                    </thead>
                    <tbody id="file_tbl">

                    </tbody>
                </table>

            </div>
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
            url: "https://www.info-mugh.com/api/get_download.php",
            data: {},
        }).done(function(data) {
            console.log(data)
            let html = '';
            data = data.result;
            for (var i = 0; i < data.length; i++) {

                html +=
                    `<tr>
                        <th scope="row"><span class="badge badge-pill badge-info">${data[i].type}</span></th>
                        <td>${data[i].name}</td>
                        <td>
                            <a class="btn-btn-success" href="https://info-mugh.com/bos/uploads/docs/${data[i].file}">
                                <i class="fas fa-file"> Download</i>
                            </a>
                        </td>
            
                    </tr>`

            };

            $('#file_tbl').append(html);

        }).fail(function() {

        })
    })
</script>

<div class="d-none d-sm-block">
    <?php include './include/footer.php'; ?>
</div>
<?php include 'include/script.php'; ?>


</body>