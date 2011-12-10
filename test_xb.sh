service mysql start
echo "MySQL started"
clear
php create.php
clear
innobackupex-1.5.1 /data/backups/ --user=root --databases="test"
clear
php drop.php
clear
service mysql stop
echo "MySQL stopped"
echo "Enter the target directory path"
set `ls /data/backups/ | grep 2011 | tail -n 1`
target_dir=$1
innobackupex --apply-log /data/backups/"$target_dir"
clear
innobackupex --copy-back /data/backups/"$target_dir"
clear
chown mysql /var/lib/mysql/ibdata1
chown mysql /var/lib/mysql/ib_logfile0
chown mysql /var/lib/mysql/ib_logfile1
chown -R mysql /var/lib/mysql/test
service mysql start
echo "MySQL started again"
php verify.php
clear
service mysql stop
echo "MySQL stopped again"

