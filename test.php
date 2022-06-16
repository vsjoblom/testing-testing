<?php
for ($i = 0; $i < 15; $i += 1) {
  echo $i . ': ' . date('c');
  sleep (2);
  echo PHP_EOL;
}
exit(0);

