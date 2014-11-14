HamaryuginhMandrillBundle
=========================

**Work still in progress**

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
------------

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

Send an email from a Controller:

```php
/* Prepare the Message */
$mandrillMessage = new Message();
$mandrillMessage
    ->setSubject('Message subject')
    ->setHtml('<html><body>HTML content goes here</body></html>')
    ->setText('Text content goes here')
    ->setFromEmail('from.me@foo.bar')
    ->setFromName('From Me')
    ...
;

/* Get the Mandrill Manager */
$mandrillManager = $this->get('hamaryuginh.mandrill_manager');

/* Get Mandrill Message Service */
$mandrillMessage = $mandrillManager->get('message');

/* Send the Message : this method return a MessageResponse */
$messageResponse = $mandrillMessage->send($mandrillMessage);
```
