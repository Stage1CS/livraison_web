@foreach ($z as $zone)      
    {{$zone -> id_zone}} 
    {{$zone -> nom_zone}} 
@endforeach

<select  name="zone" placeholder="zone"> <br></br>
    <option value="{{$zone -> id_zone}}"> </option>
    <option value="{{$zone -> nom_zone}}"> </option>
</select>