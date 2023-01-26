create database jk_database;
	use jk_database;
	
		create table user
			(user_id integer(10) not null primary key auto_increment,
				uname varchar(20),
				password varchar(50),
				user_type_id integer(10) not null);
				
			create table customer
				(c_id integer(10) not null primary key auto_increment,
					company varchar(20),
					tp integer(10),
					distance integer(10),
					email varchar(20),
					address varchar(40));
				create table employee
					(e_no integer(10) not null primary key,
						name varchar(20),
						address varchar(40),
						nic varchar(10),
						tp integer(10),
						email varchar(20));
						
						create table inquiry
							(inq_id integer(10) not null primary key auto_increment,
								inq_date date,
								inq_time time,
								serial_no integer(20),
								machine varchar(10),
								remark varchar(300),
								techclz varchar(10),
								e_no integer(10),
								company varchar(20),
								c_id integer(10),
								foreign key (e_no) references employee(e_no) on update cascade on delete restrict,
								
								foreign key (c_id) references customer(c_id) on update cascade on delete restrict);								
					create table job
						(job_id integer(10) not null primary key auto_increment,
							status varchar(10),
							c_id integer(10) not null,
							inq_id integer(10) not null,
							j_date date,
							apprved_by varchar(20),
							

							e_no integer(10),
							tech1 integer(10),
							tech2 integer(10),
							tech3 integer(10),
							tech4 integer(10),
							tech5 integer(10),
							tech6 integer(10),
							tech7 integer(10),
							tech8 integer(10),
							tech9 integer(10), 
							tech10 integer(10),
							foreign key (e_no) references employee(e_no) on update cascade on delete restrict,
							foreign key (c_id) references customer(c_id)on update cascade on delete restrict,
							foreign key (inq_id) references inquiry(inq_id)on update cascade on delete restrict);
							
						
							create table login
								(user_id varchar(10) not null primary key,
									log_date date,
									log_time time);
									
								create table news
									(n_id integer(10) not null primary key auto_increment,
										e_no integer(10) not null,
										foreign key (e_no) references employee(e_no)on update cascade on delete restrict,
										n_date date,
										n_time time,
										content varchar(200));
									create table technician
										(t_id integer(10) not null primary key auto_increment,
											e_no integer(10)not null,
											clz varchar(10),
										foreign key (e_no)references employee(e_no) on update cascade on delete restrict,
										class char);
										create table approval
											(app_id integer(10) not null primary key auto_increment,
												e_no integer(10)not null,
												job_id integer(10),
											foreign key(e_no)references employee(e_no) on update cascade on delete restrict,
											foreign key(job_id) references job (job_id) on update cascade on delete restrict,
											app_date date,
											app_time time);
											
											create table transport
												(t_id integer(10)not null primary key auto_increment,
													t_e_no integer(10)not null,
													t_job_id integer(10)not null,
													foreign key (t_e_no) references employee(e_no)on update cascade on delete restrict,
													c_vehicle char,
													amount integer(10),
													foreign key (t_job_id) references job(job_id)on update cascade on delete restrict);