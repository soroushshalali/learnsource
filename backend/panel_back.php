<?php
require_once './../libs/articles_crud.php';
$crud = new crud();
$crud->title = $_REQUEST['title'];
$crud->text = $_REQUEST['text'];
$crud->abstract = $_REQUEST['abstract'];
$crud->author_id = 1;
$crud->cat = 1;
$crud->created_at = time();
$res = $crud->insert();
header('location: ./../panel.php');

// }
// }
