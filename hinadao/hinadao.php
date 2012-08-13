<?php
echo implode(PHP_EOL, array_map(create_function('$i', 'return $i % 15 != 0 ? $i % 5 != 0 ? $i % 3 != 0 ? $i : "ひな" : "だお" : "ひなだお";'), range(1, 100)));
