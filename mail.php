<?php


$post = array(
    "email" => "juanrosales@ayudat.es",
    "password" => "Sfinge87"
);

$token ="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjE3MjViOGYwYzQwNGNlYTBmYWNhMzFmNmEwYTE1YjlhNzg2ZjZlNjg0NjAxMmNhMTM1MGE5OTUxY2M5NTA2YjViZGVkZDczYmU0MTA0ZDIiLCJpYXQiOjE1ODA3MjM0NjAsIm5iZiI6MTU4MDcyMzQ2MCwiZXhwIjoxNjEyMzQ1ODYwLCJzdWIiOiIxMyIsInNjb3BlcyI6W119.JJJtLRK6XgGlGvrOy9wrxrSKUQwF4JCSTJBbD8hfI8UpEmk3T1tSGR9KfYrXSHt1QJ5tH08sv2vzshyqChMAdGeQImN9vUygyVzi2PwT48NPW6JnXjpgCTmY7WKUxA-pfA-65FVKURX-TeXlO1eC680dWkerkYm6-_62HA9_uIpEe7GtndSEv1epssNpVC7AwvbYm7U3L7cz0o9Vfdqd3r096FcKjcmq4O8CEQ1nYS-NjNL19zKL18sHjTlGjCpJuoK_INmO2ZxHOue5VYppQd-Ip3nakC9eIPcxM0mBFsjwLSejGZldpds_yI4Xecja7cdcSJapz_VY3S_wek15CU6cMgcKd-ii1M6gCV3jsMPx7WHHQf5d97CizDgOIB90_OTC0aI3kl9c8aR1NCJO0uowfg_JD5p9M6Dzn-gIj7Utz3O4MIwpXhtkScXGuPKIk_S_zzBPbx-02jIz6qqkB5UJV1Z59_h2V0Pn56RNyEnzWJJO6Hp5lRBsvBSk0kS07nCYLS4E7g6zSRonogGNTxuyZ9Ip-82XF2j8ZmO7CDONHwHJtInSYnE37aEwsTBphZH66ho-mXdqXU-u_iKpixeyRi1Hbx2T2nTQ8aIOEKuQ88pZvcSJfjsM_lUoTJGL7QSaKAAQFxjPr4CyjE_EAO_SnQr4UpA1r18IfasciBg";

    header('Content-Type: application/json'); // Specify the type of data
    $ch = curl_init('http://crm.almaintelligence.com/api/login'); // Initialise cURL
    $post = json_encode($post); // Encode the data array into a JSON string
    $authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Inject the token into the header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
    $result = curl_exec($ch); // Execute the cURL statement
    curl_close($ch); // Close the cURL connection
var_dump($result);

 
$post2 = array(
    "email" => "juanrosales@ayudat.es",
    "phone" => "Sfinge87",
    "consulta" => "hola",
    "canal" => "adword",
    "url" => "localhost",
    "notificaciones" => "1"
); 




    header('Content-Type: application/json'); // Specify the type of data
    $ch = curl_init('http://crm.almaintelligence.com/api/leads'); // Initialise cURL
    $post2 = json_encode($post2); // Encode the data array into a JSON string
    $authorization = "Authorization: Bearer ".$result; // Prepare the authorisation token
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post2); // Set the posted fields
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
    $result2 = curl_exec($ch); // Execute the cURL statement
    curl_close($ch); // Close the cURL connection
    echo $result2;


 