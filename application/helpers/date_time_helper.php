<?php

if (!function_exists('get_current_date_time')) {
    /*
     * gives the total time worked through out the day.
     */

    class MyTime {

        var $day;
        var $month;
        var $year;
        var $hour;
        var $minute;
        var $second;

        function get_time_for_db() {
            return $this->hour . ':' . $this->minute . ':' . $this->second;
        }

        function get_date_for_db() {
            return $this->year . '-' . $this->month . '-' . $this->day;
        }

        function get_date_time_for_db() {
            return $this->get_date_for_db() . ' ' . $this->get_time_for_db();
        }

        function get_date_time() {
            return $this->day . "-" . $this->month . "-" . $this->year . " " . $this->hour . ":" . $this->minute . ":" . $this->second;
        }

    }

    function get_current_date_time() {
        $timezone = get_time_zone();
        $daylight = get_daylight_setting();
        $timestamp = strtotime($daylight . ' hour', now());

        $mytime = new MyTime();

        $mytime->day = date('d', gmt_to_local($timestamp, $timezone));
        $mytime->month = date('m', gmt_to_local($timestamp, $timezone));
        $mytime->year = date('Y', gmt_to_local($timestamp, $timezone));
        $mytime->hour = date('H', gmt_to_local($timestamp, $timezone));
        $mytime->minute = date('i', gmt_to_local($timestamp, $timezone));
        $mytime->second = date('s', gmt_to_local($timestamp, $timezone));

        return $mytime;
    }

}

if (!function_exists('get_time_zone')) {

    function get_time_zone() {
        $timeZone = 'UP55';
        return $timeZone;
    }

}

if (!function_exists('get_daylight_setting')) {

    function get_daylight_setting() {
        $daylight = 0;
        return $daylight;
    }

}

if (!function_exists('myPersonalEncrypt')) {

    function myPersonalEncrypt($string, $key) {
        $result = '';
        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key)) - 1, 1);
            $char = chr(ord($char) + ord($keychar));
            $result.=$char;
        }
        return base64_encode($result);
    }

}