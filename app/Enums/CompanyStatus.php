<?php

declare(strict_types=1);

namespace App\Enums;

enum CompanyStatus: string
{
    case Active = 'active';

    case Inactive = 'inactive';

    case Pending = 'pending';

    case Suspended = 'suspended';
}