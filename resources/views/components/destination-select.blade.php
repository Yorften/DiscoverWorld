<select {{$attributes->merge(['class' => ''])}} name="destination" id="destinations" placeholder="Select a destination...">
    <option value="" selected hidden>Select a destination...</option>    
    {{$slot}}
</select>