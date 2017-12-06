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
    manage_ID     integer(10) not null auto_increment,
    user_id       varchar(10),
    borrowdate    date,
    start_time    time,
    end_time      time,
    place         varchar(10),
    purpose       varchar(30),
    notice        boolean,
    home          varchar(30),
    away          varchar(30),
    people        integer(5),
    groupname     varchar(10),
    matching      boolean,
    chat          varchar(150),
    primary key(manage_ID, borrowdate),
    constraint foreign key (user_id) references user(user_id)
        on delete set null
);
create table purpose_view
(
    manage_ID   integer(10),
    place       varchar(10),
    home        varchar(30),
    away        varchar(30),
    borrowdate  date,
    start_time  time,
    end_time    time,
    primary key(manage_ID,borrowdate)
);
create table matching_manage
(
    receive_id  varchar(10),
    chat        varchar(150),
    send_id     varchar(10),
    manage_ID   integer(10),
    borrowdate  date,
    primary key(send_id, manage_ID),
    constraint foreign key (receive_id) references user(user_id)
        on delete set null
);
insert into matching_manage values ("jh9277","한판합시다.","jh2628",2,"2017-12-06");
create table b_test
)
    num     integer(10),
    numb    integer(10),
    primary key(num, numb)
);