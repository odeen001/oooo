<?php
    include ('config.php');
    include ('database.php');

    $db = new Database($host,$user,$pass,$dbname);
    $db->query("select * from grade");

    echo $db->numrow();
    //echo '<pre>',print_r($db),'</pre>';
    while($r = $db->fetch_array()){
      //echo '<pre>',print_r($r),'</pre>';
        echo $r['idsub'],$r['idstudent'],$r['grade'],'<br>';
}
?>
