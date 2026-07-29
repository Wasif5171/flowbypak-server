<?php
header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'status' => 'online',
    'service' => 'FlowByPak Server',
    'php' => PHP_VERSION
]);