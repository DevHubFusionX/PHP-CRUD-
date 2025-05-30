-- //=========== crudoperation.sql ===========//
CREATE TABLE IF NOT EXISTS crudoperation (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(100) NOT NULL,
  Email VARCHAR(100) NOT NULL,
  Address VARCHAR(255) NOT NULL
);
-- End

-- //=========== add to database (index.php) ============//
INSERT INTO crudoperation(Name, Email, Address) VALUE('$name', '$email', '$address')
-- End

-- //=========== (view.php) display the list of data table ===========//
select * from crudoperation
-- End 

-- ======= Delete from crudoperation (delete.php) ===========//
DELETE FROM `crudoperation` WHERE 0
-- End

-- ========== Edit from crudoperation (Edit.php) ========//
UPDATE `crudoperation` SET `ID`='[value-1]',
                            `Name`='[value-2]',
                            `Email`='[value-3]',
                            `Address`='[value-4]'
                             WHERE 1

                            --  End 