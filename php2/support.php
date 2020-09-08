<?php
$operations = array
(
    //array(code, description, #inputs)
    array("sum","Addition",2),
    array("sub","Subtraction",2),
    array("mul","Multiplication",2),
    array("div","Division",2),
    array("rem","Remainder",2),
);

class operation {
    public function __construct($arr) {
        $this->code = $arr[0];
        $this->des = $arr[1];
        $this->in = $arr[2];
    }
}

foreach($operations as $val) {
    $json_operations[] = new operation($val);
}
echo json_encode($json_operations,  JSON_UNESCAPED_SLASHES);
?>