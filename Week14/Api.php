<?php
    class api {
        function __construct() {
            $conf = json_decode(file_get_contents('Configuration.json'), TRUE); 
            $this->db = new mysqli($conf["host"], $conf["user"], $conf["password"], $conf["database"]);
        }
        function __destruct() {
            $this->db->close();
        }
        function get($params) {
            $query = 'SELECT * FROM placelocation AS p WHERE id = '. $params['id'];
            $list = array();
            $result = $this->db->query($query); 
            while ($row = $result->fetch_assoc()) {
                $list[] = $row;
            }
            return $list;
        }
    }
?>