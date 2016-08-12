# test php mysql  
Store a form post in mysql  

## DB Setup  

### Spin up the MySql DB  

    docker-compose up -d

### Connect to the MySql Server  

    sh open-db-shell.sh

### Create the following table  

Run this in the MySql shell

```sql
drop table if exists submissions;

CREATE TABLE submissions (
    vendor VARCHAR(20),
    ingredient VARCHAR(20)
);
```
