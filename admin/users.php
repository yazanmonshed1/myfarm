<?php
require_once("../etc/config.php");

include("../lib/variables.php");

$_SESSION['active'] = 'users';
$success_delete = false;
$user = $_SESSION["login"]; //store data retreive from user table 
// store the variables
$name = $user['user_name'];
$phone = $user['user_phone'];
$email = $user['user_email'];
$user_id = $user['user_id'];
$addUser=$_GET["addUser"];
$editUser=$_GET["editUser"];

$users = new users();
// check if user click delete
if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'delete') {
    $sid = $_REQUEST['id'];
    // Check if user exist.
    if (count($users->getUserById($sid))> 0) {
        $a = $users->deleteUsers($sid);
        if ($a === false) {
            header("location:404.html");
        } else {
            $success_delete = true;
        }
    }
}
$result = $users->getAllUsers($user_id);

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
                <h4 class="mb">المستخدمين</h4>
            </div>
            <?php if ($success_delete) {
                echo '<div class="alert alert-success">
                .تم حذف المستخدم بنجاح
            </div>';
            }
            if (!empty($addUser)) {
                echo '<div class="alert alert-success">
                .تم اضافة المستخدم بنجاح
            </div>';
            }
            if (!empty($editUser)) {
                echo '<div class="alert alert-success">
                .تم تعديل المستخدم بنجاح
            </div>';
            }
            ?>


            <div class="delete_active">
                <button class="btn btn-primary btn-lg" type="submit" name="add" onclick="window.location.href='add_user.php'">اضافة مستخدم جديد</button>
            </div>
            <table id="usetTable" class="display">
                <thead>
                    <tr>
                        <th></th>
                        <th>الجنس</th>
                        <th>رقم الهاتف</th>
                        <th>البريد الالكتروني</th>
                        <th>الاسم</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($result as $cont) {
                        $user_id2 = $cont['user_id'];
                        $user_gender = ($cont['user_gender']==2)?'ذكر':'أنثى';
                        echo "<tr>";
                        echo '<td>
                                <button class="btn btn-danger btn-md" onclick=window.location.href="users.php?id=' . $user_id2 . '&type=delete">حذف</button>
                                <button class="btn btn-primary btn-sm" onclick=window.location.href="edit_user.php?id=' . $user_id2 . '">تعديل</button>
                                </td>';     
                        echo "<td>" . $user_gender . "</td>";
                        echo "<td>" . $cont['user_phone'] . "</td>";

                        echo "<td>" . $cont['user_email'] . "</a></td>";
                        echo "<td>" . $cont['user_name'] . "</td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.js"></script>
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