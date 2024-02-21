<?php

require_once('conn.php');

$limit = 8;
if(isset($_POST['page_no'])){
    $page = $_POST['page_no'];
}else{
    $page = 0;
}


$getdata = "SELECT * from webdurga_gallery LIMIT $page, $limit";
$result = mysqli_query($conn, $getdata);

if (mysqli_num_rows($result) > 0) {
    $output = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $last_id = $row['id'];
            $output .= '<div class="col-6 col-lg-3">
                    <div class="image">
                        <img src="assets/img/'. $row["img"] .'" class="img-fluid" alt="">
                    </div>
                </div>';
    }

    $output .= '<div class="col-12 text-center w-100 mt-5" id="galleryMore">
                    <button class="btn btn-primary px-5 py-2" name="show" id="galleryShow" data-id="'.$last_id.'">View more</button>
                </div>';

    echo $output;
}

mysqli_close($conn);

?>