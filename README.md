php-code-downgrade
===

Tool to downgrade your PHP codebase from PHP 5.4+ to PHP 5.3. Built on top of
[galapagos](https://github.com/endel/galapagos).

Consider including
[php5.3-compatibility](https://github.com/packfire/php5.3-compatibility) package
in your project, which includes `JsonSerializable` and
`SessionHandlerInterface`.

You may have to manually fix some remaining problems, usually they're quite simple.

Why?
---

Use it when you have a PHP 5.4+ codebase and just can't upgrade your client's
infrastructure.

Features
---

- Convert new array syntax to old one. (`[1,2,3]` to `array(1,2,3)`)
- Inject traits code into classes that use them.
- Analyze every vendor's `composer.json` and convert them if it's needed
- Downgrade function calls with different signature.
  * `stream_context_create`
  * `session_set_save_handler`
- Custom node transformations

Usage
---

```
./php-code-downgrade [path-to-downgrade]
```

Using custom node transformations:

```
./php-code-downgrade [path-to-downgrade] -t transformations/phalanger
```

License
---

MIT
