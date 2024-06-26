<?php
header("Content-Type: application/json");

include_once("../model/TodoModel.php");

$CatatanController = new CatatanControler();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'view':
            $Catatan = $CatatanController->view_Catatan();
            echo json_encode($Catatan);
            break;
        case 'add':
            $Catatan = $_GET['Catatan'];
            $Catatan_data = $_GET['Catatan_data'];
            $result = $CatatanController->add_Catatan($Catatan, $Catatan_data);
            echo json_encode(['pesan' => 'Catatan added successfully'])
            break;
        case 'update':
            $id = $_GET['id'];
            $topic = $_GET['topic'];
            $Catatan = $_GET['Catatan'];
            $result = $CatatanController->update_Catatan($id, $topic, $Catatan);
            echo json_encode(['pesan' => 'Catatan updated successfully']);
            break;
        case 'delete':
            $id = $_GET['id'];
            $result = $CatatanController->delete_Catatan($id);
            echo json_encode(['pesan' => 'Catatan deleted successfully']);
            break;
    }
} else {
    echo json_encode(['error' => 'Invalid action']);
}
