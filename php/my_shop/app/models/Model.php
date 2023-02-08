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
            if ($column == 'id') {
                $posts[] = $this->nextId();
            } else if (array_key_exists($column, $data)) {
                $posts[] = $data[$column];
            } else {
                $posts[] = '';
            }
        }
        $file = fopen($this->csv_file, 'a+');
        fputcsv($file, $posts);
        fclose($file);
    }

    public function all()
    {
        if (file_exists($this->csv_file)) {
            $values = loadCSV($this->csv_file);
            return $values;
        }
    }

    public function find(int $id)
    {
        $values = $this->all();
        $ids = array_column($values, 'id');
        $index = array_search($id, $ids);
        if (is_int($index)) {
            return $values[$index];
        }
    }

    public function nextId()
    {
        $id = 0;
        if ($values = $this->all()) {
            $ids = array_column($values, 'id');
            $id = max($ids);
        }
        return $id + 1;
    }
}