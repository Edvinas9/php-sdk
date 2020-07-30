<?php

namespace LiveStyled\Sell;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class TimeslotClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/sell/timeslots';
    }
}