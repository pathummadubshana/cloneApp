<?php
    class studentParent{
        public $stdName;
        public $stdNum;

        function _construct($stdName,$stdNum){
            $this->Name=$stdName;
            $this->regnum=$stdNum;
        }
    }
    class StudentChild extends studentParent{
        public function display(){
            echo "The student name is {$this->name} and student register number is {$this->regnum}"; 

        }
    }
    if (isset($_POST["submit"])){
        $name =$_POST["name"];
        $regnum=$_POST["reg"];
        $StudentChild = new StudentChild($stdName, $StdNum);
        $StudentChild->display();
    }
    ?>