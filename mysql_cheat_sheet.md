# MySQL Cheat Sheet

> Help with SQL commands to interact with a MySQL database

## Pertama Buka Directory Xampp

## MySQL Locations
* Xampp           *C:/xampp/mysql/bin*

Copy path mysql kalian..  lalu klik link dibawah untuk lihat caranya

## Add mysql to your PATH

On Windows : https://helpdeskgeek.com/windows-10/add-windows-path-environment-variable/

## Login

Di terminal ketik
```bash
mysql -u root -p
```

## Change Database

```sql
USE mysql;
```

## Create User

```sql
CREATE USER 'crud'@'localhost' IDENTIFIED BY 'password123';
```

## Create Database

```sql
CREATE DATABASE crud;
```

## Grant All Priveleges On Database crud

```sql
GRANT ALL PRIVILEGES ON crud.* TO 'crud'@'localhost';
FLUSH PRIVILEGES;
```
