<?php
require_once './../libs/articles_crud.php';
$crud = new crud();
if (!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['abstract'])) {
    $crud->title = $_POST['title'];
    $crud->text = $_POST['text'];
    $crud->abstract = $_POST['abstract'];
    $crud->author_id = 1;
    $crud->cat = 1;
    $crud->created_at = time();
    $res = $crud->insert();
    header('location: ./../panel.php');
}
