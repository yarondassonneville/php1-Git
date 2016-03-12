<?php
    class Job {
        private $m_sTitle;
        private $m_sTime;
        private $m_sDescription;

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty) {
                case "Title":
                    $this->m_sTitle = $p_vValue;
                    break;
                case "Time":
                    $this->m_sTime = $p_vValue;
                    break;
                case "Description":
                    $this->m_sDescription = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            switch($p_sProperty){
                case "Title":
                    return $this->m_sTitle;
                    break;
                case "Time":
                    return $this->m_sTime;
                    break;
                case "Description":
                    return $this->m_sDescription;
                    break;
            }
        }

        public function Save() {
            if(!empty($this->m_sTitle) && !empty($this->m_sTime) && !empty($this->m_sDescription)){
                $conn = new PDO("mysql:host=localhost;dbname=twitter", "root", "");
                $statement = $conn->prepare("insert into jobs (title, time, description) values (:title, :time, :description)");
                $statement->bindValue(":title", $this->m_sTitle);
                $statement->bindValue(":time", $this->m_sTime);
                $statement->bindValue(":description", $this->m_sDescription);
                $statement->execute();
            }
            else {

            }
        }

        public function GetAll() {
            $conn = new PDO("mysql:host=localhost;dbname=twitter", "root", "");

            $statement = $conn->prepare("select * from jobs");
            $statement->execute();

            $result = $statement->fetchAll();

            return $result;
        }
    }
?>