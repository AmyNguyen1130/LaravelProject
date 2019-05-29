<p>Chào các bạn,</p>
Đến hẹn lại lên, chúng ta lại chào đón một tháng mới rồi. Các bạn đã sẵn sàng để nộp tiền điện nước chưa?<br>
Mình chỉ hỏi cho vui vậy thôi chứ dù các bạn đã sẵn sàng hay chưa thì mình cũng phải thông báo để các bạn nộp tiền điện tháng vừa rồi nhé.<br>
<p>Đây là thông tin tiền điện nước <span style="color: red"><strong>{{ $data['bill_month'] }}</strong></span>. Các bạn vui lòng xem thông tin chi tiết bên dưới và đừng quên nộp tiền cho mình trước <span style="color: red"><strong>{{ $data['deadline'] }}</strong></span> nhé.</p>

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
            @if(!$electric->deleted)
            <tr>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->room_name }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->time }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->old_number }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->new_number }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->price }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $electric->status ? "Đã nộp" : "Chưa nộp" }}</td>
            </tr>
            @endif
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
            @if(!$water->deleted)
            <tr>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->room_name }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->time }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->old_number }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->new_number }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->price }}</td>
                <td style="width: 12%; border-bottom: 1px solid #ffd0d0; text-align: center">{{ $water->status ? "Đã nộp" : "Chưa nộp" }}</td>
            </tr>
            @endif
            @endforeach
        </tbody>

    </table>
</div>

<br>
<p>Mình xin nhắc lại một lần nữa. Các bạn vui lòng nộp đúng hạn nhé. Cảm ơn các bạn rất nhiều.</p>
<p>Chúc các bạn có một tháng mới vui vẻ.</p>

Trân trọng,<br>
Bà Quản Lý