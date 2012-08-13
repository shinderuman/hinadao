<?php
array_walk(range(1, 100), function($i) {echo $i % 15 != 0 ? $i % 5 != 0 ? $i % 3 != 0 ? '' : 'リンちゃん' : 'なう！！' : 'リンちゃんなう！！！';});
