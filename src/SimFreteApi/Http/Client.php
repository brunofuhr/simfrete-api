<?php

namespace SimFreteApi\Http;

class Client {

    protected function executeCURLGETaction($routeCURL) {
        $curlHandler = curl_init();
        curl_setopt($curlHandler, CURLOPT_URL, $routeCURL);
        curl_setopt($curlHandler, CURLOPT_POST, 0);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, TRUE);
        $content = curl_exec($curlHandler);
        curl_close($curlHandler);
        return $content;
    }

    protected function executeCURLPOSTaction($routeCURL, $post_array) {
        $curlHandler = curl_init($routeCURL);
        curl_setopt($curlHandler, CURLOPT_HEADER, 1);
        $data = json_encode($post_array);
        curl_setopt($curlHandler, CURLOPT_URL, $routeCURL);
        curl_setopt($curlHandler, CURLOPT_POST, true);
        curl_setopt($curlHandler, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curlHandler, CURLOPT_HEADER, 0);
        curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandler, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
        );
        $response = curl_exec($curlHandler);
        
        curl_close($curlHandler);
        return $response;
    }

    protected function executeCURLPUTaction($routeCURL, $post_array) {
        $curlHandler = curl_init($routeCURL);
        curl_setopt($curlHandler, CURLOPT_HEADER, 1);
        $data = json_encode($post_array);
        curl_setopt($curlHandler, CURLOPT_URL, $routeCURL);
        curl_setopt($curlHandler, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curlHandler, CURLOPT_HEADER, 0);
        curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandler, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
        );
        $response = curl_exec($curlHandler);
        curl_close($curlHandler);
        return $response;
    }

    protected function executeCURLDELETEaction($routeCURL, $post_array) {
        $curlHandler = curl_init($routeCURL);
        curl_setopt($curlHandler, CURLOPT_HEADER, 1);
        $data = json_encode($post_array);
        curl_setopt($curlHandler, CURLOPT_URL, $routeCURL);
        curl_setopt($curlHandler, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curlHandler, CURLOPT_HEADER, 0);
        curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandler, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
        );
        $response = curl_exec($curlHandler);
        
        curl_close($curlHandler);
        return $response;
    }

    protected function prepareCURLFieldString($fields) {
        $urlifyedFields = "";
        $dataFieldsForCURL = array();
        foreach ($fields as $key => $value) {
            $urlifyedFields.=$key . '=' . urlencode($value) . '&';
        }
        $urlifyedFields = substr($urlifyedFields, 0, strlen($urlifyedFields) - 1);
        $dataFieldsForCURL['count'] = count($fields);
        $dataFieldsForCURL['urlifyedstring'] = $urlifyedFields;
        return $dataFieldsForCURL;
    }
}