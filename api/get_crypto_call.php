<?php
require_once '../api/api_repository.php';
require_once '../api/entities/crypto.php';

function getСryptoById($id)
{
    $api_repository = new ApiRepository();
    $coin = $api_repository->getObjectById($id);
    $metadata = $api_repository->getMetadataById($id);

    $crypto = new Crypto($coin->data, $id);
    $crypto->metadata = $metadata->data->$id;

    return $crypto;
}

function getCryptoList()
{
    $api_repository = new ApiRepository();
    $json_data = $api_repository->makeRequest();

    $result = [];
    if ($json_data->status->error_code != 0) {
        echo "Error: " . $json_data->status->error_message;
        exit();
    } else
        foreach ($json_data->data as $item) {
            $id = $item->id;
            $quote_request_data = $api_repository->getObjectById($id);
            $metadata = $api_repository->getMetadataById($id);
            $item->quote = $quote_request_data->data->$id->quote;
            $item->metadata = $metadata->data->$id;

            $crypto = new Crypto($item);
            array_push($result, $crypto);
        }
    return $result;
}
?>