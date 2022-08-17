<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append('{
    "pointOfSales": {
        "id": "V909991",
        "name": "V909991"
    },
    "telecom": null,
    "person": null,
    "source": "Lead Internet"
}');

$request->setRequestUrl('https://apis-b2b.sky.com.br/dev/management/leads/000840');
$request->setRequestMethod('PATCH');
$request->setBody($body);

$request->setHeaders(array(
  'Postman-Token' => 'a1d55e43-e95d-4538-8da2-14070056a13c',
  'cache-control' => 'no-cache',
  'X-HTTP-Method-Override' => 'PATCH',
  'X-API-Key' => 'jdQdMbttU26TVJ3Zx9pmmFJWPV35RyO33uQvaOU8',
  'Content-Type' => 'application/json'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
?>