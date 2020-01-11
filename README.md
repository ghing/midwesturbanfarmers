#Midwest Urban Farmers

A Wordpress theme for the [Midwest Urban Farmers](http://midwesturbanfarmers.org/) web site.

It is based on the [Roots](http://www.rootstheme.com/) starting theme.

## Development site

There is a development version of the site at http://dev.midwesturbanfarmers.org.

### Syncing the database

Populate the development site database with a backup from the production site created with `mysqldump`:

```
gunzip -c ~/backup/mufcon/db/mufcon-20200110T213741.sql.gz | mysql --defaults-extra-file=~/mysql_conf/db451099148-mufcon_dev.my.cnf db451099148
```

Copy the files:

```
rsync -avh --exclude=wp-config.php ./mufcon/ ./mufcon_dev/
```

Update the site URL to the  http://dev.midwesturbanfarmers.org:

```
mysql --defaults-extra-file=~/mysql_conf/db451099148-mufcon_dev.my.cnf db451099148
```

Then in the MySQL shell:

```
mysql> UPDATE wp_options SET option_value = "http://dev.midwesturbanfarmers.org" WHERE option_name = "siteurl";
Query OK, 1 row affected (0.01 sec)
Rows matched: 1  Changed: 1  Warnings: 0
mysql> UPDATE wp_options SET option_value = "http://dev.midwesturbanfarmers.org" WHERE option_name = "home";
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0
```
