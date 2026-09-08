<?php

declare(strict_types=1);

namespace App\Enums;

enum IdeaStatus: string
{
    case PENDING = 'pending';
    case OPEN = 'open';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::OPEN => 'Open',
            self::IN_PROGRESS => 'In Progress',
            self::COMPLETED => 'Completed',
        };
    }
}
