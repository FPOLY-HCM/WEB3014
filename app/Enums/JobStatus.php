<?php

declare(strict_types=1);

namespace App\Enums;

enum JobStatus: string
{
    case Pending = 'pending';

    case Accepted = 'published';

    case Rejected = 'rejected';

    public function label(): string
    {
        return match($this) {
            self::Pending => 'Chờ duyệt',
            self::Accepted => 'Đã duyệt',
            self::Rejected => 'Từ chối',
        };
    }
}