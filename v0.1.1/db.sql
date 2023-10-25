create table users(
user_id int serial default value,
uname varchar(50) not null,
firstname varchar(50) not null,
email varchar(50) unique not null,
upassword varchar(50) not null,
role_id int not null default 1,
primary key(user_id),
foreign key(role_id) references role(role_id)
);

create table posts(
post_id int serial default value,
ptitle varchar(100) not null,
content text not null,
user_id varchar(50) not null,
createdAt date not null,
primary key(id),
foreign key(user_id) references users(user_id)
);

create table role(
role_id int serial default value,
rname varchar(10) unique default 'user',
primary key(role_id)
);

create table comments(
comment_id int serial default value,
content text not null,
createdAt date not null,
user_id int not null ,
post_id int not null ,
primary key(comment_id),
foreign key(user_id) references users(user_id),
foreign key(post_id) references posts(post_id)
);