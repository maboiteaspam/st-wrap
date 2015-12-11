# Standard Wrapper Interface for PHP

Tiny little interface to wrap data.

```php
interface WrapperInterface
{
    /**
     * Wraps data,
     * if some data is already wrapped,
     * replace it and return true.
     * false otherwise.
     * @param $data
     * @return bool
     */
    public function wrap($data);

    /**
     * True if any data has been
     * wrapped at least once.
     * @return bool
     */
    public function hasData();

    /**
     * Return the inner data.
     * @return mixed
     */
    public function unwrap();
}
```

## Install

The recommended way to install Component is through composer.

```json
{

  "minimum-stability": "dev",
  "require": {
    "php": ">=5.5.0",
    "st/wrap": "v1.0.1"
  },
  "repositories": [
    {
      "type": "git",
      "url": "git@github.com:maboiteaspam/st-wrap.git"
    }
  ]
}

```

# see also

A concrete standard implementation to consume in your projects

- https://github.com/maboiteaspam/im-wrap
