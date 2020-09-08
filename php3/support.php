<?php
$operations = array
(
    //array(code, description, #inputs)
    array("cc","Concatenation",2),
    array("len","Length",1),
    array("com","Compare",2)
);

class operation {
    // constructor
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