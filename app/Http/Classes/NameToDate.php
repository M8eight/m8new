<?php

namespace App\Http\Classes;

class NameToDate
{
    private $days;
    private $month;
    private $hours;

    public function __construct($days, $month, $hours)
    {
        $this->days = $days;
        $this->month = $month;
        $this->hour = $hours;
    }
    public function sayDay()
    {
        switch (true) {

            case $this->days == 1:
                return "день";
                break;
            case ($this->days >= 2 && $this->days <= 4):
                return "дня";
                break;
            case ($this->days >= 5 && $this->days <= 20):
                return "дней";
                break;
            case $this->days == 21:
                return "день";
                break;
            case ($this->days >= 22 && $this->days <= 24):
                return "дня";
                break;
            case ($this->days >= 25 && $this->days <= 30):
                return "дней";
                break;
            case ($this->days == 31):
                return "день";
                break;
            default:
                return "ошибки в расчетах дни";
                break;
        }
    }
    public function sayMonth()
    {
        switch (true) {
            case $this->month == 1:
                return "месяц";
                break;
            case ($this->month >= 2 && $this->month <= 4):
                return "месяца";
                break;
            case ($this->month >= 5 && $this->month <= 12):
                return "месяцев";
                break;
            default:
                return "месяц";
                break;
        }
    }

    public function sayHours()
    {
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
    }
}
