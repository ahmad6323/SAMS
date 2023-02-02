<?php
class Database
{
    private $db;

    function __construct()
    {
        try {
            $this->db = new PDO(
                "mysql:host=localhost;dbname=users",
                "root",
                ""
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            ;
            // print('db connected');
            // echo "Connected successfully";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function signup($u, $p)
    {
        try {
            $sql = "INSERT INTO `user` (`uid`, `uname`, `pass`, `created_at`) VALUES (NULL, ?, ?, current_timestamp());";
            $st = $this->db->prepare($sql);
            $st->execute(array($u, $p));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    function signIn($u, $p)
    {
        $sql = "SELECT uid FROM `user` WHERE `uname` = ? AND `pass` = ?;";
        $st = $this->db->prepare($sql);
        $st->execute(array($u, $p));

        if ($st->rowCount() == 1) {
            return true;
        } else {
            false;
        }
    }

    function fetchAllUsers()
    {
        $sql = "SELECT * FROM `user` ";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function allRecordOfHBat()
    {
        $sql = "SELECT * FROM `hardbat` ";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function fetchHardballBat($hid){
        $sql = "SELECT * FROM `Hardbat` WHERE hid = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($hid));
        return $st;
    }
    function allRecordOfTennisBat()
    {
        $sql = "SELECT * FROM `tb_bat`";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function RecordOfHardball()
    {
        $sql = "SELECT * FROM `hardball`";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function RecordOfTennisball()
    {
        $sql = "SELECT * FROM `tennisball`";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function RecordOffootball()
    {
        $sql = "SELECT * FROM `football`";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function RecordOfRackets()
    {
        $sql = "SELECT * FROM `racket`";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function RecordOfShuttle()
    {
        $sql = "SELECT * FROM `shuttle`";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }

    function deleteUser($id)
    {
        $sql = "DELETE FROM `user` WHERE uid = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($id));
    }

    function HardBallBat($h_Type, $bat_c)
    {
        try {
            $sql = "INSERT INTO `hardbat` (`hid`, `h_type`, `bat_c`) VALUES (NULL, ?, ?)";
            $st = $this->db->prepare($sql);
            $st->execute(array($h_Type, $bat_c));
            echo "record added successfully!!! ";
            return true;
        } catch (PDOException $e) {
            echo "not added";
            return false;
        }
    }
    function TennisBallBat($bat_Type, $bat_co)
    {
        try {
            $sql = "INSERT INTO `tb_bat` (`Tbat_id`, `bat_type`, `bat_co`) VALUES (NULL, ? , ?)";
            $st = $this->db->prepare($sql);
            $st->execute(array($bat_Type, $bat_co));
            echo "record added successfully!!! ";
            return true;
        } catch (PDOException $e) {
            echo "not added";
            return false;
        }
    }

    function Hardball($ball_Type, $ball_co)
    {
        try {
            $sql = "INSERT INTO `hardball` (`hardball_id`, `ball_type`, `ball_co`) VALUES (NULL, ? , ?)";
            $st = $this->db->prepare($sql);
            $st->execute(array($ball_Type, $ball_co));
            echo "record added successfully!!! ";
            return true;
        } catch (PDOException $e) {
            echo "not added";
            return false;
        }
    }

    function Tennisball($ball_Type, $ball_co)
    {
        try {
            $sql = "INSERT INTO `tennisball` (`ball_id`, `ball_type`, `ball_co`) VALUES (NULL, ? , ?)";
            $st = $this->db->prepare($sql);
            $st->execute(array($ball_Type, $ball_co));
            echo "record added successfully!!! ";
            return true;
        } catch (PDOException $e) {
            echo "not added";
            return false;
        }
    }
    function Football($football_Type, $football_co)
    {
        try {
            $sql = "INSERT INTO `football` (`fb_id`, `football_type`, `football_co`) VALUES (NULL, ? , ?)";
            $st = $this->db->prepare($sql);
            $st->execute(array($football_Type, $football_co));
            echo "record added successfully!!! ";
            return true;
        } catch (PDOException $e) {
            echo "not added";
            return false;
        }
    }

    function Racket($racket_Type, $rac_com)
    {
        try {
            $sql = "INSERT INTO `racket` (`rac_id`, `racket_type`, `rac_com`) VALUES (NULL, ? , ?)";
            $st = $this->db->prepare($sql);
            $st->execute(array($racket_Type, $rac_com));
            echo "record added successfully!!! ";
            return true;
        } catch (PDOException $e) {
            echo "not added";
            return false;
        }
    }
    function Shuttle($shuttle_Type, $shuttle_com)
    {
        try {
            $sql = "INSERT INTO `shuttle` (`sh_id`, `shuttle_type`, `shuttle_com`) VALUES (NULL, ? , ?)";
            $st = $this->db->prepare($sql);
            $st->execute(array($shuttle_Type, $shuttle_com));
            echo "record added successfully!!! ";
            return true;
        } catch (PDOException $e) {
            echo "not added";
            return false;
        }
    }
    function deleteHardBallBat($hid)
    {
        $sql = "DELETE FROM `hardbat` WHERE hid = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($hid));
    }
    function deleteTennisBat($Tbat_id)
    {
        $sql = "DELETE FROM `tb_bat` WHERE Tbat_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($Tbat_id));
    }
    function deleteHardball($hardball_id)
    {
        $sql = "DELETE FROM `hardball` WHERE hardball_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($hardball_id));
    }
    function deleteTennisball($ball_id)
    {
        $sql = "DELETE FROM `tennisball` WHERE ball_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($ball_id));
    }
    function deleteFootball($fb_id)
    {
        $sql = "DELETE FROM `football` WHERE fb_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($fb_id));
    }
    function deleteRacket($rac_id)
    {
        $sql = "DELETE FROM `racket` WHERE rac_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($rac_id));
    }
    function deleteShuttle($sh_id)
    {
        $sql = "DELETE FROM `shuttle` WHERE sh_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($sh_id));
    }
    function UpdateHbat($h_type,$bat_c,$hid)
    {
        try {

            $sql = "UPDATE `hardbat` SET `h_type` =?, `bat_c` =? WHERE `hid` =? ";
            $st = $this->db->prepare($sql);
            $st->execute(array($h_type,$bat_c,$hid));
            return true;
        }  
        catch(PDOException $e){ 
            return false;
        }   
    }
    function fetchTennisBallBat($Tbat_id){
        $sql = "SELECT * FROM `tb_bat` WHERE Tbat_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($Tbat_id));
        return $st;
    }
    function UpdateTbat($bat_type,$bat_co,$Tbat_id)
    {
        try {

            $sql = "UPDATE `tb_bat` SET `bat_type` =?, `bat_co` =? WHERE `Tbat_id` =? ";
            $st = $this->db->prepare($sql);
            $st->execute(array($bat_type,$bat_co,$Tbat_id));
            return true;
        }  
        catch(PDOException $e){ 
            return false;
        }   
    }
    function fetchHardBall($hardball_id){
        $sql = "SELECT * FROM `hardball` WHERE hardball_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($hardball_id));
        return $st;
    }
    function UpdateHardBall($ball_type,$ball_co,$hardball_id)
    {
        try {

            $sql = "UPDATE `hardball` SET `ball_type` =?, `ball_co` =? WHERE `hardball_id` =? ";
            $st = $this->db->prepare($sql);
            $st->execute(array($ball_type,$ball_co,$hardball_id));
            return true;
        }  
        catch(PDOException $e){ 
            return false;
        }   
    }
   
    function fetchTennisBall($ball_id){
        $sql = "SELECT * FROM `tennisball` WHERE ball_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($ball_id));
        return $st;
    }
    function UpdateTennisBall($ball_type,$ball_co,$ball_id)
    {
        try {

            $sql = "UPDATE `tennisball` SET `ball_type` =?, `ball_co` =? WHERE `ball_id` =? ";
            $st = $this->db->prepare($sql);
            $st->execute(array($ball_type,$ball_co,$ball_id));
            return true;
        }  
        catch(PDOException $e){ 
            return false;
        }   
    }
    function fetchFootBall($fb_id){
        $sql = "SELECT * FROM `football` WHERE fb_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($fb_id));
        return $st;
    }
    function UpdateFootBall($football_type,$football_co,$fb_id)
    {
        try {

            $sql = "UPDATE `football` SET `football_type` =?, `football_co` =? WHERE `fb_id` =? ";
            $st = $this->db->prepare($sql);
            $st->execute(array($football_type,$football_co,$fb_id));
            return true;
        }  
        catch(PDOException $e){ 
            return false;
        }   
    }
    function fetchRacket($rac_id){
        $sql = "SELECT * FROM `racket` WHERE rac_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($rac_id));
        return $st;
    }
    function UpdateRacket($racket_type,$rac_com,$rac_id)
    {
        try {

            $sql = "UPDATE `racket` SET `racket_type` =?, `rac_com` =? WHERE `rac_id` =? ";
            $st = $this->db->prepare($sql);
            $st->execute(array($racket_type,$rac_com,$rac_id));
            return true;
        }  
        catch(PDOException $e){ 
            return false;
        }   
    }
    function fetchShuttle($sh_id){
        $sql = "SELECT * FROM `shuttle` WHERE sh_id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($sh_id));
        return $st;
    }
    function UpdateShuttle($shuttle_type,$shuttle_com,$sh_id)
    {
        try {

            $sql = "UPDATE `shuttle` SET `shuttle_type` =?, `shuttle_com` =? WHERE `sh_id` =? ";
            $st = $this->db->prepare($sql);
            $st->execute(array($shuttle_type,$shuttle_com,$sh_id));
            return true;
        }  
        catch(PDOException $e){ 
            return false;
        }   
    }
   
}

?>