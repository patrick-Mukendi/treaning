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
    private string $jsonFile  =  "json_files/data.json";
    
    /* public function creat()
    {  
        $destinationFile = "json_files";
        $nameFile = "data.json";
        $open = fopen('../'.$destinationFile.$nameFile,'w+');
        fclose($open);

        return $open;
    }
    */
    public function getRows(): bool | array
    {
        if ( file_exists ($this -> jsonFile) && !empty($this -> jsonFile)) 
        {
            $data = json_decode(file_get_contents($this->jsonFile), true);

            if (!empty($data)) 
            {
                usort($data, function ($b, $a) 
                {
                    return $b['id'] - $a['id'];
                });
            }
            return !empty($data) ? $data : false;
        }
        return false;
    }

    public function getSingle(string $id): string | null
    {
        $jsonData = file_get_contents($this->jsonFile);
        $data = json_decode($jsonData, true);

        $singleData = array_filter(
        $data, function ($var) use ($id) 
        {
            return (!empty($var['id']) && $var['id'] == $id);
        }
        );

        $singleData = array_values($singleData)[0];
        return !empty($singleData) ? $singleData : false;
    }

    public function insert(array $newData): bool
    {
        if (!empty($newData)) {
            $id = 1;
         
            $jsonData = file_get_contents($this->jsonFile);
            $data = json_decode($jsonData, true);
            $data = !empty($data) ? array_filter($data) : $data;

            if (!empty($data)) {
                $id = count($data) + 1;
                $newData['id'] = $id;
                array_push($data, $newData);
            } else {
                $newData['id'] = $id;
                $data[] = $newData;
            }
            $insert = file_put_contents($this->jsonFile, json_encode($data));
            return $insert ? $id : false;
        }
        return false;
    }

    public function update(array $upData, string $id)
    {
        if (!empty($upData) && is_array($upData) && !empty($id)) {
            $jsonData = file_get_contents($this->jsonFile);
            $data = json_decode($jsonData, true);

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
            $update = file_put_contents($this->jsonFile, json_encode($data));
            return $update ? true : false;
        }
        return false;
    }

    public function delete(int $id)
    {
        $jsonData = file_get_contents($this->jsonFile);
        $data = json_decode($jsonData, true);

        $newData = array_filter($data, function ($var) use ($id) {
            return ($var['id'] != $id);
        });
        $delete = file_put_contents($this->jsonFile, json_encode($newData));
        return $delete ? true : false;
    }
}