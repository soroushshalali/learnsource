<?php
class crud
{
    public $title;
    public $text;
    public $abstract;
    public $author_id;
    public $cat;
    public $created_at;

    function __construct()
    {
        $base_adr = dirname(__FILE__) . '\\';
        require_once $base_adr . '../libs/db_connect.php';
        db_connect();
    }

    function insert()
    {
        global $conn;
        $stmt_insert = $conn->prepare("INSERT INTO `articles`(`title`, `text` ,`abstract`, `author_id`, `cat`, `created-at` ) VALUES (?,?,?,?,?,?)");
        $stmt_insert->bind_param('sssiii', $this->title, $this->text, $this->abstract, $this->author_id, $this->cat, $this->created_at);
        $res = $stmt_insert->execute();
        return $res;
    }

    function select($command = '')
    {
        global $conn;
        $query = "SELECT * FROM `articles`";
        if (!empty($command)) {
            $query = $command;
        }
        $stmt_select = $conn->prepare($query);
        $stmt_select->execute();
        $res = $stmt_select->get_result();
        while ($row = $res->fetch_assoc()) {
            $output[] = $row;
        }
        return $output;
    }
}
