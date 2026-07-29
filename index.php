<?php
header('Content-Type: application/json');

echo json_encode([
    'status' => 'online',
    'service' => 'FlowByPak Server',
    'php' => PHP_VERSION
]);
