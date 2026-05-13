<?php

    abstract class Abslist{
        abstract function startList();
        abstract function endList();

        function show ($array){
            $this->startList();
            foreach ($array as &$value){
                echo"<li>".$value."<li>\n";
            }
            $this->endList();
        }

}

?>