<?php

namespace Contact\Class;

/*
 * File Handler
 * Cette classe fait les operations sur le fichier Json
 * @author    Patrick Mukendi
 * @url        http://github
 */
class FileHandler
{
    private string $jsonFile = 'json_files/data.json';

    public function getRows(): bool|array
    {
        if (file_exists($this->jsonFile)) {
            $jsonData = file_get_contents($this->jsonFile);
            $data = $jsonData ? (array) json_decode($jsonData, true) : '';

            if (!empty($data) && is_array($data)) {
                usort($data, function ($b, $a) {
                    return $b['id'] - $a['id'];
                });
            }

            return !empty($data) ? (array) $data : false;
        }

        return false;
    }

    public function getSingle(int $id): array|bool
    {
        $jsonData = file_get_contents($this->jsonFile);
        $data = $jsonData ? json_decode($jsonData, true) : false;

        if (is_array($data)) {
            $singleData = array_filter($data, function ($var) use ($id) {
                return is_array($var) ? (!empty($var['id']) && $var['id'] == $id) : false;
            });
            $newSingleData = array_values($singleData)[0];

            return $newSingleData;
        }

        return false;
    }

    public function insert(array $newData): int|bool
    {
        if (!empty($newData)) {
            $id = 0;
            $jsonData = (string) file_get_contents($this->jsonFile);
            $data1 = json_decode($jsonData, true) ? (array) json_decode($jsonData, true) : '';
            $data = !empty($data1) ? array_filter($data1) : $data1;

            if (!empty($data) && is_array($data)) {
                $id = count($data) + 1;
                $newData['id'] = $id;
                array_push($data, $newData);
            } else {
                $newData['id'] = $id;
                $data = is_array($data) ? $newData : $data;
            }
            $insert = file_put_contents($this->jsonFile, json_encode($data));

            return $insert ? $id : false;
        }

        return false;
    }

    public function update(array $upData, int $id): bool
    {
        $Newdata = [];
        if (!empty($upData) && is_array($upData) && !empty($id)) {
            $jsonData = file_get_contents($this->jsonFile);
            $data = $jsonData ? json_decode($jsonData, true) : '';

            if (!empty($data)) {
                $Newdata = $this->setUpdate((array) $data, $upData, $id);
            }

            $update = file_put_contents($this->jsonFile, json_encode($Newdata));

            return $update ? true : false;
        }

        return false;
    }

    private function setUpdate(array $data, array $upData, int $id): array
    {
        foreach ($data as $key => $value) {
            if ($value['id'] == $id) {
                if (isset($upData['name'])) {
                    $data[$key]['name'] = $upData['name'];
                }
                if (isset($upData['email'])) {
                    $data[$key]['email'] = $upData['email'];
                }
                if (isset($upData['phone'])) {
                    $data[$key]['phone'] = $upData['phone'];
                }
            }
        }

        return (array) $data;
    }

    public function delete(int $id): bool
    {
        $jsonData = file_get_contents($this->jsonFile);
        $data = $jsonData ? json_decode($jsonData, true) : '';

        if (is_array($data)) {
            $newData = array_filter($data, function ($var) use ($id) {
                return $var['id'] != $id;
            });

            return file_put_contents($this->jsonFile, json_encode($newData)) ? true : false;
        }

        return false;
    }
}
