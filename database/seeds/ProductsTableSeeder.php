<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
         	[
            'name' =>'Iphone5s',
            'image_lon' => 'ip1.jpg',
            'price' => 8000,
            'sale_price'=>7000,
            'chitietsanpham'=>'Chiều 2/4, tại họp báo thường kỳ Chính phủ, Thứ trưởng Bộ Tài nguyên và Môi trường Võ Tuấn Nhân khẳng định, thông tin Hà Nội là thành phố ô nhiễm bụi mịn (bụi siêu nhỏ PM 2.5) xếp thứ hai Đông Nam Á là chưa chính xác. Bởi đây là báo cáo về hiện trạng chất lượng không khí toàn cầu của Trung tâm Phát triển Sáng tạo Xanh, nhưng chỉ có số liệu của 20 thành phố thuộc bốn quốc gia ở Đông Nam Á. "Chưa có đầy đủ số liệu ở 11 nước Đông Nam Á nên không đủ cơ sở để đưa ra kết luận như trên", ông nói.

Ông Nhân cho biết, ô nhiễm môi trường ở Hà Nội thường tập trung vào mùa đông và mùa xuân (tháng 12 đến tháng 3 năm sau). Theo kết quả từ trạm quan trắc không khí của Tổng cục Môi trường, 10 trạm quan trắc của Sở Tài nguyên Môi trường Hà Nội, số liệu từ Đại sứ quán Mỹ, có việc hàm lượng bụi mịn đã vượt quy chuẩn cho phép trong một số ngày.

Thừa nhận, việc ô nhiễm bụi mịn vượt ngưỡng cho phép mang tính cục bộ ở Hà Nội "là có thật", Thứ trưởng Nhân giải thích nguyên nhân do tập trung cao mật độ giao thông, công trình xây dựng, nhà máy sản xuất, người dân đốt rác thải. Các tuyến đường như Phạm Văn Đồng, Minh Khai... mật độ giao thông dày đặc nên chỉ số ô nhiễm cao.

',
            'type_id'=>1,
            'hang_id'=>'1',
            'soluong'=>20,


        ]
   ] );
    }
}
