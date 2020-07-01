<?php
    function showAll(){
        try {
            // require_once("pdo.php");
            global $pdo;
            $sql = "SELECT * FROM students";
            #預備陳述式
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch()){
               $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
