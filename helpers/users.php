<?php

function index()
{
   // get json data

   $dataDir = __DIR__ . "/../data/data.json";
   $data = [];

   if (file_exists($dataDir)) {
      $data = json_decode(file_get_contents($dataDir), true);
   }

   return $data;
}
