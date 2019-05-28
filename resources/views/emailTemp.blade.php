<p>Chào các bạn,</p>
Đến hẹn lại lên, chúng ta lại chào đón một tháng mới rồi. Các bạn đã sẵn sàng nộp tiền điện chưa?<br>
Dù đã sẵn sàng hay chưa thì mình cũng phải thông báo để các bạn nộp tiền điện tháng trước.<br>
<p>Các bạn xem thông tin chi tiết bên dưới và đừng quên nộp tiền cho mình vào <span style="color: red"><strong>{{ $data['deadline'] }}</strong></span> nhé.</p>

<h4>TIỀN ĐIỆN:</h4>

<div class="table-responsive">
    <table>

        <thead style="background: #ffd0d0">
            <tr>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Phòng</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Thời gian</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Chỉ số cũ</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Chỉ số mới</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Thành tiền</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Tình trạng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['electrics'] as $electric)
            <tr>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->room_name }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->time }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->old_number }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->new_number }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->price }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->status }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<h4>TIỀN NƯỚC:</h4>

<div class="table-responsive">
    <table>

        <thead style="background: #ffd0d0">
            <tr>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Phòng</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Thời gian</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Chỉ số cũ</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Chỉ số mới</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Thành tiền</th>
                <th style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">Tình trạng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['waters'] as $water)
            <tr>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->room_name }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->time }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->old_number }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->new_number }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->price }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->status }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<br>
<p>Các bạn vui lòng nộp đúng hạn nhé. Cảm ơn các bạn rất nhiều.</p>
<p>Chúc các bạn tháng mới vui vẻ.</p>

Best regards,<br>
Trần Văn Tài