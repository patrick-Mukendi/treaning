<?php
abstract class HTMLElement{

    protected function button()
    {
        return 'Button';
    }
	
    protected function input()
    {
        return 'input';
    }
	
    protected function textarea()
    {
        return 'Textarea';
    }

    protected function checkbox()
    {
        return 'checkbox';
    }

    protected function radio(string $name, string $value, string $label, string $checked = "")
    {
        return "radio";
    }
   /* <button class="favorite styled" type="button">Add to favorites</button>
    <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10" />
     
    <select name="pets" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
    </select>

    <div>
    <input type="checkbox" id="scales" name="scales" checked />
    <label for="scales">Scales</label>
  </div>

  
  <div>
    <input type="radio" id="huey" name="drone" value="huey" checked />
    <label for="huey">Huey</label>
  </div>


  <textarea id="story" name="story" rows="5" cols="33">
It was a dark and stormy night...
</textarea>
*/




}