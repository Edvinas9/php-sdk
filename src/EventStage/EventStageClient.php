<?php

namespace LiveStyled\EventStages;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class EventStageClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/event_stages';
    }
}
