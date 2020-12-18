create table codelex_blog.emails
(
	id int auto_increment
		primary key,
	email varchar(255) not null,
	created_at timestamp default CURRENT_TIMESTAMP not null on update CURRENT_TIMESTAMP
);

