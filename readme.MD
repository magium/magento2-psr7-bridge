# Magium PSR 7 - Magento 2 Bridge

This is NOT completed yet.  It exists, right now, only for the purpose of working with magium/magento2-azure-active-directory.

## To Install
```
composer require magium/magento2-psr7-bridge
```

### To Use

```
use Psr\Http\Message\ServerRequestInterface;

class Example
{

    public function __construct( ServerRequestInterface $request )
    {
    
    }

}
```
