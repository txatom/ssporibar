<?php

if ( !isset($_REQUEST['term']) )
    exit;

include("dbconnection.php");

$rs = mysql_query('select name,roll,id  from profile where name like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by id asc limit 0,10', $con);

$data = array();
if ( $rs && mysql_num_rows($rs) )
{
    while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
    {
        $data[] = array(
            'label' => $row['name'].','.$row['roll'].','. $row['id'],
            'value' => $row['id']
        );
    }
}

echo json_encode($data);
flush();

