<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiTestController extends Controller
{


    public function weather()
    {
        $url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=130010"; // 東京
        $obj = $this->api_request($url);

        $today_telop = $obj['forecasts'][0]['telop']; // 今日の天気

        return $today_telop;
    }

    public function youtube()
    {
        // youtube api 使い方
        // https://www.d2c-smile.com/201611018039

        $api_key = env('YOUTUBE_API_KEY');
        $channel_id = "UCD-miitqNY3nyukJ4Fnf4_A"; // 月ノ美兎

        $url = "https://www.googleapis.com/youtube/v3/channels?part=statistics&id=".$channel_id."&key=".$api_key;
        $obj = $this->api_request($url);

        return $obj['items'][0]['statistics']['viewCount']; // チャンネルの視聴回数
    }

    function api_request($url)
    {
        // curlでAPIをたたく
        // https://qiita.com/shinkuFencer/items/d7546c8cbf3bbe86dab8

        $option = [
            CURLOPT_RETURNTRANSFER => true, //文字列として返す
            CURLOPT_TIMEOUT        => 3, // タイムアウト時間
        ];

        $ch = curl_init($url);
        curl_setopt_array($ch, $option);

        $json    = curl_exec($ch);
        $info    = curl_getinfo($ch);
        $errorNo = curl_errno($ch);

        // OK以外はエラーなので空白配列を返す
        if ($errorNo !== CURLE_OK) {
            // 詳しくエラーハンドリングしたい場合はerrorNoで確認
            // タイムアウトの場合はCURLE_OPERATION_TIMEDOUT
            return [];
        }

        // 200以外のステータスコードは失敗とみなし空配列を返す
        if ($info['http_code'] !== 200) {
            return [];
        }

        // デコード
        $obj = json_decode($json, true);

        return $obj;
    }
}
