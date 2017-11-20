create table user
(
    name        varchar(10),
    student_ID  integer(10),
    phone_num   integer(15),
    e_mail      varchar(30),
    user_id     varchar(30),
    user_pw     varchar(30),
    dept_name   varchar(15),

    primary key(user_id)
);
create table futsal_manage
(
  manage_ID     integer(10) not null default 1,
  user_id       varchar(10),
  borrowdate    date,
  start_time    time,
  end_time      time,
  place         varchar(10),
  purpose       varchar(30),
  home          varchar(30),
  away          varchar(30),
  notice        boolean,
  people        integer(5),
  groupname     varchar(10),
  primary key(manage_ID,borrowdate),
  constraint foreign key (user_id) references user(user_id)
    on delete set null
);
create table purpose_view
(
    manage_ID   integer(10),
    home        varchar(30),
    away        varchar(30),
    borrowdate  date,
    start_time  time,
    end_time    time,
    primary key(manage_ID,borrowdate)
);
create table lec_room_manage
(
  manage_ID     integer(10),
  user_id       varchar(10),
  borrowdate    date,
  start_time    time,
  end_time      time,
  place         varchar(20),
  purpose       varchar(30),
  people        integer(5),
  groupname     varchar(10),
  primary key(manage_ID,borrowdate),
  foreign key(user_id) references user(user_id)
    on delete set null
);
insert into user (name,student_ID, phone_num, e_mail
,user_id, user_pw, dept_name)
values ("parkjaehoon",2016003509, 010,"djdj","jaehoon","2345","sw");
insert into user (name,student_ID, phone_num, e_mail
,user_id, user_pw, dept_name)
values ("hoonoo",2016003508, 010,"djdj","hahah","2345","sw");

insert into futsal_manage (user_id, borrowdate, start_time, end_time, place,
purpose, notice, people, groupname)
values ("jaehoon","2017-02-03","12:00:00","14:00:00","대운동장",
"소프트 ict", true,20, "park");
insert into futsal_manage (user_id, borrowdate, start_time, end_time, place,
purpose, notice, people, groupname)
values ("hahah","2017-06-03","14:00:00","15:00:00","대운동장",
"전자 ict", true,20, "hoon");

insert into purpose_view
values (1, "소프트 ict", "2017-02-03","12:00:00","14:00:00");
insert into purpose_view
values (2, "전자 ict", "2017-02-03","12:00:00","14:00:00");
