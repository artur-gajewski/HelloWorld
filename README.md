# HelloWorld module for Zend Framework 2

This is a simple example of how to create a reusable service module along with it's own configuration.

See [https://github.com/artur-gajewski/HelloWorld](https://github.com/artur-gajewski/HelloWorld)

@Author: Artur Gajewski


## Installation

Go to your vendor directory and clone the module from Github:

```php
git clone https://github.com/artur-gajewski/HelloWorld
```

Then add 'HelloWorld' into the Module array in APPLICATION_ROOT/config/application.config.php

```php
<?php
return array(
    'modules' => array(
        ...
        'HelloWorld',
        ...
    ),
);
```


## Configuration

The HelloWorld module includes its own configuration in HelloWorld/config/module.config.php, but you should never touch any configurations found in modules installed under vendor directory.

Instead, if you want to override any configuration parameters provided with HelloWorld module, you should create a new configuration file APPLICATION_ROOT/config/autoload/HelloWorld.global.php

```php
<?php
return array(
    'HelloWorld' => array(
        'params' => array(
            'prefix' => 'Witaj',
        ),
    ),
);
```

This will override prefix from the default 'Hello' to 'Witaj' which is hello in Polish.


## Accessing HelloWorld from a controller

HelloWorld module is accessible via Service Locator:

```php
$hello = $this->getServiceLocator()->get('HelloWorld');
```

When you obtain the service and create the object, you can then use it to do the magic:

```php
$greeting = $hello->process('Mr. Bean');
```

## Questions or comments?

Feel free to email me with any questions or comments about this module

[info@arturgajewski.com](mailto:info@arturgajewski.com)