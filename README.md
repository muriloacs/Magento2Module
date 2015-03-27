## Synopsis

A sample module for Magento 2.

## Installation

1. Add this project in your composer.json:

    ```json
    "require": {
        "muriloamaral/magento2module": "dev-master"
    }
    ```

2. Now tell composer to download it by running the command:

    ```bash
    $ sudo composer update
    ```

## Post installation

1. Enabling it in your `app/etc/config.php` file.

    ```php
    <?php
        'modules' => array(
            // ...
            'MuriloAmaral_Magento2Module' => 1
        )
    ```
