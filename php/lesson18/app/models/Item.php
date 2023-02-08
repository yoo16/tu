<?php 
class Item extends Model
{
    public array $columns = ['id', 'name', 'price'];
    public string $csv_file = DATA_DIR . 'items.csv';
}
