<?php
class Room3{
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

    //ฟังก์ชั่นต่างๆ ที่จะทำงานกับ Data ตาม Api ที่จะทำการสร้างมันขึ้นมา ซึ่งมีมาก
}