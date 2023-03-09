<?php
// jee
for ($i = 0; $i < 30; $i += 1) {
  echo $i . ': ' . date('c');
  sleep (3);
  echo PHP_EOL;
}
exit(0);

