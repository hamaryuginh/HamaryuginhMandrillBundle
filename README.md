HamaryuginhMandrillBundle
=========================

A Symfony2 Bundle for Mandrill

This project is a fork of https://github.com/Hipaway-Travel/HipMandrillBundle

Prerequisites
-------------

Before you're able to use this bundle you must sign up with Mandrill.

http://mandrill.com

Mandrill is a great way to send your transactional emails and provides detailed advances reports.

Mandrill is free for limited number of email per day, please read through pricing section on the website for more information:

http://mandrill.com/pricing/

Installation
-----------

Add the bundle to your composer.json

```json
{
    "require": {
        "...",
        "hamaryuginh/mandrillbundle": "dev-master"
    }
}
```

Run composer install

```sh
php composer.phar install
```

Enable the bundle in the kernel

    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Hamaryuginh\MandrillBundle\HamaryuginhMandrillBundle(),
        );
    }

Configuration
-------------

Add configuration to config.yml.

Log in to Mandrill and go to "Settings" -> "SMTP & API Info". Create an API Key and use it in your Symfony2 Configuration.

```yaml
# config.yml

hamaryuginh_mandrill:
    api_key: xxxxx
    disable_delivery: true # useful for dev/test environment. Default value is 'false'
    default:
        sender: info@example.com
        sender_name: John Doe
        subaccount: Project # Optionally define a subaccount to use
```

Now you're all set, send your first transactional mails:

Use
---

@todo