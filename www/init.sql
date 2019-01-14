create database cookbook;
use cookbook;

create user redrik identified by "redrik";
grant all privileges on cookbook.* to redrik@'%';
