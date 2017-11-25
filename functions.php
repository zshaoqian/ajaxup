<?php

class tree{
   public $str="";

   public  function aa($pid,$db,$table,$step,$flag){
        $sql="select * from ".$table." where pid=".$pid;
        $step+=1;
        $str=str_repeat($flag,$step);
        $result=$db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
    while ($row=$result->fetch()){
        $cid=$row["cid"];
        $cname=$row["cname"];
        $this->str.="<option value='".$cid."'>".$str.$cname."</option>";

        $this->aa($cid,$db,$table,$step,$flag);
    }
 }
}

