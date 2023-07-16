<?php
class user{
    //ตัวแปรที่จะใฃ้ติดต่อกับ Database
    private $conn;


    //ตัวแปรที่จะทำงานคู่กับแต่ล่ะฟิวล์หรือคอลัมน์ในตาราง
    public $userId;
    public $userFullname;
    public $userName;
    public $userPassword;
    public $userStatus;

    //ตัวแปรที่จะเก็บข้อมูลใด เผื่อเอาไว้ใช้งานเฉยๆ

    //คอนสตักเตอร์ที่จะมีตำสั่งที่ใช้ในการติดต่อกับ Database
    public function __construct($db)
    
    {
        $this->conn = $db;
    }

    //ฟังก์ชั่นต่างๆ ที่จะทำงานกับ Data ตาม Api ที่จะทำการสร้างมันขึ้นมา ซึ่งมีมากน้อยแล้วแต่
    //function loqinuser ที่ทำงานกับ api_loginuser.php
    function loginUser(){
         //คำสั่ง SQL                                        :???????? เรียกว่า พารามิเตอร์ที่จะต้องกำหนดข้อมูลให้มัน
        $strSQL = "SELECT * FROM user_tb WHERE userName = :userName and userPassword = :userPassword";

        //กำหนด statment ที่จะทำงานกับคำสั่ง SQL
        $stmt = $this->conn->prepare($strSQL);

        //ตรวจสอบ ข้อมูล
        $this->userName = htmlspecialchars(strip_tags($this->userName));
        $this->userPassword = htmlspecialchars(strip_tags($this->userPassword));

        //กำหนดข้อมูลให้กับ พารามิเตอร์
        $stmt->bindParam(":userName",$this->userName);
        $stmt->bindParam(":userPassword",$this->userPassword);

        //สั่งให้ SQL ทำงาน
        $stmt->execute();
 
        //ส่งค่าผลลัพธ์ที่ได้จากคำสั่ง SQL ไปใช้งาน
        return $stmt;

    }

    //fucntion reisterUser ที่ทำงานกับ api_reisterUser.php
    function registerUser(){

    }

    //function updateUser ที่ทำงานกับ api_updateUser.php
    function updateUser(){

    }



}