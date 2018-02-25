<?php

include 'data.php';

interface ChangelogInterface
{
    public function getCurrentTag($str);
    public function getChangelog($str); 
}



class XML_parser implements ChangelogInterface
{ 
public  $changelog;

function getChangelog($str){
    $arr=array();
    $this->changelog = new SimpleXMLElement($str);
    $p=$this->changelog->release[0];
    foreach ($this->changelog->release as $d){
        array_push($arr,$d);  
    }
  
    foreach ( $arr as $arr){
        $date = strtotime($arr["date"]);
        echo  date( 'd-m-Y' , $date) ."<br>";
        echo $arr["tag"]."<br>";
      
       foreach ( $arr->update as $arr){
            echo $arr."<br>";  
        }
        echo'<hr>';
 }


}

 function getCurrentTag($str)
    {
    
      $this->changelog = new SimpleXMLElement($str);
        $p=  $this->changelog->release[0];
        $date1 = strtotime($p["date"]);
        $max=$p["date"];
        $tag=$p["tag"];;
        $update=array();
      foreach ( $this->changelog->release as $d){
           $date2 = strtotime($d["date"]);
           array_push($update,$d->update);
           if ($date1<$date2) {
           $date1=$date2;
           $tag=$d["tag"];
           $update=array();
           array_push($update,$d->update);
            
        }
      
        }
        
        echo "<p>" . date( 'd-m-Y' , $date1) . "</p>"; 
        echo  $tag.'<br>';
       foreach ( $update[0] as $d){
           echo  $d;   
        } 
          }
            }
         
 $xml = new  XML_parser( );
echo'<h3>getCurrentTag</h3>';
 $xml-> getCurrentTag($xmlstr);
 echo'<hr>';
 echo'<h3>getChangelog</h3>';
 $xml-> getChangelog($xmlstr);