<?php

$users = ["Jeff", "Yoann", "Matthieu", "Axel"];

echo !in_array('Axel', $users) ? 'cet ulisateur n\existe pas !' : array_search('Axel' , $users);


