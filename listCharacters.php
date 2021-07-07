echo '<meta charset="utf-8">' . PHP_EOL;

echo "[";

for ($i = 3585; $i <= 3642; $i++) {
    echo "'";
	echo "&#{$i};";
    echo "'";
    echo ', ' . PHP_EOL;
}

for ($i = 3647; $i <= 3675; $i++) {
    echo "'";
	echo "&#{$i};";
    echo "'";
    if ($i < 3675) {
        echo ', ' . PHP_EOL;
    }
}

echo "]";
