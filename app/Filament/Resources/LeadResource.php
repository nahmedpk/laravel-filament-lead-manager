<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadResource\Pages;
use App\Filament\Resources\LeadResource\RelationManagers;
use App\Plugins\LeadManager\Models\Lead;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function form(Forms\Form $form): Forms\Form
	{
	    return $form
	        ->schema([
	            Forms\Components\TextInput::make('name')
	                ->required()
	                ->maxLength(255),
	            Forms\Components\TextInput::make('email')
	                ->required()
	                ->email()
	                ->maxLength(255),
	            Forms\Components\Select::make('status')
	                ->required()
	                ->options([
	                    'new' => 'New',
	                    'contacted' => 'Contacted',
	                    'closed' => 'Closed',
	                ])
	                ->default('new'),
	        ]);
	}


	public static function table(Tables\Table $table): Tables\Table
	{
		return $table
			->columns([
				Tables\Columns\TextColumn::make('id')->sortable(),
				Tables\Columns\TextColumn::make('name')->searchable(),
				Tables\Columns\TextColumn::make('email')->searchable(),
				Tables\Columns\BadgeColumn::make('status')
					->colors([
						'primary' => 'new',
						'success' => 'contacted',
						'danger' => 'closed',
					]),
				Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
				Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
			])
			->filters([
				Tables\Filters\SelectFilter::make('status')
					->options([
						'new' => 'New',
						'contacted' => 'Contacted',
						'closed' => 'Closed',
					]),
			])
			->actions([
				Tables\Actions\EditAction::make(),
			])
			->bulkActions([
				Tables\Actions\DeleteBulkAction::make(),
			]);
	}


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLeads::route('/'),
            'create' => Pages\CreateLead::route('/create'),
            'edit' => Pages\EditLead::route('/{record}/edit'),
        ];
    }
}
