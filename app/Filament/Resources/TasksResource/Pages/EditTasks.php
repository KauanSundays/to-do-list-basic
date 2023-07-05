<?php

namespace App\Filament\Resources\TasksResource\Pages;

use App\Filament\Resources\TasksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTasks extends EditRecord
{
    protected static string $resource = TasksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
