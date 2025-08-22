<?php

namespace App\Filament\Pages\Settings;

use App\Enums\NavGroups;
use App\Enums\Permissions\SystemPermissions;
use App\Settings\SystemSettings;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use ToneGabes\Filament\Icons\Enums\Phosphor;

class ManageSystem extends SettingsPage
{
    protected static string $settings = SystemSettings::class;

    protected static string|BackedEnum|null $navigationIcon = Phosphor::FadersHorizontal;

    protected static ?string $navigationLabel = 'Sistema';

    protected ?string $heading = 'Configurações do Sistema';

    public static function getNavigationGroup(): string
    {
        return NavGroups::Settings->value;
    }

    public static function canAccess(): bool
    {
        return true;
        // return auth()->user()->can(SystemPermissions::SystemSettingsManage);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make()->schema([
                    TextInput::make('app_name')
                        ->label('Nome do Sistema')
                        ->helperText('Nome do sistema que será exibido no painel de controle.')
                        ->maxLength(255)
                        ->required(),
                ]),

                Section::make()->schema([
                    Toggle::make('enable_registration')
                        ->label('Habilitar Registro no Sistema')
                        ->helperText('Se habilitado, os usuários poderão se registrar no sistema.')
                        ->onIcon(Phosphor::Check)
                        ->offIcon(Phosphor::X)
                        ->inline(false)
                        ->required(),
                ]),
            ]);
    }
}
