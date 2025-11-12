<?php
namespace App\Filament\Resources;

use App\Models\Plugin;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Tables;
use App\Filament\Resources\PluginResource\Pages;

class PluginResource extends Resource
{
    protected static ?string $model = Plugin::class;
    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('namespace')->required(),
            Forms\Components\Toggle::make('enabled'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('namespace'),
            Tables\Columns\IconColumn::make('enabled')->boolean(),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ])->actions([
            Tables\Actions\EditAction::make(),
        ])->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
		return [
	        'index' => Pages\ListPlugins::route('/'),
	        'create' => Pages\CreatePlugin::route('/create'),
	        'edit' => Pages\EditPlugin::route('/{record}/edit'),
	    ];
    }
}
