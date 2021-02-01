<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Google\Client;
use Google\Service\You_Tube_Analytics;

class AnalyticsController extends Controller
{
    public function analytics()
    {
        echo "thingy";

        $client = new \Google\Client();
        $client->setDeveloperKey("AIzaSyB4uIzr2xKw_H1bOTUqVIRPsL-0RTl8Qb4");

        $client->addScope(\Google_Service_YouTubeAnalytics::YT_ANALYTICS_READONLY);
        $client->setAccessToken( "" );

        $youtube = new \Google_Service_YouTubeAnalytics($client);

        $resp = $youtube->reports->query(
            'UCpez8ZFgvf6mP27QiB4sLqQ',
            '2020-01-01',
            '2021-01-01',
            'views,uniques'
        );



        dd( $youtube );

        $API_key    = 'AIzaSyB4uIzr2xKw_H1bOTUqVIRPsL-0RTl8Qb4';

        $channelID  = 'UCpez8ZFgvf6mP27QiB4sLqQ';

        $maxResults = 10;

        $videoList = file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=" . $channelID . "&maxResults=" . $maxResults . "&key=" . $API_key );

        dd( $videoList );
    }
}
