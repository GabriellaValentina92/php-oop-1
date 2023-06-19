<?php
include __DIR__ . '/Movies.php';

$japan = new Movies(
    'La città Incantata', 
    '千と千尋の神隠し',
    'Giappone',
    '2001',
    'Italiano',
    'Giapponese',
    'Hayao Miyazaki',
    'Animazione',
    '5/5',
);

$China = new Movies(
    'In the Mood for Love',
    '花样年华',
    'Hong Kong',
    '2000',
    'Inglese',
    'Cantonese/Cinese',
    'Wong Kar-wai',
    'drammativo/sentimentale',
    '5/5,'
);

$usa = new Movies(
    null,
    'The Rocky Horror Picture Show',
    'Regno Unito/U.S.A',
    '1975',
    'Italiano',
    'Inglese',
    'Richard O\'Brien',
    'musicale/commedia/orrore/fantascienza',
    '5/5',
);