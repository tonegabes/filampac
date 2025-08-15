<?php

declare(strict_types=1);

namespace App\Traits;

use Filament\Notifications\Notification;

/**
 * Trait for adding notification helper methods to classes.
 *
 * This trait provides convenient methods for sending Filament notifications
 * with consistent styling and behavior throughout the application.
 */
trait HasNotifications
{
    /**
     * Envia uma notificação simples.
     */
    public function notify(string $message, string $status = 'info'): void
    {
        Notification::make()
            ->title($message)
            ->status($status)
            ->send()
        ;
    }

    /**
     * Envia uma notificação de sucesso.
     */
    public function notifySuccess(string $message): void
    {
        Notification::make()
            ->title($message)
            ->success()
            ->send()
        ;
    }

    /**
     * Envia uma notificação de atenção.
     */
    public function notifyWarning(string $message): void
    {
        Notification::make()
            ->title($message)
            ->warning()
            ->send()
        ;
    }

    /**
     * Envia uma notificação de informação.
     */
    public function notifyInfo(string $message): void
    {
        Notification::make()
            ->title($message)
            ->info()
            ->send()
        ;
    }

    /**
     * Envia uma notificação de erro.
     */
    public function notifyError(string $message): void
    {
        Notification::make()
            ->title($message)
            ->danger()
            ->send()
        ;
    }

    /**
     * Envia uma notificação de erro com suporte a exceções.
     */
    public function notifyException(\Throwable $exception): void
    {
        Notification::make()
            ->title('Um erro ocorreu!')
            ->body($exception->getMessage())
            ->danger()
            ->send()
        ;
    }
}
