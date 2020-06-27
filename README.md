## Install
```
composer install --no-dev
```

## Run
```
./vendor/bin/psalm --taint-analysis
```

## output
```
Scanning files...
Analyzing files...

░░

ERROR: TaintedInput - demo/test.php:7:33 - Detected tainted sql in path: bad_data-demo/test.php:181 (demo/test.php:11:26) -> call to PDOWrapper::exec (demo/test.php:11:26) -> PDOWrapper::exec#1 (demo/test.php:7:33) (see https://psalm.dev/205)
    public function exec(string $sql) : void {}


ERROR: TaintedInput - demo/xss.php:12:9 - Detected tainted html in path: $_GET -> $_GET['name'] (demo/xss.php:4:12) -> getname (demo/xss.php:8:23) -> concat (demo/xss.php:8:12) -> sayhello (demo/xss.php:12:9) -> call to echo (demo/xss.php:12:9) -> echo#1 (see https://psalm.dev/205)
<h1><?= sayHello()


------------------------------
2 errors found
------------------------------

Checks took 9.13 seconds and used 54.768MB of memory
Psalm was able to infer types for 85.7143% of the codebase
```