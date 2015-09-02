<?php
$tai_lieu = new DOMdocument();
$tai_lieu -> load('xmlData.xml');

$node_root = $tai_lieu -> documentElement;
//echo $node_root->getAttribute('TenKH');
$arr = $node_root->childNodes;

foreach ($arr as $node) {
    if ($node->nodeType==XML_ELEMENT_NODE) {
        echo $node->nodeValue.'</br>';
       
    }
}

