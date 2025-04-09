<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\Select::make('showprice')
                    ->options([
                        'Y' => 'Yes',
                        'N' => 'No',
                    ])
                    ->default('N')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                    FileUpload::make('images') // Campo para cargar imágenes
                    ->label('Product Images')
                    ->multiple() // Permite cargar varias imágenes a la vez
                    ->image() // Asegura que solo se carguen archivos de imagen
                    ->directory('products/images') // Carpeta donde se guardarán las imágenes
                    ->preserveFilenames() // Opcional: Conserva los nombres originales de los archivos
                    ->maxFiles(10) // Límite de imágenes (opcional)
                    ->reorderable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('images.image')
                ->label('Imagen')
                ->getStateUsing(function ($record) {
                    // Obtener la primera imagen del producto
                    return $record->images->first()?->image;
                }),
                Tables\Columns\TextColumn::make('code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    

    public static function afterUpdate(Model $record, array $data): void
    {
        // Guardar las imágenes después de actualizar el producto
        if (isset($data['images'])) {
            foreach ($data['images'] as $image) {
                $record->images()->create([
                    'product_id' => 1,
                    'image' => $image,
                    'is_main' => false, // Por defecto, no es la imagen principal
                ]);
            }
        }
    }
}
