<?php
    /*
        FORIGEN KEY
        ------------
        It maintain referential integrity between tables
            - means onlly valid data inserts
            - parent must exist before insert into child table if foreign key relation exists
            - Parent won't delete if it has childs except it has ON DELETE CASCADE

        ON DELETE CASCADE -  The child record is automatically deleted when the parent record is deleted.
        ON UPDATE CASCADE -  The child record is automatically updated when the parent record is updated.

        Data type must be same for primary key and foreign key

        A table can have multiple foreign keys

        A foreign key can reference non-primary columns, but those columns must be unique
    */
?>