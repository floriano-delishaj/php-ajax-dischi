<?php

include "../database/diskDb.php";

header("Content-Type: application/json");

echo json_encode($db);