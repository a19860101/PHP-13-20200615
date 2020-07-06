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
    function show($id){
        try{
            // require_once("pdo.php");
            // $id = $_GET["id"];
            global $pdo;
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($id){
        try{
            // require_once("pdo.php");
            // $id = $_GET["id"];
            global $pdo;
            $sql = "DELETE FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
