<?php

declare(strict_types=1);

namespace App\Enums;

enum AccountType: string
{
    case Employer = 'employer';

    case JobSeeker = 'job_seeker';
}