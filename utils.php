<?php

$games = [
    "Fifa", "PES", "Final Fantasy", "Call of Duty", "Hogwarts Legacy", "Tekken", "Street Fighter", "Super Mario World", "Mario Kart"
];

$users = [
    [
        "lastname" => strtoupper("guillon"),
        "firstname" => ucfirst("alain"),
        "games" => [
            [$games[0], 534],
            [$games[1], 25],
            [$games[2], 886],
            [$games[4], 6],
            [$games[8], 88],
        ]
    ],
    [
        "lastname" => strtoupper("guillon"),
        "firstname" => ucfirst("marjorie"),
        "games" => [
            [
                $games[2],// indice 0 
                1300 // indice 1
            ],
            [$games[4], 26],
            [$games[7], 60],
            [$games[8], 235],
        ]
    ],
    [
        "lastname" => strtoupper("taguine"),
        "firstname" => ucfirst("tarek"),
        "games" => [
            [$games[3], 1242],
            [$games[7], 8],
            [$games[5], 655],
            [$games[6], 486],
        ]
    ]
];

function badgeColor($hour): string
{
    $color = "";
    if ($hour < 50) {
        $color = "success";
    } elseif ($hour >= 50 && $hour <= 100) {
        $color = "warning";
    } elseif ($hour > 100) {
        $color = "danger";
    }
    return $color;
};
