<?php
for ($i = 0; $i < 20; $i += 1) {
  echo $i . ': ' . date('c');
  sleep (6);
  echo PHP_EOL;
}
exit(0);

