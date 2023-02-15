<?php

$games = [
    "Fifa", "PES", "Final Fantasy", "Call of Duty",
];

$users = [
    [
        "lastname" => strtoupper("Guillon"),
        "firstname" => "Alain",
        "games" => [
            [ $games[0], 234 ],
            [ $games[1], 25  ],
            [ $games[2], 800 ]
        ]
    ],
    [
        "lastname" => strtoupper("Taguine"),
        "firstname" => "Tarek",
        "games" => [
            [ $games[3], 800 ],
            [ $games[0], 10  ],
        ]
    ]
];
