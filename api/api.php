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
        "id" => $data->id,
        "name" => ucfirst($data->name),
        "sprite" => $data->sprites->front_default,
        "types" => $types,
        "height" => $data->height,
        "weight" => $data->weight,
        "base_experience" => $data->base_experience
    ];
    array_push($pokemons, $pokemon);
}
return $pokemons;
