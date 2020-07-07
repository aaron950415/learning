create database wt19854029;
use wt19854029;
create TABLE book(
            bookId int primary key,
            bookName varchar(255),
            author varchar(255),
            book_ISBN int,
            edition varchar(255)
            );
INSERT into book (bookId,bookName,author,book_ISBN,edition)
        SELECT
        1001,'Information Technology Project Management','Kathy Schwalbe',978133710,'9th'
        UNION ALL
        SELECT 1002,'A CEOs Survival Guide to Information Technology','Bob Coppedge',1579356,'Kindle'       
        UNION ALL
        SELECT 1003,'Information Technology and Military Power','Jon R. Lindsay',12463256,'Kindle'       

        UNION ALL
        SELECT 1004,'Cambridge International AS Level Information Technology Students Book',' Graham Brown',45325256,'Student &Kindle'       

        UNION ALL
        SELECT 1005,'Ethics in Information Technology','George Reynolds', 97467744 ,'7th'       
        UNION ALL
        SELECT 1006,'Fluency With Information Technology','Lawrence Snyder',108669325256,'Global';
        