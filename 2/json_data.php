<?php
$str='{
    "items": [
        {
            "id" : 1,
            "date" : "2016-02-18",
            "title" : "Item 1"
        },
        {
            "id" : 2,
            "date" : "2016-02-16",
            "title" : "Item 2"
        },
        {
            "id" : 3,
            "date" : "2016-01-10",
            "title" : "Item 3"
        }
    ]
}';

if ($_GET['id']){
    $data=json_decode($str);
    $arr=array();
  foreach ( $data as $data){
  foreach ( $data as $data){
  if($data->id==$_GET['id']){
  $date1 = strtotime($data->date);
  $arr = ['id' => ''.$data->id.'',
  'date' => ''. date( 'd-m-Y' , $date1).'',
  'title' => ''.$data->title.'' ];

         }
           }    
            }

echo json_encode($arr) ;
}