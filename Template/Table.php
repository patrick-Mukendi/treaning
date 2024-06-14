<?php
// Utilisation
thead>
    <tr>
      <th scope="col">Person</th>
      <th scope="col">Most interest in</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chris</th>
      <td>HTML tables</td>
      <td>22</td>
    </tr>
$table = new Table( ['Name', 'Age', 'City'], [ ['Alice', 30, 'New York'], ['Bob', 25, 'Los Angeles'] ] ); 

echo $table->render();

require_once 'Interface/Render.php';
class Table implements Render
{
    private array $head;
    private array $body;

    public function __construct(array $head = [], array $body = [])
    {
        $this->head = $head;
        $this->body = $body;
    }
	
    private function header()
    {
        $header = '';
        for(int $i = 0; $i < count($this->head); $i++)
        {
            $header .= sprintf('<th scope="col">%s</th>',$this->head[$i]);
        }
        return $header;
    }
    private function body()
    {
        $header = '';
        for(int $i = 0; $i < count($this->head); $i++)
        {
            $header .= sprintf('<th scope="col">%s</th>',$this->head[$i]);
        }
        return $header;
    }


}
?>


<thead>
    <tr>
      <th scope="col">Person</th>
      <th scope="col">Most interest in</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chris</th>
      <td>HTML tables</td>
      <td>22</td>
    </tr>
    <tr>
      <th scope="row">Dennis</th>
      <td>Web accessibility</td>
      <td>45</td>
    </tr>
    <tr>
      <th scope="row">Sarah</th>
      <td>JavaScript frameworks</td>
      <td>29</td>
    </tr>
    <tr>
      <th scope="row">Karen</th>
      <td>Web performance</td>
      <td>36</td>
    </tr>
  </tbody>