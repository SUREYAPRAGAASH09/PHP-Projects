create table personalDetails (
		            personalDetails_ID int IDENTITY(1,1) PRIMARY KEY NOT NULL,
		            FirstName varchar(100),
		            MiddleName varchar(100),
		            lastName varchar(100),
		            DOB date,
		            Gender varchar(20),
		            Language varchar(20));
create table AcademicDetails(
		            AcademicDetails int IDENTITY(1,1) PRIMARY KEY NOT NULL,
		            RollNo10 bigint(20), Maths10 int(3),Science10 int(3),English int(3),
		            Tamil10 int(3),Social int(3), Computer int(3),Totalmark10 int(3),
		            RollNo12 Bigint(20),
		            Major varchar(20),
		            maths12 int(3),
		            chemistry int(3),
		            TotalMark12 int(4),
		            RollNoCLG bigint(20),
		            Department varchar(20),
		            semester1 int(3),
		            semester2 int(3),
		            semester3 int(3),
		            semester4 int(3),
		            semester5 int(3),
		            semester6 int(3),
		            semester7 int(3),
		            semester8 int(3),
		            personalDetails_ID int FOREIGN KEY REFERENCES personalDetails(personalDetails_ID)
		            );