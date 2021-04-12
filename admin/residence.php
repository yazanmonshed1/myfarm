<?php
require_once("../etc/config.php");

include("../lib/variables.php");

$_SESSION['active'] = 'residence';
$success_delete = false;
$user = $_SESSION["login"]; //store data retreive from user table 
// store the variables
$name = $user['user_name'];
$phone = $user['user_phone'];
$email = $user['user_email'];
$user_id = $user['user_id'];
$residences = new Residences();
$users = new Users();
$city = new City();

// check if user click delete
if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'delete') {
    $sid = $_REQUEST['id'];
    // Check if user exist.
    if (count($residences->getResidencesById($sid))> 0) {
        $a = $residences->deleteResidencess($sid);
        if ($a === false) {
            header("location:404.html");
        } else {
            $success_delete = true;
        }
    }
}

if ($_SESSION['login']['user_status']==0) {
    $result = $residences->getAllResidences();
} else {
    $result = $residences->getResidencesByUserId($_SESSION['login']['user_id']);
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
                <h4 class="mb">السكنات</h4>
            </div>
            <?php if ($success_delete) {
                echo '<div class="alert alert-success">
                .تم حذف السكن بنجاح
            </div>';
            }
             if (!empty($_GET["add"])) {
                echo '<div class="alert alert-success">
                .تم اضافة السكن بنجاح
            </div>';
            }
             if (!empty($_GET["edit"])) {
                echo '<div class="alert alert-success">
                .تم تعديل السكن بنجاح
            </div>';
            }
            ?>


            <div class="delete_active">
                <button class="btn btn-primary btn-lg" type="submit" name="add" onclick="window.location.href='add_residence.php'">اضافة سكن جديد</button>
            </div>
            <table id="usetTable" class="display">
                <thead>
                    <tr>
                        <th></th>
                        <th> تاريخ النشر </th>
                        <th> الجنس </th>
                        <th> عدد السكنات </th>
                        <th> المحافظة </th>
                        <th> اسم السكن </th>
                        <?php 
                            if ($_SESSION['login']['user_status']==0) {
                                echo '<th> اسم المستخدم</th>';
                            }
                        ?>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($result as $cont) {
                        $residence_id = $cont['residences_id'];
                        $user_residence = $users->getUserById($cont['user_id']);
                        $residence_gender = $cont['residences_gender'] == 2 ? 'أنثى': 'ذكر';
                        $residence_city = $city->getCityById($cont['city_id']);
                        echo "<tr>";
                        echo '<td>
                                <button class="btn btn-danger btn-md" onclick=window.location.href="residence.php?id=' . $residence_id . '&type=delete">حذف</button>
                                <button class="btn btn-primary btn-sm" onclick=window.location.href="edit_residence.php?id=' . $residence_id . '">تعديل</button>
                                </td>';
                        echo "<td>" . $cont['residences_entry_data'] . "</td>";
                        echo "<td>" . $residence_gender . "</td>";
                        echo "<td>" . $cont['residences_number'] . "</td>";
                        echo "<td>" . $residence_city[0]['city_name'] . "</td>";

                        echo "<td>" . $cont['residences_name'] . "</td>";
                        if ($_SESSION['login']['user_status']==0) {
                            echo "<td>" . $user_residence[0]['user_name'] . "</td>";
                        }

                        echo "</tr>";
                    }
                    ?>
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
                responsive: true,
                "autoWidth": false,
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