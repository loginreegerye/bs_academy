select count(u.id), u.first_name
from users u left outer join users_books ub on u.id = ub.user_id
where age>20 and age<50 group by u.id having count(u.id)>10

select *
from users u
where first_name like '%3%'

select *
from users unjoin users_books ub on u.id = ub.user_id join books b on ub.book_id=b.id
where b.title="Book #45"

alter table books add isbestseller bit

update books b
set isbestseller=1
where (select count(*) from users_books ub where ub.book_id = b.id)>10