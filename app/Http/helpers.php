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

function checkactivevalue($source)
{

        if($source>=0 && $source<=20 ):
            $active1 = 'active'; $active2 = ''; $active3 = ''; $active4 = ''; $active5 = '';
        elseif($source>=20 && $source<=40 ):
            $active1 = 'active'; $active2 = 'active'; $active3 = ''; $active4 = ''; $active5 = '';
        elseif($source>=40 && $source<=60 ):
            $active1 = 'active'; $active2 = 'active'; $active3 = 'active'; $active4 = ''; $active5 = '';
        elseif($source>=60 && $source<=80 ):
        $active1 = 'active'; $active2 = 'active'; $active3 = 'active'; $active4 = 'active'; $active5 = '';
        elseif($source>=80 && $source<=100 ):
            $active1 = 'active'; $active2 = 'active'; $active3 = 'active'; $active4 = 'active'; $active5 = 'active';
        endif;
        
        $html ='
        <li class="'.$active1.'"></li>
        <li class="'.$active2.'"></li>
        <li class="'.$active3.'"></li>
        <li class="'.$active4.'"></li>
        <li class="'.$active5.'"></li>';


return $html;
}
?>