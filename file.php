<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="row m-0 p-0">
    <div class="col-12 col-md-12 col-sm-12 card p-3 p-sm-5 text-sm-center">
        <h1 class="text-primary font-weight-bold">เอกสาร</h1>
        <small class="text-secondary">Document : Asean University Health Promotion Network</small>
        <hr>
        <div class="row my-4 m-0 p-0" id="news_list">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="80%">ชื่อเอกสาร</th>
                        <th scope="col" width="10%">ชนิดไฟล์</th>
                        <th scope="col" width="10%">ดาวน์โหลด</th>
                    </tr>
                </thead>
                <tbody id="file_tbl">

                </tbody>
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
            url: "https://www.info-aun-hpn.com/api/get_download.php",
            data: {},
        }).done(function(data) {
            console.log(data)
            let html = '';
            data = data.result;
            for (var i = 0; i < data.length; i++) {

                html +=
                    `<tr>
                    <td class="text-left"><h6>${data[i].name}</h6></td>
                        <th scope="row"><span class="badge badge-pill badge-info">${data[i].type}</span></th>
                        <td>
                            <a class="btn-btn-success" href="https://info-aun-hpn.com/bos/uploads/docs/${data[i].file}">
                                <small><i class="fas fa-file"> ดาวน์โหลด</i></small>
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