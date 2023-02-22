<?php

declare(strict_types=1);

namespace App\Enums;

enum AccountType: string
{
    case Employer = 'employer';

    case JobSeeker = 'job_seeker';

    public function label(): string
    {
        return match ($this) {
            self::Employer => 'Nhà tuyển dụng',
            self::JobSeeker => 'Ứng viên',
        };
    }
}
