# test php mysql  
Store a form post in mysql  

## Dev Environment Setup  

    docker-compose up

## DB Setup  

1- Connect to the MySql Server  

    sh open-db-shell.sh

2- Create the `submissions` table. Run this in the MySql shell  

```sql
drop table if exists submissions;

CREATE TABLE submissions (
    vendor VARCHAR(20),
    ingredient VARCHAR(20)
);
```

## Verify its working  

Open up [http://localhost:8080/](http://localhost:8080/)  
