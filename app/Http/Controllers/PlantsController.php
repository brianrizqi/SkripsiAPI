<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function cuaca()
    {
        $data = curl_init();
        $url = "http://www.bmkg.go.id/cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=12&NamaProv=JawaTimur";

        // setting CURL

        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($data, CURLOPT_URL, $url);

        // menjalankan CURL untuk membaca isi file

        $hasil = curl_exec($data);

        curl_close($data);


//membuat dom dokumen

        $dom = new \DOMDocument();


//mengambil html dari kompas untuk di parse


        @$dom->loadHTML($hasil);

        $classname = "table-responsive";


//mencari class memakai dom query

        $finder = new \DOMXPath($dom);

        $spaner = $finder->query("//*[contains(@class, '$classname')]");

        $span = $spaner->item(0);
// mengambil semua tag td//
        $kota = $span->getElementsByTagName('td');


        $data = array();
        $response = array();
        $response["error"] = true;

// td no 24,25,26,27//


        if (strcasecmp($kota->item(24)->nodeValue, "jember") == 0) {
            $response["error"] = false;

            $data[] = array(
                'kota' => $kota->item(24)->nodeValue,
                'cuaca' => $kota->item(25)->nodeValue,
                'suhu' => $kota->item(26)->nodeValue,
                'kelembaban' => $kota->item(27)->nodeValue
            );


            foreach ($data as $value) {
                $response["kota"] = $value['kota'];
                $response["waktu"] = "Dini hari";
                $response["cuaca"] = $value['cuaca'];
                $response["suhu"] = $value['suhu'];
                $response["kelembaban"] = $value['kelembaban'];

            }


        } else if (strcasecmp($kota->item(30)->nodeValue, "jember") == 0) {
            $response["error"] = false;

            $data[] = array(
                'kota' => $kota->item(30)->nodeValue,
                'cuaca' => $kota->item(31)->nodeValue,
                'cuaca2' => $kota->item(32)->nodeValue,
                'suhu' => $kota->item(33)->nodeValue,
                'kelembaban' => $kota->item(34)->nodeValue
            );


            foreach ($data as $value) {
                $response["kota"] = $value['kota'];
                $response["waktu"] = "Malam";
                $response["cuaca"] = $value['cuaca'];
                $response["cuaca2"] = $value['cuaca2'];
                $response["suhu"] = $value['suhu'];
                $response["kelembaban"] = $value['kelembaban'];

            }
        } else if (strcasecmp($kota->item(36)->nodeValue, "jember") == 0) {
            $response["error"] = false;
            $data[] = array(
                'kota' => $kota->item(36)->nodeValue,
                'cuaca' => $kota->item(37)->nodeValue,
                'cuaca2' => $kota->item(38)->nodeValue,
                'cuaca3' => $kota->item(39)->nodeValue,
                'suhu' => $kota->item(40)->nodeValue,
                'kelembaban' => $kota->item(41)->nodeValue
            );


            foreach ($data as $value) {
                $response["kota"] = $value['kota'];
                $response["waktu"] = "Siang";
                $response["cuaca"] = $value['cuaca'];
                $response["cuaca2"] = $value['cuaca2'];
                $response["cuaca3"] = $value['cuaca3'];
                $response["suhu"] = $value['suhu'];
                $response["kelembaban"] = $value['kelembaban'];

            }
        } else if (strcasecmp($kota->item(42)->nodeValue, "jember") == 0) {
            $response["error"] = false;
            $data[] = array(
                'kota' => $kota->item(42)->nodeValue,
                'cuaca' => $kota->item(43)->nodeValue,
                'cuaca2' => $kota->item(44)->nodeValue,
                'cuaca3' => $kota->item(45)->nodeValue,
                'cuaca4' => $kota->item(46)->nodeValue,
                'suhu' => $kota->item(47)->nodeValue,
                'kelembaban' => $kota->item(48)->nodeValue
            );


            foreach ($data as $value) {
                $response["kota"] = $value['kota'];
                $response["waktu"] = "Pagi";
                $response["cuaca"] = $value['cuaca'];
                $response["cuaca2"] = $value['cuaca2'];
                $response["cuaca3"] = $value['cuaca3'];
                $response["cuaca4"] = $value['cuaca4'];
                $response["suhu"] = $value['suhu'];
                $response["kelembaban"] = $value['kelembaban'];

            }
        } else {
            echo json_encode($response["error"]);
        }


        echo json_encode($response);
    }
}
