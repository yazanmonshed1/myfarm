<?php
require_once("../etc/config.php");

include("../lib/variables.php");

$_SESSION['active'] = 'city';
$success_delete = false;
$user = $_SESSION["login"]; //store data retreive from user table 
// store the variables
$name = $user['user_name'];
$phone = $user['user_phone'];
$email = $user['user_email'];
$user_id = $user['user_id'];

$city = new City();


// check if user click delete
if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'delete') {
    $sid = $_REQUEST['id'];
    // Check if city exist.
    if (count($city->getCityById($sid))> 0) {
        $a = $city->deleteCity($sid);
        if ($a === false) {
            header("location:404.html");
        } else {
            $success_delete = true;
        }
    }
}

$cities = $city->getAllCity();
$cities_tabel = "";

foreach ($cities as $cont) {

    $cities_tabel.= "<tr>";
    $cities_tabel.= '<td>
            <button class="btn btn-danger btn-md" onclick=window.location.href="city.php?id=' . $cont['city_id'] . '&type=delete">حذف</button>
            <button class="btn btn-primary btn-sm" onclick=window.location.href="edit_city.php?id=' . $cont['city_id'] . '">تعديل</button>
            </td>';
    $cities_tabel.= "<td>" . $cont['city_name'] . "</td>";
    $cities_tabel.= "</tr>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="">
    <title>admin|My home</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <?php
    require_once("header-admin.php");
    ?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="col-lg-8 col-lg-offset-2 detailed">
                <h4 class="mb">المحافظات</h4>
            </div>
            <?php if ($success_delete) {
                echo '<div class="alert alert-success">
                .تم حذف المحافظة بنجاح
            </div>';
            }
            if (!empty($_GET["add"])) {
                echo '<div class="alert alert-success">
                .تم اضافة المحافظة بنجاح
            </div>';
            }
            if (!empty($_GET["edit"])) {
                echo '<div class="alert alert-success">
                .تم تعديل المحافظة بنجاح
            </div>';
            }
            
            ?>


            <div class="delete_active">
                <button class="btn btn-primary btn-lg" type="submit" name="add" onclick="window.location.href='add_city.php'">اضافة محافظة جديد</button>
            </div>
            <table id="usetTable" class="display">
                <thead>
                    <tr>
                        <th></th>
                        <th> المحافظة</th>
                    </tr>
                </thead>
                <tbody>
                    <?=$cities_tabel?>
                </tbody>
            </table>
        </section>
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../lib/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="../lib/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <!--common script for all pages-->

    <script src="js/script.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#usetTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Arabic.json"
                },
                responsive: true
            });
            $('#usetTable thead tr').clone(true).appendTo('#usetTable thead');
            $('#usetTable thead tr:eq(1) th').each(function(i) {
                var title = $(this).text();
                if (title != "")
                    $(this).html('<input type="text" placeholder=" بحث حسب ' + title + '" />');
                else
                    $(this).html('<input type="text" placeholder="Search ' + title + '" class="hiedden_btn" />');

                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });

        });
    </script>
    </body>

</html>