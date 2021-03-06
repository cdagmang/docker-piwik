[General]
trusted_hosts[] = {{PIWIK_TRUSTED_HOST_MARKER}}
enable_trusted_host_check = {{PIWIK_TRUSTED_HOST_ACTIVE_MARKER}}
assume_secure_protocol = 1
proxy_client_headers[] = HTTP_X_FORWARDED_FOR
proxy_host_headers[] = HTTP_X_FORWARDED_HOST
extension=geoip.so
geoip.custom_directory=/piwik/misc

[database]
host = PIWIK_MYSQL_HOST
username = PIWIK_MYSQL_USER
password = PIWIK_MYSQL_PASSWORD
dbname = PIWIK_MYSQL_DBNAME
tables_prefix = PIWIK_MYSQL_PREFIX
port = PIWIK_MYSQL_PORT
adapter = PDO\MYSQL
type = InnoDB
schema = Mysql