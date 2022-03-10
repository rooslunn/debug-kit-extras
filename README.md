# DebugKitExtras plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require rooslunn/debug-kit-extras
```

Load plugin in your Application::bootstrap() after loading "DebugKit" plugin.
```
// src/Application.php

public function bootstrap(): void
{

    // ...

    if (Configure::read('debug')) {
        $this->addPlugin('DebugKit');
        $this->addPlugin('DebugKitExtras');
        Configure::write('DebugKit.panels', [
            'DebugKitExtras.ReadConfigure',
            'DebugKitExtras.SqlLogExtra',
            'SqlLog' => false,
        ]);
    }
}
```