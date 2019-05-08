#!/usr/bin/env bash

if [ "$#" -ne 1 ]; then
    echo "Usage:"
    init_database.sh "mysql_user" "mysql_password" "host_name"
fi

database_name="starbucks"

echo "Create main database ${database_name}"
mysql -u${1} -p${2} -h${3}  -e "CREATE DATABASE ${database_name}"

echo "Create main tables in database ${database_name}"
mysql -u${1} -p${2} -h${3}  ${database_name} < ../database/tables.sql

echo "Inserting beverage names into beverage_menu table"
mysql -u${1} -p${2} -h${3} ${database_name}  -e "INSERT INTO beverage_menu (beverage_name) VALUES ('coffee'), ('tea'), ('frappuccino');"

echo "Inserting beverage options into beverage_options table"
mysql -u${1} -p${2} -h${3} ${database_name}  -e "INSERT INTO beverage_options (name) VALUES ('hot'), ('cold');"

echo "Inserting beverage prices into beverage_size_price table"
mysql -u${1} -p${2} -h${3} ${database_name}  -e "INSERT INTO beverage_size_price (beverage_size, price) VALUES ('small',1), ('medium',2), ('large',3);"


