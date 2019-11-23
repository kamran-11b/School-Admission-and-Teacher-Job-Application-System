
create table admin(
                   admin_id  int not null auto_increment PRIMARY KEY,
                   admin_name varchar(20) not null,
                   admin_email varchar(25) not null,
                   admin_phone varchar(25) not null,
                   admin_password varchar(25) not null,
				   admin_address varchar(25) not null
);

create table applicant_teacher(
               applicant_id int not null auto_increment PRIMARY KEY,
               applicant_name varchar(30) not null,
               father_name varchar(30) not null,
               mother_name varchar(30) not null,
               gender varchar(10) not null,
               relegion varchar(15) not null,
               nationality varchar(15) not null,
               nid_no varchar(25) not null,
			   date_of_birth DATE,
               applicant_email varchar(25) not null,
			   phone_number varchar(20) not null,
               division varchar(60) not null,
               district varchar(60) not null,
               thana varchar(60) not null,
               post_code integer not null,
			   address varchar(60) not null,
               ssc varchar(255) not null,
               hsc varchar(255) not null,
               graduation varchar(255) not null,
               payment_status boolean 			   
);

create table admission_student(
               admission_id int not null auto_increment PRIMARY KEY,
               admission_class varchar(30) not null,
               medium  varchar(10) not null,
			   previous_school varchar(20) not null,
               previous_result numeric(4,2) not null,
               student_name varchar(30) not null,
               father_name varchar(30) not null,
               mother_name varchar(30) not null,
               gender varchar(10) not null,
               relegion varchar(15) not null,
               nationality varchar(15) not null,
               nid_no varchar(25) not null,
			   date_of_birth DATE,
               email varchar(25) not null,
			   phone_number varchar(20) not null,
               division varchar(60) not null,
               district varchar(60) not null,
               thana varchar(60) not null,
               post_code integer not null,
			   address varchar(60) not null,
               payment_status boolean 		   
);

create table notice(
                   notice_id int not null auto_increment PRIMARY KEY,
                   notice varchar(255) not null,
                   notice_date  DATETIME
);

create table contact(
                   contact_id int not null auto_increment PRIMARY KEY,
                   name  DATETIME,
                   email varchar(25) not null,
                   phone_number varchar(20) not null,
                   message varchar(255) not null
);
