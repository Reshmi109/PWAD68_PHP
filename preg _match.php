<?php 
$line="vim is the greatest word processor ever creatd! Oh vim,how love thee";
//echo (preg-match("/\bVim\b/i",$line,$match)) print "Match found!";
//if(preg_match("/\bVim\b/i",$line,$match)) print "Match found!";
if(preg_match_all("/\bVim\b/i",$line,$match)) print "Match found!";
print_r($match);


?>