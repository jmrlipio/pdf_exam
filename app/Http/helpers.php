<?php
$primary = array(); 
$data = array();
function order_array($source, $column)
{
    foreach($source as $record) 
    {    
        $primary[] = $record->$column;
        $data[] = array('title' => $record->title, 'end_date' => $record->$column);
    }
    array_multisort($primary, SORT_ASC, $data);
    return $data;
}
?>