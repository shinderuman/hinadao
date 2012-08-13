<?php
echo implode('', array_map(function($i) {return $i % 15 != 0 ? $i % 5 != 0 ? $i % 3 != 0 ? '' : 'リンちゃん' : 'なう！！' : 'リンちゃんなう！！！';}, range(1, 100)));
