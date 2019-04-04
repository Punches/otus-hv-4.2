# Declination by number

### Usage

```php
<?
    use Otus\Lessons\Lesson4\DeclinerNumbers;
    
    $example = new DeclinerNumbers;
    $cows = 33;
    
    echo sprintf('%d %s%s', $cows, $example->declinNumber($cows, "корова", "коровы", "коров"), PHP_EOL);
```