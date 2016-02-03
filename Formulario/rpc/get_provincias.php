<?php

$conn = new mysqli('localhost' , 'root' , '', 'estados');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
//print_r($provincias);


$query = "SELECT * FROM usuario";
$result = $conn ->query($query);

//$usuarios;

/*$result ->close();
$conn ->close();*/











                                    

                                      foreach($provincias as $pr){
                                        echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
                                      }

                                   
?>
