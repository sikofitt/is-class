# is-class

This program simply does one thing.

It creates a function ```is_class``` to go along with the many other 'is' functions.

`is_object` exists although it will return `true` if you execute `is_object(new \stdClass())` to me that seems like unexpected behavior.  When somebody wants to find out if something is a class, they are usually not testing `\stdClass`.

`is_a` exists, but you need to know the name of the class in question.  You simply can't call `is_a($class);`.

This function can be called as `is_class($class)`, which will return `true` for `interfaces` or `traits`.
The second way is `is_class($class, true)`, where true means strict, which will return `false` if anything is an `interface` or `trait`.

The function always returns false for `\stdClass`, you can use `is_object` for that.

## Tests

`phpunit`

