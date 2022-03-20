<?php
require_once('db.php');

function registerStudent()
{
    global $pdo;
    $stuname =  $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stureg = $_POST['stureg'];
    $stumob = $_POST['stumob'];
    $studept = $_POST['studept'];
    $stubatch = $_POST['stubatch'];
    $sturoom = $_POST['sturoom'];
    $valid = 1;
    $err_msg = '';
    if (!filter_var($stuemail, FILTER_VALIDATE_EMAIL)) {
        $valid = 0;
        $err_msg = 'Email Address is invalid';
    } else if (!is_numeric($stumob)) {
        $valid = 0;
        $err_msg = 'Mobile number must contain only numbers!';
    } else if (strlen($stumob) != 11) {
        $valid = 0;
        $err_msg = 'Please check you phone number!';
    } else if (strlen($stureg) != 4) {
        $valid = 0;
        $err_msg = 'Registration number must contain 4 digits!';
    } else {
        $q = $pdo->prepare("SELECT count(reg) FROM student WHERE reg = ?");
        $q->execute([$stureg]);
        $res = $q->fetchAll();
        foreach ($res as $row) {
            if ($row['count(reg)'] > 0) {
                $valid = 0;
                $err_msg = 'Already registered!';
                break;
            }
        }
    }

    if ($valid) {
        $q = $pdo->prepare("INSERT INTO student (
            sname,
            mail,
            phone,
            dept,
            batch,
            reg,
            room,
            baki
        ) 
        VALUES (?,?,?,?,?,?,?,?)");
        $q->execute([
            $stuname,
            $stuemail,
            $stumob,
            $studept,
            $stubatch,
            $stureg,
            $sturoom,
            1
        ]);
        echo '<div class="alert alert-primary" role="alert">' .
            $stuname . ' has been registered successfully!
      </div>';
    } else {
        echo '<div class="alert alert-warning" role="alert">
        ' . $err_msg . '
      </div>';
    }
}

function display_stu()
{
    global $pdo;
    $value = '<table class="table">
    <thead>
        <tr class="text-center">
            <th scope="col">No.</th>
            <th scope="col">NAME</th>
            <th scope="col">MAIL</th>
            <th scope="col">PHONE</th>
            <th scope="col">DEPT</th>
            <th scope="col">BATCH</th>
            <th scope="col">REG. No.</th>
            <th scope="col">ROOM No.</th>
            <th scope="col">ACTION</th>

        </tr>
    </thead>
    <tbody>';
    $i = 0;
    $q = $pdo->prepare("SELECT * FROM `student` ORDER BY `sid` ASC");
    $q->execute();
    $res = $q->fetchAll();
    foreach ($res as $row) {
        $i++;
        $id = $row['sid'];
        $name = $row['sname'];
        $mail = $row['mail'];
        $phone = $row['phone'];
        $dept = $row['dept'];
        $batch = $row['batch'];
        $reg = $row['reg'];
        $room = $row['room'];
        $value .= '<tr class="text-center">
                        <td>' . $row['sid'] . '</td>
                        <td>' . $name . '</td>
                        <td>' . $mail . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $dept . '</td>
                        <td>' . $batch . '</td>
                        <td>' . $reg . '</td>
                        <td>' . $room . '</td>
                        <td>Delete</td>
                        <td><button type="button" class="btn btn-outline-warning" id="btn_stu_edit"  data-id =' . $id . '>
                        Edit
                    </button></td></tr>';
    }
    $value .= '</tbody></tbale>';
    echo json_encode(['status' => 'success', 'html' => $value]);
}

//get particular student
function getStu()
{
    global $pdo;
    $idd = $_POST['iid'];
    $q = $pdo->prepare("SELECT * FROM `student` where `sid`=?");
    $q->execute([$idd]);
    $res = $q->fetchAll();
    foreach ($res as $row) {
        $stu = "";
        $stu[0] = $row['sid'];
        $stu[1] = $row['sname'];
        $stu[2] = $row['mail'];
        $stu[3] = $row['phone'];
        $stu[4] = $row['dept'];
        $stu[5] = $row['batch'];
        $stu[6] = $row['reg'];
        $stu[7] = $row['room'];
    }
    echo json_encode($stu);
}
