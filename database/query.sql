/*admin insert query*/

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_password`, `admin_address`) 
     VALUES (NULL, 'Md Kamran Ahmad', 'j.kamran14@gmail.com', '01717929270', '12345', 'Amborkhana');
     

/*ALTER TABLE - Add COLUMN*/
ALTER TABLE Customers
ADD Email varchar(255);
     
/*ALTER TABLE - DROP COLUMN*/
ALTER TABLE admission_student
DROP COLUMN image;

