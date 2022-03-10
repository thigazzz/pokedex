<?php
$pokemons = [];
$url = 'https://pokeapi.co/api/v2/pokemon/';
for ($index = 1; $index <= 151; $index++) {
    $data = json_decode(file_get_contents($url . $index));

    if (count($data->types) == 1) {
        $types = [$data->types[0]->type->name];
    } else {
        $types = [
            $data->types[0]->type->name,
            $data->types[1]->type->name
        ];
    }

    $pokemon = [
        "order" => $data->order,
        "name" => ucfirst($data->name),
        "sprite" => $data->sprites->front_default,
        "types" => $types
    ];
    array_push($pokemons, $pokemon);
}
return $pokemons;
