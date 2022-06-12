<?php include './database/connect.php'; ?>
<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $text = $_POST['search_detail'];
    $arr = array();
    $allresult = 0;

    $stmt = $conn->prepare("SELECT * FROM tbl_news WHERE n_name LIKE ? ");
    $stmt->execute([
        '%' . $text . '%'
    ]);
    $count = $stmt->rowCount();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $allresult += $stmt->rowCount();
    if (true) {
        //tbl 1

        foreach ($result as $row) {
            $items = new stdClass();
            $id = $row['n_id'];
            $items->name = $row['n_name'];
            $items->type = 'ข่าวสาร';
            $items->table = "./single_news.php?id=$id";

            array_push($arr, $items);
        }

        //tbl2
        $stmt = $conn->prepare("SELECT * FROM tbl_file WHERE f_name LIKE ? ");
        $stmt->execute([
            '%' . $text . '%'
        ]);
        $count = $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $allresult += $stmt->rowCount();
        foreach ($result as $row) {
            $f_id = $row['f_id'];
            $items = new stdClass();
            $items->name = $row['f_name'];
            $items->type = 'เอกสาร';
            $items->table = "./single_file.php?id=$id";
            array_push($arr, $items);
        }
        //tbl3
        $stmt = $conn->prepare("SELECT * FROM tbl_events WHERE title LIKE ? ");
        $stmt->execute([
            '%' . $text . '%'
        ]);
        $count = $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $allresult += $stmt->rowCount();
        foreach ($result as $row) {
            $id = $row['et_id'];
            $items = new stdClass();
            $items->name = $row['title'];
            $items->type = 'กิจกรรม';
            $items->table = "./single_activity.php?event=$id";

            array_push($arr, $items);
        }
        //tbl4
        $stmt = $conn->prepare("SELECT * FROM tbl_newsletter WHERE n_title LIKE ? ");
        $stmt->execute([
            '%' . $text . '%'
        ]);
        $count = $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $allresult += $stmt->rowCount();


        foreach ($result as $row) {
            $id = $row['id'];
            $items = new stdClass();
            $items->name = $row['n_title'];
            $items->type = 'จดหมายข่าว';

            $items->table = "./single_newsletter.php?id=$id";


            array_push($arr, $items);
        }
    } else {
    }
} else {
    echo "ไม่มีข้อมูล";
}

?>
<div class="container-fluid">
    <div class="row p-0 my-2 m-0 d-flex justify-content-between">
        <div class="col-12 col-md-12 col-sm-12 card py-4 mb-2">

            <div class="">
                <h4 class="pb-3">ผลการค้นหาทั้งหมด : <span class="text-primary"><?php echo $allresult ?></span> รายการ</h4>
                <div class=" p-2  my-1" id="search_result">
                    <div class="row m-0 p-0">
                        <?php
                        $html = '';
                        for ($i = 0; $i < count($arr); $i++) {
                            $html .= '<a href="' . $arr[$i]->table . '" target="blank" class="col-12 card my-2 py-2" >
                                                <small class="text-secondary">' . $arr[$i]->type . '</small>
                                                <h4 class="py-3">' . $arr[$i]->name . '</h4>
                                    </a>';
                        }
                        echo $html;
                        ?>

                    </div>
                </div>
                <!-- <div class="btn btn w-100 alert-secondary text-center">Load more..</div> -->
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        var baseUrl = (window.location).href; // You can also use document.URL
        var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-mugh.com/api/singleactivity.php",
            data: {
                id: id,
            },
            success: function(data) {

                data = data.result;
                console.log(data)

                $('#e_type').append("หัวข้อกิจกรรม : ", data[0].type);
                $('#e_title').append("ชื่อกิจกรรม : ", data[0].title);
                $('#e_detail').append(data[0].detail);
                $('#e_link').append('ลิงค์กิจกรรม :<a href="' + data[0].link +
                    '" target="_blank">Click me</a>');
                $('#e_date').append('วันเดือนปี :', data[0].end_date);
                $('#e_time').append('เวลา :', data[0].start_time, '-', data[0].end_time);
            },

            error: function(err) {
                console.log("bad", err)

            }
        })
    })
</script>
<?php

include 'include/script.php';
include "./include/footer.php"; ?>