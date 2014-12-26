php-code-downgrade
===

Tool to downgrade your PHP codebase from PHP 5.4+ to PHP 5.3.

Why?
---

Use it when you have a PHP 5.4+ codebase and just can't upgrade your client's
infrastructure.

Features
---

- Convert new array syntax to old one.
- Inject traits code into classes that use them.
- Analyze every vendor's `composer.json` and convert them if it's needed

Usage
---

```
./php-code-downgrade [path-to-downgrade]
```

License
---

MIT
