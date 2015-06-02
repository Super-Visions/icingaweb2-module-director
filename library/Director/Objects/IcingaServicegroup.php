<?php

namespace Icinga\Module\Director\Objects;

class IcingaServicegroup extends IcingaObject
{
    protected $table = 'icinga_servicegroup';

    protected $defaultProperties = array(
        'id'                    => null,
        'object_name'           => null,
        'display_name'          => null,
        'object_type'           => null,
    );
}
