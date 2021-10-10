<?php

namespace App\Http\Controllers;

use App\Http\Classes\NameToDate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TimerController extends Controller
{
    private $day;
    private $month;
    private $hours;

    public function __construct()
    {
        $date_mass = getdate();

        $day = 25;
        $month = 5;
        $hours = 12;

        $result_mass = array();

        $result_mass['day'] = $day - $date_mass['mday'];
        $result_mass['month'] = $month - $date_mass['mon'];
        $result_mass['hour'] = $hours - $date_mass['hours'];
        $result_mass['year'] = $date_mass['year'] - $date_mass['year'] + 1;
        $result_mass['monthW'] = $date_mass['month'];


        if ($result_mass['hour'] <= 0) {
            $result_mass['hour'] += 24;
            $result_mass['day'] = $result_mass['day'] - 1;
        }

        if ($result_mass['day'] < 0) {

            switch ($result_mass['monthW']) {
                case 'January':
                    $result_mass['day'] += 31;
                    break;
                case 'February':
                    $result_mass['day'] += 28;
                    break;
                case 'March':
                    $result_mass['day'] += 31;
                    break;
                case 'April':
                    $result_mass['day'] += 30;
                    break;
                case 'May':
                    $result_mass['day'] += 31;
                    break;
                case 'June':
                    $result_mass['day'] += 30;
                    break;
                case 'July':
                    $result_mass['day'] += 31;
                    break;
                case 'August':
                    $result_mass['day'] += 31;
                    break;
                case 'September':
                    $result_mass['day'] += 30;
                    break;
                case 'October':
                    $result_mass['day'] += 31;
                    break;
                case 'November':
                    $result_mass['day'] += 30;
                    break;
                case 'December':
                    $result_mass['day'] += 31;
                    break;
            }
            $result_mass['month']--;
        }

        if ($result_mass['month'] <= 0) {
            $result_mass['month'] += 12;
            $result_mass['year']--;
        }

        $this->day = $result_mass['day'];
        $this->month = $result_mass['month'];
        $this->hour = $result_mass['hour'];
        $this->year = $result_mass['year'];
    }

    public function logic()
    {
        $date_mass = getdate();

        $day = 25;
        $month = 5;
        $hours = 12;

        $result_mass = array();

        $result_mass['day'] = $day - $date_mass['mday'];
        $result_mass['month'] = $month - $date_mass['mon'];
        $result_mass['hour'] = $hours - $date_mass['hours'];
        $result_mass['year'] = $date_mass['year'] - $date_mass['year'] + 1;
        $result_mass['monthW'] = $date_mass['month'];


        if ($result_mass['hour'] <= 0) {
            $result_mass['hour'] += 24;
            $result_mass['day'] = $result_mass['day'] - 1;
        }

        if ($result_mass['day'] < 0) {

            switch ($result_mass['monthW']) {
                case 'January':
                    $result_mass['day'] += 31;
                    break;
                case 'February':
                    $result_mass['day'] += 28;
                    break;
                case 'March':
                    $result_mass['day'] += 31;
                    break;
                case 'April':
                    $result_mass['day'] += 30;
                    break;
                case 'May':
                    $result_mass['day'] += 31;
                    break;
                case 'June':
                    $result_mass['day'] += 30;
                    break;
                case 'July':
                    $result_mass['day'] += 31;
                    break;
                case 'August':
                    $result_mass['day'] += 31;
                    break;
                case 'September':
                    $result_mass['day'] += 30;
                    break;
                case 'October':
                    $result_mass['day'] += 31;
                    break;
                case 'November':
                    $result_mass['day'] += 30;
                    break;
                case 'December':
                    $result_mass['day'] += 31;
                    break;
            }
            $result_mass['month']--;
        }

        if ($result_mass['month'] <= 0) {
            $result_mass['month'] += 12;
            $result_mass['year']--;
        }

        unset($result_mass['monthW']);
        return $result_mass;
    }

    public function sayDay()
    {
        $date = $this->logic();

        $sayDay = null;

        switch (true) {

            case $date == 1:
                $sayDay = "день";
                break;
            case ($this->day >= 2 && $this->day <= 4):
                $sayDay = "дня";
                break;
            case ($this->day >= 5 && $this->day <= 20):
                $sayDay = "дней";
                break;
            case $this->day == 21:
                $sayDay = "день";
                break;
            case ($this->day >= 22 && $this->day <= 24):
                $sayDay = "дня";
                break;
            case ($this->day >= 25 && $this->day <= 30):
                $sayDay = "дней";
                break;
            case ($this->day == 31):
                $sayDay = "день";
                break;
            default:
                $sayDay = "день";
                break;
        }

        return $sayDay;
    }

    public function sayMonth()
    {
        $sayMonth = null;

        switch (true) {
            case $this->month == 1:
                $sayMonth = "месяц";
                break;
            case ($this->month >= 2 && $this->month <= 4):
                $sayMonth = "месяца";
                break;
            case ($this->month >= 5 && $this->month <= 12):
                $sayMonth = "месяцев";
                break;
            default:
                $sayMonth = "месяц";
                break;
        }

        return $sayMonth;
    }

    public function sayHours()
    {
        $sayHour = null;

        switch (true) {
            case $this->hour == 1:
                return "час";
                break;
            case ($this->hour >= 2 && $this->hour <= 4):
                return "часа";
                break;
            case ($this->hour >= 5 && $this->hour <= 20):
                return "часов";
                break;
            case $this->hour == 21:
                return "час";
                break;
            case ($this->hour >= 22 && $this->hour <= 24):
                return "часа";
                break;
            default:
                return "ошибки в расчетах часы";
                break;
        }

        return $sayHour;
    }

    public function index()
    {
        $returnDate = $this->logic();
        $sayDay = $this->sayDay();
        $sayHour = $this->sayHours();
        $sayMonth = $this->sayMonth();
        return view('apps.timer', compact('returnDate', 'sayDay', 'sayHour', 'sayMonth'));
    }
}
