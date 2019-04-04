# Declination by number

### Installation


```sh
$ git clone https://github.com/Punches/otus-hv-4.2.git
```

or 

```sh
$ composer require punches/otus-hv-4.2
```

### Usage

```php
<?
    use Otus\Lessons\Lesson4\DeclinerNumbers;
    
    $example = new DeclinerNumbers;
    $cows = 33;
    
    echo sprintf('%d %s%s', $cows, $example->declinNumber($cows, "корова", "коровы", "коров"), PHP_EOL);
```