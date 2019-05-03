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
       ['code'=>'SV01','name'=>'Y Quyet','birthday'=>'01-09-1999','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325865984','room_id'=>1],
       ['code'=>'SV02','name'=>'Doan Thi Ly','birthday'=>'10-09-1999','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314541245','room_id'=>1],
       ['code'=>'SV03','name'=>'Quach Thi Dieu','birthday'=>'10-01-1999','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0311548751','room_id'=>3],
       ['code'=>'SV04','name'=>'Dinh Son Lam','birthday'=>'03-04-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0332548541','room_id'=>7],
       ['code'=>'SV05','name'=>'Huynh Dang Thiet','birthday'=>'05-03-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0395845124','room_id'=>7],
       ['code'=>'SV06','name'=>'Nguyen Van Gia Thinh','birthday'=>'16-08-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325454584','room_id'=>7],
       ['code'=>'SV07','name'=>'Ngo Thi Tra Giang','birthday'=>'20-04-1998','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0321454581','room_id'=>2],
       ['code'=>'SV08','name'=>'Ho Thi Cam','birthday'=>'12-01-1998','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314548475','room_id'=>3],
       ['code'=>'SV09','name'=>'Phan Minh Cuong','birthday'=>'20-02-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>8],
       ['code'=>'SV10','name'=>'Tran Van Tai','birthday'=>'25-06-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301542745','room_id'=>8],
       ['code'=>'SV11','name'=>'Nguyen Huu Tuan','birthday'=>'13-06-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0324586952','room_id'=>8],
       ['code'=>'SV12','name'=>'Ho Van Huy','birthday'=>'12-12-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301256325','room_id'=>8],
       ['code'=>'SV13','name'=>'Ho Van Tao','birthday'=>'17-07-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301230251','room_id'=>8],
       ['code'=>'SV14','name'=>'A Lang Thi Kiet','birthday'=>'20-09-1999','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301489568','room_id'=>1],
       ['code'=>'SV15','name'=>'Dinh Thi Thanh','birthday'=>'20-12-1999','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0302363695','room_id'=>1],
       ['code'=>'SV16','name'=>'Tran Thi Thao','birthday'=>'24-02-1999','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>1],
       ['code'=>'SV17','name'=>'Cao Thi Thuy','birthday'=>'28-07-1999','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0385968952','room_id'=>2],
       ['code'=>'SV18','name'=>'Coor A Ui','birthday'=>'10-12-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>9],
       ['code'=>'SV19','name'=>'Dang Phuong Nam','birthday'=>'16-02-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0358575841','room_id'=>9],
       ['code'=>'SV20','name'=>'Dam Thien Phuc','birthday'=>'20-06-1999','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0345896584','room_id'=>9],
       ['code'=>'SV21','name'=>'Y Blir','birthday'=>'27-04-1998','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>6],
       ['code'=>'SV22','name'=>'Nguyen Thi Hang','birthday'=>'20-02-1998','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314586952','room_id'=>6],
       ['code'=>'SV23','name'=>'Nguyen Thi Xuyen','birthday'=>'30-07-1998','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0358569525','room_id'=>6],
       ['code'=>'SV24','name'=>'Nguyen Thi Dong','birthday'=>'07-07-1998','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0323632359','room_id'=>6],
       ['code'=>'SV25','name'=>'Hoih My','birthday'=>'20-02-1998','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0398659874','room_id'=>4],
       ['code'=>'SV26','name'=>'Phan Quoc Cuong','birthday'=>'20-06-1998','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0302154265','room_id'=>4],
       ['code'=>'SV27','name'=>'Ho Van Thu','birthday'=>'20-09-1998','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0335689542','room_id'=>4],
       ['code'=>'SV28','name'=>'Tran Van Tao','birthday'=>'18-06-1998','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325896584','room_id'=>4],
       ['code'=>'SV29','name'=>'Nguyen Van Tam','birthday'=>'18-02-1998','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0352487569','room_id'=>4],
       ['code'=>'SV30','name'=>'Do Phu Khanh','birthday'=>'01-12-1998','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0303265985','room_id'=>6],
       ['code'=>'SV31','name'=>'Bui Huu Hiep','birthday'=>'15-02-2000','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0336965842','room_id'=>5],
       ['code'=>'SV32','name'=>'Tran Vinh Long','birthday'=>'19-02-2000','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0323564875','room_id'=>5],
       ['code'=>'SV42','name'=>'Do Phu Thuat','birthday'=>'27-02-2000','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325898785','room_id'=>5],
       ['code'=>'SV33','name'=>'Ha Van Ngoc','birthday'=>'20-05-2000','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0325896321','room_id'=>5],
       ['code'=>'SV34','name'=>'Phan Thu Tien','birthday'=>'20-09-2000','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0308954575','room_id'=>5],
       ['code'=>'SV35','name'=>'Nguyen Van Manh','birthday'=>'04-05-2000','gender'=>'Nam','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0396547154','room_id'=>5],
       ['code'=>'SV36','name'=>'A Rat Thi Loan','birthday'=>'18-02-2000','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0314574854','room_id'=>10],
       ['code'=>'SV37','name'=>'Nguyen Thi Nhung','birthday'=>'20-08-2000','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0385258421','room_id'=>10],
       ['code'=>'SV38','name'=>'Ho Thi On','birthday'=>'20-07-2000','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0301232105','room_id'=>10],
       ['code'=>'SV39','name'=>'Ho Thi Huyen','birthday'=>'20-12-2000','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0308957021','room_id'=>10],
       ['code'=>'SV40','name'=>'Nguyen Thi Kim Van','birthday'=>'17-11-2000','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0332189547','room_id'=>10],
       ['code'=>'SV41','name'=>'Ngo Thi Kim Van','birthday'=>'17-11-1999','gender'=>'Nu','address'=>'101B-Le Huu Trac-Da Nang','phone'=>'0378542036','room_id'=>2],
       ]);
    }
}
