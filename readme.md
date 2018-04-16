# SSL Monitor

Quick and hacky script you can point an uptime monitor towards to check the validity of SSL certificates

1. Run `git clone git@github.com:richjenks/ssl-monitor.git`
1. Then run `composer install`
1. And then run `php -S localhost:8008`
1. Finally visit [http://localhost:8008?richjenks.com]
```

Once setup, you can deploy somewhere and point an uptime monitor towards it and if, for any reason, the SSL certificate becomes invalid it'll respond with HTTP status code `500`.