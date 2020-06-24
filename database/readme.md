# 資料庫
## select
```sql
SELECT * FROM students
-- 選取students資料表的所有欄位
SELECT id FROM students
-- 選取students資料表的id欄位
SELECT phone,mail FROM students
-- 選取students資料表的phone與mail欄位
```
## insert into
```sql
INSERT INTO students(name,phone,mail)VALUES('John','0987654321','john@gmail.com')
--新增一筆資料，包含name,phone,mail
```
## delete
```sql
DELETE FROM students WHERE id = 2
-- 刪除id是2的資料
```
## update
```sql
UPDATE students SET mail='value1',phone='value2' WHERE id = 4
-- 更新id是4的mail與phone欄位內資料
```