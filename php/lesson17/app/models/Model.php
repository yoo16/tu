<?php

class Model
{
    public array $columns = [];
    public array $errors = [];
    public string $csv_file;

    function initColumns()
    {
        if (!file_exists($this->csv_file)) {
            $file = fopen($this->csv_file, 'w');
            fputcsv($file, $this->columns);
            fclose($file);
        }
    }

    function save(array $data)
    {
        $this->initColumns();
        foreach ($this->columns as $column) {
            if (array_key_exists($column, $data)) {
                $posts[] = $data[$column];
            } else {
                $posts[] = '';
            }
        }
        $file = fopen($this->csv_file, 'a+');
        fputcsv($file, $posts);
        fclose($file);
    }
}
