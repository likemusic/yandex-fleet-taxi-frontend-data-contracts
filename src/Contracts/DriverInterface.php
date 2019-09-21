<?php

namespace Likemusic\YandexFleetTaxi\FrontendData\Contracts;


interface DriverInterface
{
    const WORK_PHONE = 'driver_work_phone';
    const WHATSAPP_PHONE = 'driver_whatsapp_phone';
    const WORK_CITY = 'driver_work_city';
    const WORK_TIMEZONE = 'driver_work_timezone';

    const FIRST_NAME = 'driver_first_name';
    const LAST_NAME = 'driver_last_name';
    const MIDDLE_NAME = 'driver_middle_name';
    const BIRTH_DATE = 'driver_birth_date';
}
