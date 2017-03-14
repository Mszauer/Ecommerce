<?php require_once("../../config.php");

if(isset($_GET['id'])) {
    $query = query("DELETE FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
    confirm($query);
    set_message("<div class=\"alert alert-success\">Successfully deleted user</div>");
    redirect("../../../public/admin/index.php?users");
} else {
    redirect("../../../public/admin/index.php?users");
}

 ?>