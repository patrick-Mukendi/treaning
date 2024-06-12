<?php
require_once 'HTMLElement.php';

<div>
<input type="radio" id="huey" name="drone" value="huey" checked />
<label for="huey">Huey</label>
</div>

class radio extends HTMLElement
{
    public function __construct (private string $name, private string $value, )
    {
        $this->name = $name;
        $this->value = $value;
    }

    private function fieldset(...,)


} 

