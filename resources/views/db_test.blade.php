<h2>DB TEST</h2>
{{-- {{print_r($commerce_data)}} --}}
{{-- Array ( [0] => stdClass Object ( [id] => 1 [name] => Arfan [city] => Dhaka [phone] => 41003235 ) ) 1 --}}

{{-- {{$commerce_data['0']->id}} --}}
@foreach ($commerce_data as $single_data)
    {{$single_data->id}} <br>
    {{$single_data->name}} <br>
    {{$single_data->city}} <br>
    {{$single_data->phone}} <br>
@endforeach

{{dd($commerce_data)}}

