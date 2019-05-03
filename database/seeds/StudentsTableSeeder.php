<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
       ['code'=>'SV01','name'=>'Y Quyet','birthday'=>'1999-09-01','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325865984','room_id'=>1, 'class_id'=>1],
       ['code'=>'SV02','name'=>'Doan Thi Ly','birthday'=>'1999-09-10','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314541245','room_id'=>1, 'class_id'=>1],
       ['code'=>'SV03','name'=>'Quach Thi Dieu','birthday'=>'1999-01-10','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0311548751','room_id'=>3, 'class_id'=>1],
       ['code'=>'SV04','name'=>'Dinh Son Lam','birthday'=>'1999-04-03','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0332548541','room_id'=>7, 'class_id'=>1],
       ['code'=>'SV05','name'=>'Huynh Dang Thiet','birthday'=>'1999-03-05','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0395845124','room_id'=>7, 'class_id'=>1],
       ['code'=>'SV06','name'=>'Nguyen Van Gia Thinh','birthday'=>'1999-08-16','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325454584','room_id'=>7, 'class_id'=>1],
       ['code'=>'SV07','name'=>'Ngo Thi Tra Giang','birthday'=>'1998-04-20','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0321454581','room_id'=>2, 'class_id'=>1],
       ['code'=>'SV08','name'=>'Ho Thi Cam','birthday'=>'1998-01-12','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314548475','room_id'=>3, 'class_id'=>1],
       ['code'=>'SV09','name'=>'Phan Minh Cuong','birthday'=>'1999-02-20','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>8, 'class_id'=>1],
       ['code'=>'SV10','name'=>'Tran Van Tai','birthday'=>'1999-01-29','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0915981110','room_id'=>8, 'class_id'=>1],
       ['code'=>'SV11','name'=>'Nguyen Huu Tuan','birthday'=>'1999-06-13','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0324586952','room_id'=>8, 'class_id'=>1],
       ['code'=>'SV12','name'=>'Ho Van Huy','birthday'=>'1999-12-1','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301256325','room_id'=>8, 'class_id'=>1],
       ['code'=>'SV13','name'=>'Ho Van Tao','birthday'=>'1999-07-17','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301230251','room_id'=>8, 'class_id'=>1],
       ['code'=>'SV14','name'=>'A Lang Thi Kiet','birthday'=>'1999-09-20','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301489568','room_id'=>1, 'class_id'=>1],
       ['code'=>'SV15','name'=>'Dinh Thi Thanh','birthday'=>'1999-12-20','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0302363695','room_id'=>1, 'class_id'=>1],
       ['code'=>'SV16','name'=>'Tran Thi Thao','birthday'=>'1999-02-24','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>1, 'class_id'=>1],
       ['code'=>'SV17','name'=>'Cao Thi Thuy','birthday'=>'1999-07-08','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0385968952','room_id'=>2, 'class_id'=>1],
       ['code'=>'SV18','name'=>'Coor A Ui','birthday'=>'1999-12-10','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>9, 'class_id'=>1],
       ['code'=>'SV19','name'=>'Dang Phuong Nam','birthday'=>'1999-02-16','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0358575841','room_id'=>9, 'class_id'=>1],
       ['code'=>'SV20','name'=>'Dam Thien Phuc','birthday'=>'1999-06-20','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0345896584','room_id'=>9, 'class_id'=>1],
       ['code'=>'SV21','name'=>'Y Blir','birthday'=>'1998-04-27','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>6, 'class_id'=>1],
       ['code'=>'SV22','name'=>'Nguyen Thi Hang','birthday'=>'1998-02-20','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314586952','room_id'=>6, 'class_id'=>1],
       ['code'=>'SV23','name'=>'Nguyen Thi Xuyen','birthday'=>'1998-07-30','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0358569525','room_id'=>6, 'class_id'=>1],
       ['code'=>'SV24','name'=>'Nguyen Thi Dong','birthday'=>'1998-07-07','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0323632359','room_id'=>6, 'class_id'=>1],
       ['code'=>'SV25','name'=>'Hoih My','birthday'=>'1998-02-21','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0398659874','room_id'=>4, 'class_id'=>1],
       ['code'=>'SV26','name'=>'Phan Quoc Cuong','birthday'=>'1998-06-20','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0302154265','room_id'=>4, 'class_id'=>1],
       ['code'=>'SV27','name'=>'Ho Van Thu','birthday'=>'1998-09-11','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0335689542','room_id'=>4, 'class_id'=>1],
       ['code'=>'SV28','name'=>'Tran Van Tao','birthday'=>'1998-06-18','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325896584','room_id'=>4, 'class_id'=>1],
       ['code'=>'SV29','name'=>'Nguyen Van Tam','birthday'=>'1998-02-12','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0352487569','room_id'=>4, 'class_id'=>1],
       ['code'=>'SV30','name'=>'Do Phu Khanh','birthday'=>'1998-12-01','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0303265985','room_id'=>6, 'class_id'=>1],
       ['code'=>'SV31','name'=>'Bui Huu Hiep','birthday'=>'2000-02-05','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0336965842','room_id'=>5, 'class_id'=>1],
       ['code'=>'SV32','name'=>'Tran Vinh Long','birthday'=>'2000-02-19','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0323564875','room_id'=>5, 'class_id'=>1],
       ['code'=>'SV42','name'=>'Do Phu Thuat','birthday'=>'2000-02-27','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325898785','room_id'=>5, 'class_id'=>1],
       ['code'=>'SV33','name'=>'Ha Van Ngoc','birthday'=>'2000-05-12','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325896321','room_id'=>5, 'class_id'=>1],
       ['code'=>'SV34','name'=>'Phan Thu Tien','birthday'=>'2000-09-20','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0308954575','room_id'=>5, 'class_id'=>1],
       ['code'=>'SV35','name'=>'Nguyen Van Manh','birthday'=>'2000-05-04','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0396547154','room_id'=>5, 'class_id'=>1],
       ['code'=>'SV36','name'=>'A Rat Thi Loan','birthday'=>'2000-02-18','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>10, 'class_id'=>1],
       ['code'=>'SV37','name'=>'Nguyen Thi Nhung','birthday'=>'2000-08-20','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0385258421','room_id'=>10, 'class_id'=>1],
       ['code'=>'SV38','name'=>'Ho Thi On','birthday'=>'2000-07-05','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301232105','room_id'=>10, 'class_id'=>1],
       ['code'=>'SV39','name'=>'Ho Thi Huyen','birthday'=>'2000-12-14','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0308957021','room_id'=>10, 'class_id'=>1],
       ['code'=>'SV40','name'=>'Nguyen Thi Kim Van','birthday'=>'2000-11-17','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0332189547','room_id'=>10, 'class_id'=>1],
       ['code'=>'SV41','name'=>'Ngo Thi Kim Van','birthday'=>'1999-11-22','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0378542036','room_id'=>2, 'class_id'=>1],
       ]);
    }
}
