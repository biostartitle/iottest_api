<?php
class Room1{
    //ตัวแปรที่จะใฃ้ติดต่อกับ Database
    private $conn;


    //ตัวแปรที่จะทำงานคู่กับแต่ล่ะฟิวล์หรือคอลัมน์ในตาราง
    public $id;
    public $airValue1;
    public $airValue2;
    public $airValue3;
    public $roomDate;
    public $roomTime;

    //ตัวแปรที่จะเก็บข้อมูลใด เผื่อเอาไว้ใช้งานเฉยๆ

    //คอนสตักเตอร์ที่จะมีตำสั่งที่ใช้ในการติดต่อกับ Database
    public function __construct($db)
    
    {
        $this->conn = $db;
    }

    //ฟังก์ชั่นต่างๆ ที่จะทำงานกับ Data ตาม Api ที่จะทำการสร้างมันขึ้นมา ซึ่งมีมากน้อยแล้วแต่
    //fucntion getAllTempRoom1 ที่ทำงานกับ api_getAllTempRoom1.php
    //วัตถุประสงค์ของฟังก์ชั่นนี้คือ ไปเอาอุณหภูมิทั้งหมด
    function getAllTempRoom1(){
        
       $strSQL = "SELECT * FROM room1_tb";

       
       $stmt = $this->conn->prepare($strSQL);

      
       $stmt->execute();

       
       return $stmt;
}
    //fucntion getAllTempLessThan20Room1  ที่ทำงานกับ api_getAllTempLessThan20Room1.php
    //วัตถุประสงค์ของฟังก์ชั่นนี้คือ ต้องการอุณหภูมิเฉพาะแอร์ทุกตัวตัวที่2 ของห้อง Room1  ทั้งหมด
    function getAllTempLessThan20Room1(){
        
        $strSQL = "SELECT * FROM room1_tb WHERE airValuel1 <20 and airValue2 < 20 and airValue3 < 20 ";
 
        
        $stmt = $this->conn->prepare($strSQL);
 
       
        $stmt->execute();
 
        
        return $stmt;
 }

}